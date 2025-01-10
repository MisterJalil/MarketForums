<?php
// Función para listar el contenido de un directorio
function listarContenido($nombreDirectorio) {
    // Definimos la ruta base
    $rutaBase = '/laragon/www/pweb24/';

    // Ajustamos la ruta según el nombre del directorio
    if ($nombreDirectorio === 'misPhp') {
        // Si el directorio es "misPhp", se encuentra dentro de "public"
        $directorio = $rutaBase . 'public/' . $nombreDirectorio;
    } else {
        // Para los demás, simplemente concatenamos el nombre del directorio a la ruta base
        $directorio = $rutaBase . $nombreDirectorio;
    }

    echo "<h3>Contenido de la carpeta $nombreDirectorio:</h3><ul>";

    // Abre el directorio y recorre los archivos que contiene
    if ($handle = opendir($directorio)) {
        while (false !== ($file = readdir($handle))) {
            // Ignora los directorios especiales '.' y '..'
            if ($file != "." && $file != "..") {
                echo "<li>$file</li>";
            }
        }
        closedir($handle);
    } else {
        echo "<li>No se pudo abrir el directorio $directorio</li>";
    }
    echo "</ul>";
}

// Llamadas a la función para listar cada carpeta
listarContenido('public');
listarContenido('practica');
listarContenido('misPhp');
?>
