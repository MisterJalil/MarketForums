@extends('layouts.app')

@section('content')
    <h1>Editar Detalle de Pedido</h1>
    <form action="{{ route('detalle_pedido.update', $detallePedido->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id_pedido">ID Pedido</label>
            <input type="number" name="id_pedido" class="form-control" value="{{ $detallePedido->id_pedido }}" required>
        </div>
        <div class="form-group">
            <label for="id_producto">ID Producto</label>
            <input type="number" name="id_producto" class="form-control" value="{{ $detallePedido->id_producto }}" required>
        </div>
        <div class="form-group">
            <label for="cantidad">Cantidad</label>
            <input type="number" name="cantidad" class="form-control" value="{{ $detallePedido->cantidad }}" required min="1">
        </div>
        <div class="form-group">
            <label for="precio_unitario">Precio Unitario</label>
            <input type="number" step="0.01" name="precio_unitario" class="form-control" value="{{ $detallePedido->precio_unitario }}" required min="0.01">
        </div>
        <button type="submit" class="btn btn-warning">Actualizar Detalle de Pedido</button>
    </form>
@endsection
