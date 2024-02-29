<?php
// Comprobar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Directorio donde se almacenarán las imágenes subidas
    $directorio_destino = "imgs/";

    // Nombre del archivo temporal en el servidor
    $archivo_temporal = $_FILES["imagen"]["tmp_name"];

    // Comprobar si se subió correctamente el archivo
    if (is_uploaded_file($archivo_temporal)) {
        $titulo = $_POST["titulo"];
        $nombre_archivo = $_FILES["imagen"]["name"];
        $nombre_destino = $directorio_destino . $nombre_archivo;

        // Mover el archivo al directorio de destino
        if (move_uploaded_file($archivo_temporal, $nombre_destino)) {
            echo "La imagen se subió correctamente.<br>";
            echo "Título de la imagen: " . $titulo . "<br>";
            echo "Imagen:<br>";
            echo "<img src='$nombre_destino' alt='$titulo'>";
        } else {
            echo "Hubo un error al subir la imagen.";
        }
    } else {
        echo "El archivo no se subió correctamente.";
    }
}
?>
