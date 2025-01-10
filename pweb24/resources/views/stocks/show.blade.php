@extends('layouts.app')

@section('content')
    <h1>Detalles del Stock</h1>
    <p><strong>ID:</strong> {{ $stock->id }}</p>
    <p><strong>ID Producto:</strong> {{ $stock->id_producto }}</p>
    <p><strong>ID Proveedor:</strong> {{ $stock->id_proveedor }}</p>
    <p><strong>Cantidad:</strong> {{ $stock->cantidad }}</p>
    <a href="{{ route('stocks.index') }}" class="btn btn-primary">Volver a la lista</a>
@endsection
