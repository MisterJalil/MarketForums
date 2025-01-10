<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercado de Altavista</title>
    <link rel="stylesheet" href="{{ asset('css/estilos/estilo_HeaderFooter_proyecto.css') }}?v={{ time() }}">
</head>
<body>
<header>
    <h1>Mercado de Altavista</h1>
    <nav>
        <!-- Enlaces de Navegación Principal -->
        <a href="{{ url('/miPortal/home') }}" class="nav-item">
            <img src="{{ asset('/storage/home.png') }}" alt="Home">
            <span class="tooltip">Home</span>
        </a>

        <!-- Enlace a Puestos -->
        <a href="{{ url('/miPortal/puestos') }}" class="nav-item">
            <img src="{{ asset('/storage/puestos.png') }}" alt="Puestos">
            <span class="tooltip">Puestos</span>
        </a>

        <!-- Enlace a Productos -->
        <a href="{{ url('/miPortal/productos') }}" class="nav-item">
            <img src="{{ asset('/storage/productos.png') }}" alt="Productos">
            <span class="tooltip">Productos</span>
        </a>

        <!-- Publicaciones en el Muro -->
        @if(session('email'))
            <a href="{{ route('mensajes.index') }}" class="nav-item">
                <img src="{{ asset('/storage/muro.png') }}" alt="Muro">
                <span class="tooltip">Muro</span>
            </a>
        @endif

        <!-- Enlace al carrito de compras -->
        @if(session('email'))
            <a href="{{ route('carrito.mostrar') }}" class="nav-item">
                <img src="{{ asset('/storage/carrito.png') }}" alt="Carrito de compras">
                <span class="tooltip">Carrito</span>
            </a>
        @endif

        <!-- Práctica 4 -->
        <div class="dropdown">
            <a href="#" class="dropdown-link" id="dropdown-toggle">
                <img src="{{ asset('/storage/sensores.png') }}" alt="Puestos" style="width: 50px; height: auto;">
            </a>

            <div class="dropdown-content" id="dropdown-content">
                <a href="{{ url('/miPortal/practica4/basico') }}">Basico</a>
                <a href="{{ url('/miPortal/practica4/sensores') }}">Sensores</a>
                <a href="{{ url('/miPortal/graficos') }}">Gráficos</a>
            </div>
        </div>

        <!-- Enlace a El Equipo -->
        <a href="{{ url('/elGrupo2') }}" class="nav-item">
            <img src="{{ asset('/storage/equipo.png') }}" alt="El Equipo">
            <span class="tooltip">El Equipo</span>
        </a>

        <!-- Opciones de sesión -->
        @if(session('email'))
            <a href="{{ url('/logout/miPortal') }}" class="btn-session">Cerrar Sesión</a>
        @else
            <a href="{{ route('acceso') }}" class="btn-session">Iniciar Sesión</a>
        @endif
    </nav>
</header>
<script src="{{ asset('/js/menu.js') }}" defer></script>
</body>
</html>
