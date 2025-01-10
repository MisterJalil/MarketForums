@extends('layouts.app')

@section('content')
    <h1>Detalles del Usuario</h1>
    <p><strong>ID:</strong> {{ $usuario->id }}</p>
    <p><strong>Nombre:</strong> {{ $usuario->nombre }}</p>
    <p><strong>Email:</strong> {{ $usuario->email }}</p>
    <p><strong>Rol:</strong> {{ $usuario->rol }}</p>
    <a href="{{ route('usuarios.index') }}" class="btn btn-primary">Volver a la lista</a>
@endsection
