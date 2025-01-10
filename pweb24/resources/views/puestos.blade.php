<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listado de Puestos</title>
</head>
<body>
<h1>Listado de Puestos</h1>
<ul>
    @foreach ($puestos as $puesto)
        <li>
            <a href="{{ route('categoria.show', str_replace(' ', '', $puesto->id)) }}">{{ $puesto->nombre }}</a>
        </li>
    @endforeach
</ul>
</body>
</html>
