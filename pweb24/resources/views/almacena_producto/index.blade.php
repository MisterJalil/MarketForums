@extends('layouts.app')

@section('content')
    <h1>Productos Almacenados</h1>
    <a href="{{ route('almacena_producto.create') }}" class="btn btn-primary">Agregar Producto</a>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>ID Puesto</th>
            <th>ID Producto</th>
            <th>Cantidad Disponible</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        @foreach($almacenaProductos as $almacenaProducto)
            <tr>
                <td>{{ $almacenaProducto->id }}</td>
                <td>{{ $almacenaProducto->id_puesto }}</td>
                <td>{{ $almacenaProducto->id_producto }}</td>
                <td>{{ $almacenaProducto->cantidad_disponible }}</td>
                <td>
                    <a href="{{ route('almacena_producto.show', $almacenaProducto->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('almacena_producto.edit', $almacenaProducto->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('almacena_producto.destroy', $almacenaProducto->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
