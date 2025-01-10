@extends('layouts.app')

@section('content')
    <h1>Detalles del Proveedor</h1>
    <p><strong>ID:</strong> {{ $proveedor->id }}</p>
    <p><strong>Sector:</strong> {{ $proveedor->sector }}</p>
    <p><strong>Contacto:</strong> {{ $proveedor->contacto }}</p>
    <p><strong>ID Usuario:</strong> {{ $proveedor->id_usuario }}</p>
    <a href="{{ route('proveedors.index') }}" class="btn btn-primary">Volver a la lista</a>
@endsection
