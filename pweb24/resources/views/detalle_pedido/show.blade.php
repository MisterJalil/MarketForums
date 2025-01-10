@extends('layouts.app')

@section('content')
    <h1>Detalles del Detalle de Pedido</h1>
    <p><strong>ID:</strong> {{ $detallePedido->id }}</p>
    <p><strong>ID Pedido:</strong> {{ $detallePedido->id_pedido }}</p>
    <p><strong>ID Producto:</strong> {{ $detallePedido->id_producto }}</p>
    <p><strong>Cantidad:</strong> {{ $detallePedido->cantidad }}</p>
    <p><strong>Precio Unitario:</strong> {{ $detallePedido->precio_unitario }}</p>
    <a href="{{ route('detalle_pedido.index') }}" class="btn btn-primary">Volver a la lista</a>
@endsection
