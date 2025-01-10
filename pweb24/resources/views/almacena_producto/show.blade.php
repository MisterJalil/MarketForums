@extends('layouts.app')

@section('content')
    <h1>Detalles del Producto Almacenado</h1>
    <p><strong>ID:</strong> {{ $almacenaProducto->id }}</p>
    <p><strong>ID Puesto:</strong> {{ $almacenaProducto->id_puesto }}</p>
    <p><strong>ID Producto:</strong> {{ $almacenaProducto->id_producto }}</p>
    <p><strong>Cantidad Disponible:</strong> {{ $almacenaProducto->cantidad_disponible }}</p>

    <a href="{{ route('almacena_producto.index') }}" class="btn btn-primary">Volver a la lista</a>
@endsection
