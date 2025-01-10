<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica 4 - Sensores</title>
    <link rel="stylesheet" href="{{ asset('css/estilos/estilo_HeaderFooter_proyecto.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/estilos/sensores.css') }}?v={{ time() }}">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/sensores.js') }}" defer></script>
</head>
<body>
<!-- Header -->
<header>
    @include('Parciales.headproyecto')
</header>

<!-- Contenido principal -->
<main class="content">
    <div class="container">
        <h2>Gestión de Sensores</h2>
        <form id="form-sensores">
            <!-- Campos de Sensores -->
            <div class="form-group">
                <label for="sensor_id">Sensor ID:</label>
                <input type="text" id="sensor_id" name="sensor_id" required>
            </div>
            <div class="form-group">
                <label for="id_puesto">ID Puesto:</label>
                <input type="text" id="id_puesto" name="id_puesto" required>
            </div>
            <div class="form-group">
                <label for="nombre">Descripción/Nombre:</label>
                <input type="text" id="nombre" name="nombre">
            </div>
            <div class="form-group">
                <label for="periodicidad">Periodicidad:</label>
                <select id="periodicidad" name="periodicidad">
                    <option value="minuto">Minuto</option>
                    <option value="hora">Hora</option>
                    <option value="día">Día</option>
                </select>
            </div>
            <div class="form-group">
                <label for="fecha">Fecha:</label>
                <input type="date" id="fecha" name="fecha" required>
            </div>
            <div class="form-group">
                <label for="hora">Hora:</label>
                <input type="time" id="hora" name="hora" required>
            </div>
            <div class="form-group">
                <label for="valor">Valor:</label>
                <input type="number" id="valor" name="valor" required>
            </div>

            <!-- Otros Campos -->
            <div class="form-group">
                <label for="repetirNveces">Repetir N Veces:</label>
                <input type="number" id="repetirNveces" name="repetirNveces">
            </div>
            <div class="form-group">
                <label for="incrementoValor">Incremento de Valor:</label>
                <input type="number" id="incrementoValor" name="incrementoValor" step="0.01">
            </div>
            <div class="form-group">
                <label>
                    <input type="checkbox" id="soloLocal" name="soloLocal"> Solo Local
                </label>
            </div>

            <div class="form-group">
                <label for="textarea">Simulación API:</label>
                <textarea id="textarea" rows="10" cols="50" placeholder="Simulación de la API"></textarea>
            </div>

            <!-- Botones -->
            <div class="buttons">
                <button type="button" id="añadir1vez" disabled>Añadir 1 vez</button>
                <button type="button" id="añadirNveces" disabled>Añadir N veces</button>
                <button type="button" id="cargarSensores" disabled>Cargar Sensores</button>
                <button type="button" id="cargarDatosSensor" disabled>Cargar Datos Sensor</button>
                <button type="button" id="borrar">Borrar</button>
            </div>
        </form>
    </div>
</main>

<!-- Footer -->
<footer>
    @include('Parciales.footerproyecto')
</footer>
</body>
</html>
