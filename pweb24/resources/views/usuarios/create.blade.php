@extends('layouts.app')

@section('content')
    <h1>Crear Usuario</h1>
    <form action="{{ route('usuarios.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="contraseña">Contraseña</label>
            <input type="password" name="contraseña" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="rol">Rol</label>
            <select name="rol" class="form-control" required>
                <option value="comprador">Comprador</option>
                <option value="vendedor">Vendedor</option>
            </select>
        </div>
        <button type="submit" class="btn btn-success">Crear Usuario</button>
    </form>
@endsection
