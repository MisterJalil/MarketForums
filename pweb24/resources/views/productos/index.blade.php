<!DOCTYPE html>
<html lang="es">
<head>
    <title>Lista de Productos</title>
    <link rel="stylesheet" href="{{ asset('css/estilos/estilo_HeaderFooter_proyecto.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/estilos/Productostarjeta.css') }}?v={{ time() }}">
</head>
<body>
<!-- Header -->
<header>
    @include('Parciales.headproyecto')
</header>

<!-- Contenido Principal -->
<main class="content">
    <div class="container">
        <h1>Lista de Productos</h1>

        <div class="productos-container">
            @foreach ($productos as $producto)
                <div class="producto-card">
                    @php
                        $nombreImagen = str_replace(' ', '_', $producto->nombre);
                        $imagenPath = null;
                        $extensiones = ['jpg', 'jpeg', 'png'];
                        foreach ($extensiones as $extension) {
                            $path = 'storage/images/productos/' . $nombreImagen . '.' . $extension;
                            if (file_exists(public_path($path))) {
                                $imagenPath = asset($path);
                                break;
                            }
                        }
                    @endphp
                    @if($imagenPath)
                        <a href="{{ route('productos.show', $producto->id) }}">
                            <img src="{{ $imagenPath }}" alt="{{ $producto->nombre }}" class="producto-image">
                        </a>
                    @else
                        <a href="{{ route('productos.show', $producto->id) }}">
                            <img src="{{ asset('images/default_producto.png') }}" alt="No disponible" class="producto-image">
                        </a>
                    @endif
                    <h2 class="producto-nombre">{{ $producto->nombre }}</h2>
                </div>
            @endforeach
        </div>
    </div>
</main>

<!-- Footer -->
<footer>
    @include('Parciales.footerproyecto')
</footer>
</body>
</html>
