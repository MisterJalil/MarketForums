<?php
// Función para listar el contenido de un directorio
function listarContenido($nombreDirectorio) {
    // Definimos la ruta base
    $rutaBase = '/laragon/www/pweb24/';

    // Ajustamos la ruta según el nombre del directorio
    if ($nombreDirectorio === 'misPhp') {
        $directorio = $rutaBase . 'public/' . $nombreDirectorio;
    } else {
        $directorio = $rutaBase . $nombreDirectorio;
    }

    echo "<h3>Contenido de la carpeta $nombreDirectorio:</h3><ul>";

    // Arreglo para almacenar los archivos con enlace
    $archivosEnlace = [];

    // Abre el directorio y recorre los archivos que contiene
    if ($handle = opendir($directorio)) {
        while (false !== ($file = readdir($handle))) {
            if ($file != "." && $file != "..") {
                // Verifica si el archivo es .html o .php (solo en misPhp para .php)
                if (pathinfo($file, PATHINFO_EXTENSION) === 'html' ||
                    ($nombreDirectorio === 'misPhp' && pathinfo($file, PATHINFO_EXTENSION) === 'php')) {
                    // Genera la URL del enlace
                    $url = generarEnlace($nombreDirectorio, $file);

                    // Ajusta la ruta relativa según el directorio y reglas establecidas
                    if ($nombreDirectorio === 'practica') {
                        // Páginas privadas como /paginaPersonal/{nombre}
                        $nombreArchivo = pathinfo($file, PATHINFO_FILENAME);
                        $rutaRelativa = '/paginaPersonal/' . $nombreArchivo;
                    } elseif ($nombreDirectorio === 'public') {
                        // Páginas públicas por el nombre del creador (e.g., /Francisco)
                        $nombreArchivo = pathinfo($file, PATHINFO_FILENAME);
                        $rutaRelativa = '/' . ucfirst($nombreArchivo);
                    } else {
                        // Para misPhp y otras rutas, usamos la ruta completa
                        $rutaRelativa = '/' . $nombreDirectorio . '/' . $file;
                    }

                    echo "<li><a href='$url'>$file</a></li>";
                    // Guarda la ruta relativa y la URL completa en el arreglo
                    $archivosEnlace[$rutaRelativa] = $url;
                } else {
                    echo "<li>$file</li>";
                }
            }
        }
        closedir($handle);
    } else {
        echo "<li>No se pudo abrir el directorio $directorio</li>";
    }
    echo "</ul>";

    // Devuelve los archivos con enlace
    return $archivosEnlace;
}

// Función para generar el enlace basado en el nombre del directorio y el archivo
function generarEnlace($nombreDirectorio, $file) {
    $baseUrl = 'http://pweb24.test/';
    if ($nombreDirectorio === 'public') {
        switch (pathinfo($file, PATHINFO_FILENAME)) {
            case 'francisco':
                return $baseUrl . 'FranciscoPublico';
            case 'CarlosPublico':
                return $baseUrl . 'CarlosPublico';
            case 'gabriellares':
                return $baseUrl . 'GabrielPublico';
            default:
                return "#";
        }
    } elseif ($nombreDirectorio === 'practica') {
        switch (pathinfo($file, PATHINFO_FILENAME)) {
            case 'FranciscoPrivado':
                return $baseUrl . 'paginaPersonal/Francisco';
            case 'CarlosPrivado':
                return $baseUrl . 'paginaPersonal/Carlos';
            case 'GabrielPrivado':
                return $baseUrl . 'paginaPersonal/Gabriel';
            default:
                return "#";
        }
    } elseif ($nombreDirectorio === 'misPhp') {
        return $baseUrl . $nombreDirectorio . '/' . $file;
    }
    return "#";
}

// Listamos el contenido de los directorios y guardamos los archivos con enlaces
$archivosPublicos = listarContenido('public');
$archivosPrivados = listarContenido('practica');
$archivosMisPhp = listarContenido('misPhp');

// Unimos todos los archivos con enlace
$archivosEnlace = array_merge($archivosPublicos, $archivosPrivados, $archivosMisPhp);

echo "<h3>Selecciona qué archivo quieres ejecutar</h3>";
echo "<form action='/misPhp/ejecutarArchivo.php' method='POST'>";
echo "<label for='archivo'>Seleccione un archivo:</label>";
echo "<select name='archivo' id='archivo'>";

// Añadimos cada archivo enlazado al cuadro de selección
foreach ($archivosEnlace as $rutaRelativa => $urlCompleta) {
    echo "<option value='$urlCompleta'>$rutaRelativa</option>"; // Muestra solo la ruta relativa
}

echo "</select>";
echo "<button type='submit'>Ejecutar</button>";
echo "</form>";
?>
