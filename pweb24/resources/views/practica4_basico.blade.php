<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 4</title>
    <link rel="stylesheet" href="{{ asset('css/estilos/estilo_HeaderFooter_proyecto.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/estilos/practica4.css') }}?v={{ time() }}">
</head>
<body>
<!-- Header -->
<header>
    @include('Parciales.headproyecto')
</header>

<!-- Contenido Principal -->
<main class="content">
    <h2>Manejo básico del DOM</h2>
    <div class="container">
        <!-- Contenedor principal -->
        <div class="textarea-section">
            <textarea id="resultado" rows="10" cols="50" readonly></textarea>
        </div>

        <div class="actions">
            <!-- Botón 1 y su campo -->
            <div class="input-group">
                <input type="text" id="text-1" placeholder="Texto para textarea">
                <button id="boton1">Añadir Texto</button>
            </div>

            <!-- Botón 2 y su campo -->
            <div class="input-group">
                <input type="number" id="text-2" placeholder="Tiempo en segundos (1-60)">
                <button id="boton2">Validar y Temporizador</button>
            </div>

            <!-- Botón 3 y su campo -->
            <div class="input-group">
                <input type="text" id="text-3" placeholder="Nuevo estilo CSS (Ej: red)">
                <button id="boton3">Cambiar Estilo</button>
            </div>
        </div>
    </div>
</main>
<footer>
    @include('Parciales.footerproyecto')
</footer>
<script src="{{ asset('js/practica4_basico.js') }}"></script>
</body>
</html>
