<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="{{ asset('css/estilos/estilo_productos_proyecto.css') }}">
    <title>Lista de Usuarios</title>
</head>
<body>
@include('Parciales.headproyecto')

<h1>Lista de Usuarios</h1>
<a href="{{ route('usuarios.create') }}" class="btn btn-primary">Crear Usuario</a>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<table class="table">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Rol</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach($usuarios as $usuario)
        <tr>
            <td>{{ $usuario->id }}</td>
            <td>{{ $usuario->nombre }}</td>
            <td>{{ $usuario->email }}</td>
            <td>{{ $usuario->rol }}</td>
            <td>
                <a href="{{ route('usuarios.show', $usuario->id) }}" class="btn btn-info">Ver</a>
                <a href="{{ route('usuarios.edit', $usuario->id) }}" class="btn btn-warning">Editar</a>
                <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este usuario?');">Eliminar</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>

