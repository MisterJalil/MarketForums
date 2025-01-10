@extends('layouts.app')

@section('content')
    <h1>Editar Proveedor</h1>
    <form action="{{ route('proveedors.update', $proveedor->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="sector">Sector</label>
            <input type="text" name="sector" class="form-control" value="{{ $proveedor->sector }}" required>
        </div>
        <div class="form-group">
            <label for="contacto">Contacto (Teléfono)</label>
            <input type="text" name="contacto" class="form-control" value="{{ $proveedor->contacto }}" required pattern="[0-9]{9,15}">
        </div>
        <div class="form-group">
            <label for="id_usuario">ID Usuario</label>
            <input type="number" name="id_usuario" class="form-control" value="{{ $proveedor->id_usuario }}" required>
        </div>
        <button type="submit" class="btn btn-warning">Actualizar Proveedor</button>
    </form>
@endsection
