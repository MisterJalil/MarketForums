<!DOCTYPE html>
<html lang="es">
<head>
    <title>Lista de Puestos</title>
    <link rel="stylesheet" href="{{ asset('css/estilos/estilo_HeaderFooter_proyecto.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/estilos/Puestotarjeta.css') }}?v={{ time() }}">
</head>
<body>
<!-- Header -->
<header>
    @include('Parciales.headproyecto')
</header>

<!-- Contenido Principal -->
<main class="content">
    <div class="container">
        <h1>Lista de Puestos</h1>

        <div class="puestos-container">
            @foreach ($puestos as $puesto)
                <div class="puesto-card">
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
                        <a href="{{ route('puestos.show', $puesto->id) }}">
                            <img src="{{ $imagenPath }}" alt="{{ $puesto->nombre }}" class="puesto-image">
                        </a>
                    @else
                        <a href="{{ route('puestos.show', $puesto->id) }}">
                            <img src="{{ asset('images/default_puesto.png') }}" alt="No disponible" class="puesto-image">
                        </a>
                    @endif
                    <h2 class="puesto-nombre">{{ $puesto->nombre }}</h2>
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
