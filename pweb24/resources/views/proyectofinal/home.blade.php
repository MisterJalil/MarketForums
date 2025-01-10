<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mercado Altavista Proyecto</title>
    <link rel="stylesheet" href="{{ asset('css/estilos/estilo_HeaderFooter_proyecto.css') }}?v={{ time() }}">
    <link rel="stylesheet" href="{{ asset('css/estilos/estilo_home_proyecto.css') }}?v={{ time() }}">
</head>
<body>
<!-- Header -->
<header>
    @include('Parciales.headproyecto')
</header>

<!-- Contenido Principal -->
<main>
    <section class="intro">
        <h2>Bienvenidos al Mercado de Altavista</h2>
        <p>Descubre un espacio lleno de frescura, tradición y sabor. En nuestro mercado
            encontrarás una amplia variedad de productos locales, puestos de comida y un
            ambiente acogedor para toda la familia.</p>
    </section>

    <section class="intro_2">
        <h2>Comprometidos con la Producción y el Consumo Responsables</h2>
        <p>En el Mercado de Altavista nos enfocamos en la creación de entornos laborales sostenibles 
            y eficientes, integrando tecnologías innovadoras como sensores de ruido y temperatura en 
            cada puesto del mercado, permitiéndonos monitorizar y garantizar que las condiciones ambientales 
            se mantengan dentro de los límites establecidos por la normativa legal, fomentando así el bienestar 
            de los usuarios y el respeto por el entorno.</p>
    </section>

    <section class="puestos">
        <h2>Puestos</h2>
        <p>Este ya tradicional mercado alberga una gran y cuidada selección
            de puestos de alimentación que lo convierten en lugar de referencia
            y punto de encuentro para los amantes de la calidad, la frescura y el buen servicio</p>
    </section>

    <section class="cards">

        <div class="card">
            <img src="/storage/images/puestos/Pescaderia_Azul.png" alt="Foto de Pescadería">
            <h3>Pescaderías</h3>
            <p>Lo mejor del mar, fresco y de calidad, traído cada día para ti.</p>
        </div>
        <div class="card">
            <img src="/storage/images/puestos/Puesto_de_Carnes.png" alt="Foto de Carnicería">
            <h3>Carnicerías</h3>
            <p>Carne de primera, con cortes especiales para todas tus recetas.</p>
        </div>
        <div class="card">
            <img src="/storage/images/puestos/Fruteria_Natural.png" alt="Foto de Frutería">
            <h3>Fruterías y Verdulerías</h3>
            <p>Frutas y verduras frescas directamente de los campos locales.</p>
        </div>
        <div class="card">
            <img src="/storage/images/puestos/Cafeteria_Expreso.png" alt="Foto de Cafetería">
            <h3>Cafeterías</h3>
            <p>Los mejores cafés italianos en grano y molidos para tu día a día</p>
        </div>
        <div class="card">
            <img src="/storage/images/puestos/Queseria_Gourmet.png" alt="Foto de Cafetería">
            <h3>Queserías</h3>
            <p>Todos los quesos internacionales más sabrosos se encuentran a tu alcance</p>
        </div>
        <div class="card">
            <img src="/storage/images/puestos/Floristeria_Rosa.png" alt="Foto de Floristería">
            <h3>Floristerías</h3>
            <p>Elige entre múltiples especies de flores para un detalle especial</p>
        </div>
    </section>
</main>

<!-- Footer -->
<footer>
    @include('Parciales.footerproyecto')
</footer>
</body>
</html>
