@extends('layouts.app')

@section('content')
    <h1>Detalles del Detalle de Factura</h1>
    <p><strong>ID:</strong> {{ $detalleFactura->id }}</p>
    <p><strong>ID Factura:</strong> {{ $detalleFactura->id_factura }}</p>
    <p><strong>ID Producto:</strong> {{ $detalleFactura->id_producto }}</p>
    <p><strong>Cantidad:</strong> {{ $detalleFactura->cantidad }}</p>
    <p><strong>Precio Unitario:</strong> {{ $detalleFactura->precio_unitario }}</p>

    <a href="{{ route('detalle_factura.index') }}" class="btn btn-primary">Volver a la lista</a>
@endsection
