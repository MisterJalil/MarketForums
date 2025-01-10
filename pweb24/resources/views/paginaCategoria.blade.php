<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Página sencilla de la categoría: {{ $nombre }}</title>
    <link rel="stylesheet" href="{{ asset('css/estilos/estilo_headfoot_guiada.css') }}">

</head>
<body>
<section>
    @include('partials.headerguiada')
</section>
<br>
<br>
<br>
<main>
    <section>
        <p>A continuación, puedes ver el contenido de la página:</p>
        <div class="contenido-html">
            {!! $contenido !!}
        </div>
    </section>
</main>
<br>
<br>
<br>
<section>
    @include('partials.footerguiada')
</section>
</body>
</html>


