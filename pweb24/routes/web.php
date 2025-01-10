<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\PuestoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\StockController;
use App\Http\Controllers\HistoricoController;
use App\Http\Controllers\AlmacenaProductoController;
use App\Http\Controllers\DetalleFacturaController;
use App\Http\Controllers\PruebaController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/logout/{destino?}', function ($destino = 'miPortal') {
    auth()->logout();
    session()->invalidate();
    session()->regenerateToken();
    $destino='/'.$destino;
    return redirect( $destino );
})->where('destino', '.*')->name('Logout');

// --- Definición de Rutas ---
// Ruta para Francisco Público
Route::get('/FranciscoPublico', function () {
   return redirect('francisco.html');
});

Route::get('/JalilPublic', function () {
    return redirect('JalilPublic.html'); // Redirige al archivo HTML público
});

Route::get('/JalilPrivado', function () {
    return response()->file(base_path('practica/JalilPrivado.html'));
});

// Ruta para Carlos Público
Route::get('/CarlosPublico', function () {
   return redirect('CarlosPublico.html');
});

// Ruta para Gabriel Público
Route::get('/GabrielPublico', function () {
    return redirect('gabriellares.html');
});

// Ruta para Francisco Privado
Route::get('/FranciscoPrivado', function () {
    return response()->file(base_path('practica/FranciscoPrivado.html'));
});

// Ruta para Carlos Privado
Route::get('/CarlosPrivado', function () {
    return response()->file(base_path('practica/CarlosPrivado.html'));
});

// Ruta para Gabriel Privado
Route::get('/GabrielPrivado', function () {
    return response()->file(base_path('practica/GabrielPrivado.html'));
});

// Ruta para acceder a la página personal de cada miembro
Route::get('/paginaPersonal/{nombre}', function($nombre) {
    $contenido = File::get(base_path("practica/{$nombre}Privado.html"));
    return view('paginapersonal_grupo2', ['nombre' => $nombre,
        'contenido' => $contenido]);
});

//Ruta para presentar a los miembros del grupo
Route::get('/elGrupo2', function() {
    return view('/proyectofinal/nuestrogrupo');
});

//Rutas para acceder al Home del Portal
Route::get('/miPortal', function () {
    return view('/proyectofinal/home');
});

Route::get('/miPortal/home', function () {
    return view('/proyectofinal/home');
});


// --- Rutas para Controllers ---
Route::resource('usuarios', UsuarioController::class);
Route::resource('/miPortal/puestos', PuestoController::class);
Route::resource('/miPortal/productos', ProductoController::class);
Route::resource('proveedors', ProveedorController::class);
Route::resource('facturas', FacturaController::class);
Route::resource('stocks', StockController::class);
Route::resource('historicos', HistoricoController::class);
Route::resource('almacena_producto', AlmacenaProductoController::class);
Route::resource('detalle_factura', DetalleFacturaController::class);

Route::get('pepe', PruebaController::class);

// --- Rutas Práctica 4 ---
Route::get('/miPortal/practica4/basico', function () {
    return view('/practica4_basico');
});
Route::get('/miPortal/practica4/sensores', function () {
    return view('/sensores');
});

Route::get('/miPortal/graficos', function () {
    return view('/proyectofinal/graficos');
});

Route::get('/miPortal/avisos_legales', function () {
    return view('/avisos_legales');
})->name('avisos_legales');


// --- Rutas Práctica 5 ---
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\DetallePedidoController;
use App\Http\Controllers\CarritoController;
use App\Http\Controllers\PayPalController;

Route::get('/carrito', [CarritoController::class, 'mostrarCarrito'])->name('carrito.mostrar');
Route::post('/carrito/agregar/{id}', [CarritoController::class, 'agregarProducto'])->name('carrito.agregar');
// PayPal
Route::post('/carrito/pagoPaypal', [PayPalController::class, 'payWithPayPal'])->name('paypal.pagar');
Route::get('/carrito/pagoPaypal/status', [PayPalController::class, 'payPalStatus'])->name('paypal.status');
Route::get('/carrito/pagoPaypal/cancel', [PayPalController::class, 'cancel'])->name('paypal.cancel');
// Simulación del Pago
Route::get('/carrito/pago', [CarritoController::class, 'pagoSimulado'])->name('carrito.simulado');
Route::post('/carrito/confirmar', [CarritoController::class, 'confirmarPago'])->name('carrito.confirmarPago');
Route::get('/carrito/pago/completado', [CarritoController::class, 'pagoCompletado'])->name('carrito.pagoCompletado');

// Rutas para Pedidos
Route::get('/pedidos', [PedidoController::class, 'index'])->name('pedidos.index');
Route::get('/pedidos/{id}', [PedidoController::class, 'show'])->name('pedidos.show');

// Rutas para Detalles del Pedido
Route::get('/pedidos/{id}/detalles', [DetallePedidoController::class, 'index'])->name('detalle_pedido.index');


// --- Rutas Practica 6 ---
use App\Http\Controllers\MensajeController;

Route::get('/miPortal/acceso', [MensajeController::class, 'acceso'])->name('acceso');
Route::post('/miPortal/verificar', [MensajeController::class, 'verificar'])->name('verificar');
Route::get('/miPortal/acceso/muro', [MensajeController::class, 'index'])->name('mensajes.index');
Route::post('/miPortal/acceso/muro', [MensajeController::class, 'store'])->name('mensajes.store');







//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/simpleCMS/{slug?}', function ($slug = 'home')
{
    if ($slug==null) { $slug='home';}
    $page = \Tobiasla78\FilamentSimplePages\Models\SimplePage::where('slug', $slug)->first();
    if (!$page) {
        abort(404);
    }
    if (!$page->is_public) {
        abort(403);
    }
    return view('vendor/filament-simple-pages/simpleCMS-page', compact('page'));
    return view('filament-simple-pages::filament.pages.simple-page', compact('page'));
})->where('slug', '.*');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
