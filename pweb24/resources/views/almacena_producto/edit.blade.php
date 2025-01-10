@extends('layouts.app')

@section('content')
    <h1>Editar Producto Almacenado</h1>
    <form action="{{ route('almacena_producto.update', $almacenaProducto->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="id_puesto">ID Puesto</label>
            <input type="number" name="id_puesto" class="form-control" value="{{ $almacenaProducto->id_puesto }}" required>
        </div>

        <div class="form-group">
            <label for="id_producto">ID Producto</label>
            <input type="number" name="id_producto" class="form-control" value="{{ $almacenaProducto->id_producto }}" required>
        </div>

        <div class="form-group">
            <label for="cantidad_disponible">Cantidad Disponible</label>
            <input type="number" name="cantidad_disponible" class="form-control" value="{{ $almacenaProducto->cantidad_disponible }}" required>
        </div>

        <button type="submit" class="btn btn-warning">Actualizar Producto</button>
        <a href="{{ route('almacena_producto.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
