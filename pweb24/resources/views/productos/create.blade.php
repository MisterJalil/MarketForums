@extends('layouts.app')

@section('content')
<h1>Crear Producto</h1>
<form action="{{ route('productos.store') }}" method="POST">
    @csrf
    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre" id="nombre" required>
    <label for="categoria">Categoría:</label>
    <input type="text" name="categoria" id="categoria" required>
    <label for="descripcion">Descripción:</label>
    <textarea name="descripcion" id="descripcion"></textarea>
    <button type="submit">Guardar</button>
</form>
@endsection
