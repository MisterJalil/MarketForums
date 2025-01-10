<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="{{ asset('css/estilos/estilo_puestos_proyecto.css') }}">
    <title>Editar Puesto</title>
</head>
<body>
@include('Parciales.headproyecto')

<div class="container">
    <h1>Editar Puesto</h1>
    <form action="{{ route('puestos.update', $puesto->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="form-control" value="{{ $puesto->nombre }}" required>
        </div>
        <div class="form-group">
            <label for="ubicacion">Ubicación:</label>
            <input type="text" id="ubicacion" name="ubicacion" class="form-control" value="{{ $puesto->ubicacion }}" required>
        </div>
        <div class="form-group">
            <label for="sector">Sector:</label>
            <input type="text" id="sector" name="sector" class="form-control" value="{{ $puesto->sector }}" required>
        </div>
        <div class="form-group">
            <label for="descripcion">Descripción:</label>
            <textarea id="descripcion" name="descripcion" class="form-control">{{ $puesto->descripcion }}</textarea>
        </div>
        <div class="form-group">
            <label for="id_usuario">ID Usuario:</label>
            <input type="number" id="id_usuario" name="id_usuario" class="form-control" value="{{ $puesto->id_usuario }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Actualizar</button>
    </form>
</div>

@include('Parciales.footerproyecto')
</body>
</html>
