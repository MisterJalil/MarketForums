@extends('layouts.app')

@section('content')
    <h1>Detalles de la Factura</h1>
    <p><strong>ID:</strong> {{ $factura->id }}</p>
    <p><strong>Fecha:</strong> {{ $factura->fecha }}</p>
    <p><strong>Coste Total:</strong> {{ $factura->coste_total }}</p>
    <p><strong>ID Puesto:</strong> {{ $factura->id_puesto }}</p>
    <p><strong>ID Proveedor:</strong> {{ $factura->id_proveedor }}</p>

    <a href="{{ route('facturas.index') }}" class="btn btn-primary">Volver a la lista</a>
@endsection
