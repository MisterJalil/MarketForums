<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gráficos de Históricos</title>
    <link rel="stylesheet" href="{{ asset('css/estilos/estilo_HeaderFooter_proyecto.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/estilos/graficos.css') }}?v={{ time() }}">
</head>
<body>
<!-- Header -->
<header>
    @include('Parciales.headproyecto')
</header>

<!-- Contenido principal -->
<main class="content">
    <div class="container">
        <h1 style="text-align: center;">Gráficos de Valores Históricos</h1>
        <div style="text-align: center;">
            <h2>Gráfico de Temperatura (°C)</h2>
            <canvas id="tempChart" style="width: 100%; height: 500px;"></canvas>
        </div>
    </div>
    <div class="container">
        <h1 style="text-align: center;">Gráficos de Valores Históricos</h1>
        <div style="text-align: center;">
            <h2>Gráfico de Ruido (dB)</h2>
            <canvas id="noiseChart" style="width: 100%; height: 500px;"></canvas>
        </div>
    </div>
</main>

<!-- Footer -->
<footer>
    @include('Parciales.footerproyecto')
</footer>

<!-- Carga de JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script> <!-- Incluir Chart.js -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- Incluir jQuery para AJAX -->
<script src="{{ asset('js/graficos.js') }}" defer></script> <!-- Archivo de lógica -->
</body>
</html>
