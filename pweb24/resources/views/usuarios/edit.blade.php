@extends('layouts.app')

@section('content')
    <h1>Editar Usuario</h1>
    <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" value="{{ $usuario->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" value="{{ $usuario->email }}" required>
        </div>
        <div class="form-group">
            <label for="contraseña">Contraseña (déjalo en blanco si no deseas cambiarla)</label>
            <input type="password" name="contraseña" class="form-control">
        </div>
        <div class="form-group">
            <label for="rol">Rol</label>
            <select name="rol" class="form-control" required>
                <option value="comprador" {{ $usuario->rol == 'comprador' ? 'selected' : '' }}>Comprador</option>
                <option value="vendedor" {{ $usuario->rol == 'vendedor' ? 'selected' : '' }}>Vendedor</option>
            </select>
        </div>
        <button type="submit" class="btn btn-warning">Actualizar Usuario</button>
    </form>
@endsection

