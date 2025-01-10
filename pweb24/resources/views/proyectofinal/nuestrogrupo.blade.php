<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conozca a Nuestro Grupo</title>
    <link rel="stylesheet" href="{{ asset('css/estilos/estilo_HeaderFooter_proyecto.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/estilos/estilo_equipo.css') }}?v={{ time() }}">
</head>
<body>
<!-- Header -->
<header>
    @include('Parciales.headproyecto')
</header>

<!-- Contenido principal -->
<main class="content">
    <div class="container">
        <h1>Conozca a Nuestro Grupo</h1>
        <div class="member-container">
            <div class="member">
                <img src="/storage/images/fran.jpg" alt="Foto de Francisco">
                <h2>Francisco Cazorla</h2>
                <p>Estudiante de Ingeniería en Tecnologías de la Telecomunicación, mención Telemática</p>
                <p>Aspirante a futbolista profesional con tobillo de plastilina</p>
                <a class="button" href="mailto:francisco.cazorla104@alu.ulpgc.es">Escribir un correo</a>
            </div>
            <div class="member">
                <img src="/storage/images/carlitos.jpg" alt="Foto de Carlos">
                <h2>Carlos Solinis Divin</h2>
                <p>Estudiante de Ingeniería en Tecnologías de la Telecomunicación, mención Telemática</p>
                <p>Amante de la naturaleza y de la comida china</p>
                <a class="button" href="mailto:carlos.solinis101@alu.ulpgc.es">Escribir un correo</a>
            </div>
            <div class="member">
                <img src="/storage/images/gabriel.jpg" alt="Foto de Gabriel">
                <h2>Gabriel Lares Aspera</h2>
                <p>Estudiante de Ingeniería en Tecnologías de la Telecomunicación, mención Telemática</p>
                <p>Inversionista y desarrollador multiplataforma</p>
                <a class="button" href="mailto:gabriel.lares101@alu.ulpgc.es">Escribir un correo</a>
            </div>
            <div class="member">
                <img src="/storage/images/jalil.jpeg" alt="Foto de Jalil">
                <h2>Jalil Essefar</h2>
                <p>Estudiante de Ingeniería en Tecnologías de la Telecomunicación, mención Telemática</p>
                <p>Desarrollador web de origen valenciano</p>
                <a class="button" href="mailto:jalil.essefar101@alu.ulpgc.es">Escribir un correo</a>
            </div>
        </div>
    </div>
</main>

<!-- Footer -->
<footer>
    @include('Parciales.footerproyecto')
</footer>
</body>
</html>
