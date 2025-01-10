<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DetallePedido;

class DetallePedidoController extends Controller
{
    public function index($id_pedido)
    {
        $detalles = DetallePedido::where('id_pedido', $id_pedido)->get();
        return view('detalle_pedido.index', compact('detalles'));
    }
}
