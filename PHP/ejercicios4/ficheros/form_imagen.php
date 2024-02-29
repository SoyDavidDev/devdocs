<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="subir_imagen.php" method="post" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="200000">
        <label for="titulo">Título de la Imagen:</label>
        <input type="text" name="titulo" id="titulo" required>
        <br>
        <label for="imagen">Selecciona una Imagen:</label>
        <input type="file" name="imagen" id="imagen" accept="image/*" required>
        <br>
        <input type="submit" value="Selecciona Imagen">
    </form>
    
<?php
/**
 * Crea en tu carpeta de ejercicios una subcarpeta llamada ficheros. Dentro, 
 * crea un formulario llamado form_imagen.php que permita seleccionar un archivo 
 * y subirlo a una página llamada subir_imagen.php. Además del campo para la 
 * imagen, añadiremos un campo de texto para indicar el título de la imagen. 
 * En la página subir_imagen.php comprobaremos que el fichero subido es una 
 * imagen, y si lo es, lo copiaremos a una subcarpeta imgs y mostraremos la 
 * imagen subida en la misma página subir_imagen.php, junto con su título.
 */


?>
</body>
</html>