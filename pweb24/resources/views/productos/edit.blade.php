@extends('layouts.app')

@section('content')
<h1>Editar Producto</h1>
<form action="{{ route('productos.update', $producto->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" value="{{ $producto->nombre }}" required>
    <label for="categoria">Categoría:</label>
    <input type="text" name="categoria" id="categoria" value="{{ $producto->categoria }}" required>
    <label for="descripcion">Descripción:</label>
    <textarea name="descripcion" id="descripcion">{{ $producto->descripcion }}</textarea>
    <button type="submit">Actualizar</button>
</form>
@endsection
