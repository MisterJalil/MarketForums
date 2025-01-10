@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles del Pedido</h1>
        <p><strong>ID:</strong> {{ $pedido->id }}</p>
        <p><strong>Estado:</strong> {{ $pedido->estado }}</p>
        <p><strong>ID Usuario:</strong> {{ $pedido->id_usuario }}</p>
        <p><strong>ID Puesto:</strong> {{ $pedido->id_puesto }}</p>
        <a href="{{ route('pedidos.index') }}" class="btn btn-primary">Volver a la lista</a>
    </div>
@endsection
