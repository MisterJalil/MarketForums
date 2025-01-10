<?php
// Verificamos que el archivo fue enviado por POST
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['archivo'])) {
    // Obtenemos el valor del archivo desde el formulario
    $archivo = $_POST['archivo'];

    // Mostramos el enlace para ejecutar el archivo
    echo "<p>La orden a ejecutar es:<a href='$archivo' target='_blank'>$archivo</a></p>";
} else {
    // Si el archivo no fue enviado correctamente, mostramos un mensaje de error
    echo "<p>No existe ninguna orden a ejecutar</p>";
}
?>
