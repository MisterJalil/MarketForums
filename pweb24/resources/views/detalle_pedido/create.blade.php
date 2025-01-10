@extends('layouts.app')

@section('content')
    <h1>Crear Detalle de Pedido</h1>
    <form action="{{ route('detalle_pedido.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id_pedido">ID Pedido</label>
            <input type="number" name="id_pedido" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="id_producto">ID Producto</label>
            <input type="number" name="id_producto" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="cantidad">Cantidad</label>
            <input type="number" name="cantidad" class="form-control" required min="1">
        </div>
        <div class="form-group">
            <label for="precio_unitario">Precio Unitario</label>
            <input type="number" step="0.01" name="precio_unitario" class="form-control" required min="0.01">
        </div>
        <button type="submit" class="btn btn-success">Crear Detalle de Pedido</button>
    </form>
@endsection
