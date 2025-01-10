@extends('layouts.app')

@section('content')
    <h1>Agregar Producto Almacenado</h1>
    <form action="{{ route('almacena_producto.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="id_puesto">ID Puesto</label>
            <input type="number" name="id_puesto" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="id_producto">ID Producto</label>
            <input type="number" name="id_producto" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="cantidad_disponible">Cantidad Disponible</label>
            <input type="number" name="cantidad_disponible" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-success">Agregar Producto</button>
        <a href="{{ route('almacena_producto.index') }}" class="btn btn-secondary">Cancelar</a>
    </form>
@endsection
