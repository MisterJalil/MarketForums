<!DOCTYPE html>
<html lang="es">
<head>
    <title>Detalles del Puesto</title>
    <link rel="stylesheet" href="{{ asset('css/estilos/estilo_HeaderFooter_proyecto.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/estilos/estilo_puestos_proyecto.css') }}?v={{ time() }}">
</head>
<body>
<!-- Header -->
<header>
    @include('Parciales.headproyecto')
</header>

<!-- Contenido Principal -->
<main class="content">
    <div class="container">
        <h1>Detalles del Puesto</h1>

        <div class="puesto-details">
            @php
                $nombreImagen = str_replace(' ', '_', $puesto->nombre);
                $imagenPath = null;
                $extensiones = ['jpg', 'jpeg', 'png'];
                foreach ($extensiones as $extension) {
                    $path = 'storage/images/puestos/' . $nombreImagen . '.' . $extension;
                    if (file_exists(public_path($path))) {
                        $imagenPath = asset($path);
                        break;
                    }
                }
            @endphp

            @if($imagenPath)
                <img src="{{ $imagenPath }}" alt="{{ $puesto->nombre }}" class="puesto-image">
            @else
                <p>No hay imagen disponible para este puesto.</p>
            @endif

            <h2>{{ $puesto->nombre }}</h2>
            <p><strong>Ubicación:</strong> {{ $puesto->ubicacion }}</p>
            <p><strong>Sector:</strong> {{ $puesto->sector }}</p>
            <p><strong>Descripción:</strong> {{ $puesto->descripcion }}</p>
        </div>

        <h3>Productos Disponibles en este Puesto</h3>
        @if($puesto->productos->isEmpty())
            <p>No hay productos disponibles en este puesto.</p>
        @else
            <div class="productos-container">
                @foreach($puesto->productos as $producto)
                    <div class="producto-card">
                        @php
                            $nombreImagenProducto = str_replace(' ', '_', $producto->nombre);
                            $imagenProductoPath = null;
                            $extensionesProducto = ['jpg', 'jpeg', 'png'];
                            foreach ($extensionesProducto as $extension) {
                                $pathProducto = 'storage/images/productos/' . $nombreImagenProducto . '.' . $extension;
                                if (file_exists(public_path($pathProducto))) {
                                    $imagenProductoPath = asset($pathProducto);
                                    break;
                                }
                            }
                        @endphp
                        @if($imagenProductoPath)
                            <a href="{{ route('productos.show', $producto->id) }}">
                                <img src="{{ $imagenProductoPath }}" alt="{{ $producto->nombre }}" class="producto-image">
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
        @endif

        <button onclick="history.back()" class="btn-back">Volver a la página puestos</button>
    </div>
</main>

<!-- Footer -->
<footer>
    @include('Parciales.footerproyecto')
</footer>
</body>
</html>
