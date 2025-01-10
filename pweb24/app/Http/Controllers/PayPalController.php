<?php

namespace App\Http\Controllers;

use App\Models\DetallePedido;
use App\Models\Pedido;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Illuminate\Support\Facades\Log;

class PayPalController extends Controller
{
    /**
     * Inicia el pago con PayPal.
     */
    public function payWithPayPal(Request $request)
    {
        // Obtén el carrito desde la sesión
        $carrito = session()->get('carrito', []);

        if (empty($carrito)) {
            return redirect()->route('carrito.mostrar')->with('error', 'El carrito está vacío.');
        }

        $totalGeneral = 0;

        // Calcular el total del carrito
        foreach ($carrito as $puestoId => $productos) {
            foreach ($productos as $productoId => $producto) {
                $totalGeneral += $producto['precio'] * $producto['cantidad'];
            }
        }

        if ($totalGeneral <= 0) {
            return redirect()->route('carrito.mostrar')->with('error', 'El total del carrito no es válido.');
        }

        try {
            // Configuración de PayPal
            $provider = new PayPalClient();
            $provider->setApiCredentials(config('paypal'));
            $token = $provider->getAccessToken();
            $provider->setAccessToken($token);

            // Crear el pedido en PayPal
            $response = $provider->createOrder([
                'intent' => 'CAPTURE',
                'purchase_units' => [
                    [
                        'amount' => [
                            'currency_code' => 'USD',
                            'value' => $totalGeneral,
                        ],
                    ],
                ],
                'application_context' => [
                    'return_url' => route('paypal.status'), // Redirección después de aprobar el pago
                    'cancel_url' => route('paypal.cancel'), // Redirección si se cancela el pago
                ],
            ]);

            if (isset($response['id']) && $response['status'] == 'CREATED') {
                // Guardar el ID del pedido en la sesión
                session()->put('paypal_order_id', $response['id']);

                // Redirigir al flujo de aprobación
                foreach ($response['links'] as $link) {
                    if ($link['rel'] === 'approve') {
                        return redirect()->away($link['href']);
                    }
                }
            }

            return redirect()->route('carrito.mostrar')->with('error', 'No se pudo conectar con PayPal. Inténtalo más tarde.');
        } catch (\Exception $e) {
            return redirect()->route('carrito.mostrar')->with('error', 'Ocurrió un error al procesar el pago: ' . $e->getMessage());
        }
    }



    /**
     * Maneja el estado del pago después de PayPal.
     */
    public function payPalStatus(Request $request)
    {
        $carrito = session()->get('carrito', []);
        $emailUsuario = session('email');
        $usuario = Usuario::where('email', $emailUsuario)->first();

        if (!$usuario) {
            return redirect()->route('acceso')->with('error', 'No se pudo encontrar el usuario.');
        }
        try {
            $provider = new PayPalClient();
            $provider->setApiCredentials(config('paypal'));
            $token = $provider->getAccessToken();
            $provider->setAccessToken($token);

            $paypalOrderId = session()->get('paypal_order_id');

            if (!$paypalOrderId) {
                return redirect()->route('carrito.mostrar')->with('error', 'No se encontró el ID del pedido.');
            }

            // Capturar el pago
            $response = $provider->capturePaymentOrder($paypalOrderId);

            if (isset($response['status']) && $response['status'] == 'COMPLETED') {
                // Limpiar el carrito después del pago
                session()->forget('carrito');
                session()->forget('paypal_order_id');

                foreach ($carrito as $puestoId => $productos) {
                    $pedido = new Pedido();
                    $pedido->estado = 'pagado';
                    $pedido->id_usuario = $usuario->id;
                    $pedido->id_puesto = $puestoId;
                    $pedido->save();

                    foreach ($productos as $id => $item) {
                        $detalle = new DetallePedido();
                        $detalle->id_pedido = $pedido->id;
                        $detalle->id_producto = $id;
                        $detalle->cantidad = $item['cantidad'];
                        $detalle->precio_unitario = $item['precio'];
                        $detalle->save();
                    }
                }

                return redirect()->route('carrito.mostrar')->with('success', 'Pago completado con éxito.');
            }



            return redirect()->route('carrito.mostrar')->with('error', 'El pago no se pudo completar.');
        } catch (\Exception $e) {
            return redirect()->route('carrito.mostrar')->with('error', 'Error al completar el pago: ' . $e->getMessage());
        }
    }



    /**
     * Maneja la cancelación del pago.
     */
    public function cancel()
    {
        return redirect()->route('carrito.mostrar')->with('error', 'Has cancelado el pago.');
    }
}
