<!DOCTYPE html>
<html lang="es">
<head>
    <title>Simulación de Pago</title>
    <link rel="stylesheet" href="{{ asset('css/estilos/pago_simulado.css') }}?v={{ time() }}">
</head>
<body>
@include('Parciales.headproyecto')

<div class="container">
    <h1>Pasarela de Pago</h1>
    <img src="/storage/paypal.jpg" alt="PayPal Logo" class="paypal-logo">

    @foreach ($carrito as $puestoId => $productos)
        <div class="puesto-section">
            <h2>Puesto: {{ $puestoId }}</h2>
            @foreach ($productos as $id => $item)
                <div class="producto-card">
                    <h3>{{ $item['nombre'] }}</h3>
                    <p>Precio: {{ $item['precio'] }} €</p>
                    <p>Cantidad: {{ $item['cantidad'] }}</p>
                    <p>Total: {{ $item['precio'] * $item['cantidad'] }} €</p>
                </div>
            @endforeach
            <h3>Total del Puesto: {{ $totalesPorPuesto[$puestoId] }} €</h3>
        </div>
    @endforeach

    <h3>Total a Pagar: {{ $totalGeneral }} €</h3>

    <form action="{{ route('carrito.confirmarPago') }}" method="POST">
        @csrf
        <!-- Campo para el número de la tarjeta -->
        <div class="form-group">
            <label for="card-number">Número de Tarjeta (8 dígitos):</label>
            <input type="text" id="card-number" name="card_number" maxlength="8" pattern="\d{8}" required placeholder="XXXXXXXX">
        </div>

        <!-- Campo para el CCV -->
        <div class="form-group">
            <label for="ccv">CCV (3 dígitos):</label>
            <input type="text" id="ccv" name="ccv" maxlength="3" pattern="\d{3}" required placeholder="XXX">
        </div>

        <!-- Campo para la fecha de vencimiento -->
        <div class="form-group">
            <label for="expiry-date">Fecha de Vencimiento:</label>
            <input type="text" id="expiry-date" name="expiry_date" maxlength="5" pattern="\d{2}/\d{2}" required placeholder="MM/YY">
        </div>

        <!-- Botones de acción -->
        <button type="submit" class="btn btn-primary">Confirmar Pago</button>
        <button type="button" onclick="history.back()" class="btn btn-secondary">Cancelar</button>
    </form>
</div>

@include('Parciales.footerproyecto')
</body>
</html>
