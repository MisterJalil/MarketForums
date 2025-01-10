<!DOCTYPE html>
<html lang="es">
<head>
    <title>Detalles del Producto</title>
    <link rel="stylesheet" href="{{ asset('css/estilos/estilo_HeaderFooter_proyecto.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/estilos/estilo_productos_proyecto.css') }}?v={{ time() }}">
    <script>
        const csrfToken = '{{ csrf_token() }}';
        const productoId = '{{ $producto->id }}';
    </script>
    <script src="{{ asset('js/detalles_producto.js') }}" defer></script>
</head>
<body>
<!-- Header -->
<header>
    @include('Parciales.headproyecto')
</header>

<!-- Contenido principal -->
<main class="content">
    <div class="container">
        <h1>Detalles del Producto</h1>

        <div class="producto-details">
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
                <div class="producto-image-container">
                    <img src="{{ $imagenPath }}" alt="{{ $producto->nombre }}" class="producto-image">
                </div>
            @else
                <p>No hay imagen disponible para este producto.</p>
            @endif

            <h2>{{ $producto->nombre }}</h2>
            <p><strong>Categoría:</strong> {{ $producto->categoria }}</p>
            <p><strong>Descripción:</strong> {{ $producto->descripcion }}</p>

            @if($producto->almacenaProducto)
                <p><strong>Precio:</strong> {{ $producto->almacenaProducto->precio }} €</p>
            @else
                <p><strong>Precio:</strong> No disponible</p>
            @endif
        </div>

        <div class="btn-cart-container">
            @if(session()->has('email'))
                <form action="{{ route('carrito.agregar', $producto->id) }}" method="POST" id="add-to-cart-form">
                    @csrf
                    <button class="btn-cart">Añadir al Carrito</button>
                </form>
            @else
                <p>Inicia sesión para añadir productos al carrito.</p>
            @endif
        </div>

        <button onclick="history.back()" class="btn-back btn-secondary">Volver a la página anterior</button>
    </div>
</main>

<!-- Footer -->
<footer>
    @include('Parciales.footerproyecto')
</footer>
</body>
</html>
