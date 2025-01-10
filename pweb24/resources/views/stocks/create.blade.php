@extends('layouts.app')

@section('content')
    <h1>Crear Stock</h1>
    <form action="{{ route('stocks.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="id_producto">ID Producto</label>
            <input type="number" name="id_producto" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="id_proveedor">ID Proveedor</label>
            <input type="number" name="id_proveedor" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="cantidad">Cantidad</label>
            <input type="number" name="cantidad" class="form-control" required min="1">
        </div>
        <button type="submit" class="btn btn-success">Crear Stock</button>
    </form>
@endsection
