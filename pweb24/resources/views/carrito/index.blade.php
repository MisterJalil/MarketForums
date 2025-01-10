<!DOCTYPE html>
<html lang="es">
<head>
    <title>Carrito de Compras</title>
    <link rel="stylesheet" href="{{ asset('css/estilos/estilo_HeaderFooter_proyecto.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/estilos/Carrito.css') }}?v={{ time() }}">
</head>
<body>
<!-- Header -->
<header>
    @include('Parciales.headproyecto')
</header>

<!-- Contenido principal -->
<main class="content">
    <div class="container">
        <h1>Carrito de Compras</h1>

        @if(session('success'))
            <div class="alert success">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert error">{{ session('error') }}</div>
        @endif

        @if(!empty($carrito))
            @foreach ($carrito as $puestoId => $productos)
                <div class="puesto-section">
                    <h2>Puesto: {{ $puestoId }}</h2>
                    <div class="productos-container">
                        @foreach ($productos as $id => $item)
                            <div class="producto-card">
                                <h3>{{ $item['nombre'] }}</h3>
                                <p>Precio: {{ $item['precio'] }} €</p>
                                <p>Cantidad: {{ $item['cantidad'] }}</p>
                                <p>Total: {{ $item['precio'] * $item['cantidad'] }} €</p>
                            </div>
                        @endforeach
                    </div>
                    <br>
                    <h3>Total del Puesto: {{ $totalesPorPuesto[$puestoId] }} €</h3>
                </div>
            @endforeach
            <h3>Total General: {{ $totalGeneral }} €</h3>
            <a href="{{ route('carrito.simulado') }}" class="btn btn-success">Procesar Pago</a>
            <form action="{{ route('paypal.pagar') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-primary">Pagar con PayPal</button>
            </form>
        @else
            <p>El carrito está vacío.</p>
        @endif
    </div>
</main>

<!-- Footer -->
<footer>
    @include('Parciales.footerproyecto')
</footer>
</body>
</html>
