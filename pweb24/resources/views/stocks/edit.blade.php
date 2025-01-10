@extends('layouts.app')

@section('content')
    <h1>Editar Stock</h1>
    <form action="{{ route('stocks.update', $stock->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="id_producto">ID Producto</label>
            <input type="number" name="id_producto" class="form-control" value="{{ $stock->id_producto }}" required>
        </div>
        <div class="form-group">
            <label for="id_proveedor">ID Proveedor</label>
            <input type="number" name="id_proveedor" class="form-control" value="{{ $stock->id_proveedor }}" required>
        </div>
        <div class="form-group">
            <label for="cantidad">Cantidad</label>
            <input type="number" name="cantidad" class="form-control" value="{{ $stock->cantidad }}" required min="1">
        </div>
        <button type="submit" class="btn btn-warning">Actualizar Stock</button>
    </form>
@endsection
