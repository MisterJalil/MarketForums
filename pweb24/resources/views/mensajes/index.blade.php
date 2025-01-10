<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muro de Mensajes</title>
    <link rel="stylesheet" href="{{ asset('css/estilos/estilo_HeaderFooter_proyecto.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/estilos/practica6_muro.css') }}?v={{ time() }}">
</head>
<body>
<!-- Header -->
<header>
    @include('Parciales.headproyecto')
</header>

<!-- Contenido principal -->
<main class="content">
    <div class="container_publicar">
        <h1 class="mb-4">Muro de {{ session('rol') === 'vendedor' ? 'Vendedores' : 'Compradores' }}</h1>

        <!-- Formulario de publicación de mensajes -->
        <div class="mb-4">
            <h3>Publicar un mensaje</h3>
            <form method="POST" action="{{ route('mensajes.store') }}">
                @csrf
                <div class="mb-3">
                    <label for="titulo" class="form-label">Título</label>
                    <input type="text" class="form-control" id="titulo" name="titulo" maxlength="64" required>
                </div>
                <div class="mb-3">
                    <label for="cuerpo" class="form-label">Mensaje</label>
                    <textarea class="form-control" id="cuerpo" name="cuerpo" maxlength="255" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Publicar</button>
            </form>
        </div>
        <hr>
    </div>
    <div class="container_mensajes">
        <!-- Listado de mensajes -->
        <h2 class="mb-3">Mensajes</h2>

        <!-- Mensajes -->
        @if($mensajes->isEmpty())
            <p>No hay mensajes publicados.</p>
        @else
            @foreach($mensajes as $mensaje)
                @php
                    $esPropio = $mensaje->usuario->id === session('id_usuario'); // Determinar si el mensaje es del usuario actual
                @endphp
                <div class="card {{ $esPropio ? 'own-message' : 'other-message' }}">
                    <div class="card-header {{ $esPropio ? 'own-header' : 'other-header' }}">
                        <strong>{{ $mensaje->titulo }}</strong> -
                        Publicado por {{ $mensaje->usuario->nombre ?? 'Usuario desconocido' }}
                        @if($esPropio)
                            (Tú)
                        @endif
                        el {{ $mensaje->fecha_publicacion ? \Carbon\Carbon::parse($mensaje->fecha_publicacion)->format('d/m/Y H:i') : 'Sin fecha' }}
                    </div>
                    <div class="card-body">
                        <p>{{ $mensaje->cuerpo }}</p>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    <div class="mb-5"></div>
</main>

<!-- Footer -->
<footer>
    @include('Parciales.footerproyecto')
</footer>
</body>
</html>
