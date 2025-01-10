@extends('layouts.app')

@section('content')
    <h1>Crear Proveedor</h1>
    <form action="{{ route('proveedors.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="sector">Sector</label>
            <input type="text" name="sector" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="contacto">Contacto (Teléfono)</label>
            <input type="text" name="contacto" class="form-control" required pattern="[0-9]{9,15}">
        </div>
        <div class="form-group">
            <label for="id_usuario">ID Usuario</label>
            <input type="number" name="id_usuario" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Crear Proveedor</button>
    </form>
@endsection
