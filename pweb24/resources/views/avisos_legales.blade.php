<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avisos Legales</title>
    <link rel="stylesheet" href="{{ asset('css/estilos/estilo_avisos_legales.css') }}?v={{ time() }}">
</head>
<body>
<header>
    @include('Parciales.headproyecto')
</header>
<div class="page-wrapper">
    <div class="container">
        <h1>Avisos Legales</h1>
        <ul>
            <li>
                <a href="https://www.boe.es/buscar/act.php?id=BOE-A-2018-16673" target="_blank">
                    Boletín Oficial del Estado. (2018). Ley Orgánica 3/2018, de 5 de diciembre, de Protección de Datos Personales y garantía de los derechos digitales. BOE-A-2018-16673.
                </a>
            </li>
            <li>
                <a href="https://eur-lex.europa.eu/legal-content/ES/TXT/?uri=CELEX%3A32016R0679" target="_blank">
                    Unión Europea. (2016). Reglamento (UE) 2016/679 del Parlamento Europeo y del Consejo, de 27 de abril de 2016, relativo a la protección de las personas físicas en lo que respecta al tratamiento de datos personales y a la libre circulación de estos datos (Reglamento General de Protección de Datos). CELEX: 32016R0679.
                </a>
            </li>
            <li>
                <a href="https://www.boe.es/buscar/act.php?id=BOE-A-2002-13758" target="_blank">
                    Boletín Oficial del Estado. (2002). Ley 34/2002, de 11 de julio, de servicios de la sociedad de la información y de comercio electrónico. BOE-A-2002-13758.
                </a>
            </li>
            <li>
                <a href="https://www.boe.es/buscar/act.php?id=BOE-A-2007-20555" target="_blank">
                    Boletín Oficial del Estado. (2007). Real Decreto 1720/2007, de 21 de diciembre, por el que se aprueba el Reglamento de desarrollo de la Ley Orgánica 15/1999, de 13 de diciembre, de protección de datos de carácter personal. BOE-A-2007-20555.
                </a>
            </li>
        </ul>
    </div>
</div>
<!-- Footer -->
<footer>
    @include('Parciales.footerproyecto')
</footer>
</body>
</html>
