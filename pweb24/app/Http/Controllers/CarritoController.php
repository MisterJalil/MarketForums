<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Pedido;
use App\Models\DetallePedido;
use App\Models\Usuario;

class CarritoController extends Controller
{
    public function mostrarCarrito()
    {
        if (!session()->has('email')) {
            return redirect()->route('acceso')->with('error', 'Debes iniciar sesión para acceder al carrito.');
        }

        $carrito = session()->get('carrito', []);

        $totalesPorPuesto = [];
        $totalGeneral = 0;

        foreach ($carrito as $puestoId => $productos) {
            $totalPuesto = array_reduce($productos, function ($sum, $item) {
                return $sum + $item['precio'] * $item['cantidad'];
            }, 0);
            $totalesPorPuesto[$puestoId] = $totalPuesto;
            $totalGeneral += $totalPuesto;
        }

        return view('carrito.index', compact('carrito', 'totalesPorPuesto', 'totalGeneral'));
    }

    public function agregarProducto(Request $request, $id)
    {
        if (!session()->has('email')) {
            return response()->json(['error' => 'Debes iniciar sesión para añadir productos al carrito.'], 403);
        }

        $producto = Producto::with('almacenaProducto')->findOrFail($id);

        if (!$producto->almacenaProducto || $producto->almacenaProducto->cantidad_disponible <= 0) {
            return response()->json(['error' => 'El producto no está disponible o no tiene precio asignado.'], 400);
        }

        $puestoId = $producto->almacenaProducto->id_puesto;
        $carrito = session()->get('carrito', []);

        if (!isset($carrito[$puestoId])) {
            $carrito[$puestoId] = [];
        }

        if (isset($carrito[$puestoId][$id])) {
            $carrito[$puestoId][$id]['cantidad']++;
        } else {
            $carrito[$puestoId][$id] = [
                'nombre' => $producto->nombre,
                'precio' => $producto->almacenaProducto->precio,
                'cantidad' => 1,
            ];
        }

        session()->put('carrito', $carrito);

        return response()->json(['success' => 'Producto añadido al carrito.']);
    }

    public function pagoSimulado()
    {
        $carrito = session()->get('carrito', []);
        $totalGeneral = 0;
        $totalesPorPuesto = [];

        foreach ($carrito as $puestoId => $productos) {
            $totalPuesto = array_reduce($productos, function ($sum, $item) {
                return $sum + $item['precio'] * $item['cantidad'];
            }, 0);
            $totalesPorPuesto[$puestoId] = $totalPuesto;
            $totalGeneral += $totalPuesto;
        }

        return view('pago.simulado', compact('carrito', 'totalGeneral', 'totalesPorPuesto'));
    }

    public function confirmarPago(Request $request)
    {
        $carrito = session()->get('carrito', []);

        if (empty($carrito)) {
            return redirect()->route('carrito.mostrar')->with('error', 'El carrito está vacío.');
        }

        $emailUsuario = session('email');
        $usuario = Usuario::where('email', $emailUsuario)->first();

        if (!$usuario) {
            return redirect()->route('acceso')->with('error', 'No se pudo encontrar el usuario.');
        }

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

        session()->forget('carrito');

        return redirect()->route('carrito.mostrar')->with('success', 'Compra registrada con éxito.');
    }
}
