<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categorías</title>
</head>
<body>
<h1>Lista de Categorías</h1>
<ul>
    @foreach ($categorias as $categoria)
        <li>
            <a href="{{ route('categoria.show', str_replace(' ', '', $categoria->nombreFz)) }}">{{ $categoria->nombreFz }}</a>
        </li>
    @endforeach
</ul>
</body>
</html>

