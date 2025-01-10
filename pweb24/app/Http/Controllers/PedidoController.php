<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidoController extends Controller
{
    public function index()
    {
        $pedidos = Pedido::with('detalles')->get(); // Incluye los detalles del pedido
        return view('pedidos.index', compact('pedidos'));
    }

    public function show($id)
    {
        $pedido = Pedido::with('detalles')->findOrFail($id);
        return view('pedidos.show', compact('pedido'));
    }
}
