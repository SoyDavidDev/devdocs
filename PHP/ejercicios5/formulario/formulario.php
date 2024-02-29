<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_REQUEST['nombre']) || !isset($_REQUEST['email']) ||
        empty($_REQUEST['nombre']) || empty($_REQUEST['email'])) {
    
        $mensaje= "Rellena todos los campos";
        header("Location: error.php?mensaje=$mensaje");
        die();      
    } else {
    
        if (is_uploaded_file($_FILES['imagen']['tmp_name'])) {
            $nombre_imagen = $_FILES['imagen']['name'];
            $temp_imagen = $_FILES['imagen']['tmp_name'];
            $directorio = "ejercicios5/formulario/fotos";
            $destino_imagen = $directorio."/". $nombre_imagen;
    
            move_uploaded_file($temp_imagen,$destino_imagen);

            if (move_uploaded_file($temp_imagen, $destino_imagen)) {
                echo "Nombre: " . $_POST["nombre"] . "<br>";
                echo "Correo Electrónico: " . $_POST["email"] . "<br>";
                echo "Imagen: <img src='$destino_imagen' alt='Imagen subida'><br>";
            }else {
                $mensaje= "Error al subir la imagen ". $nombre_imagen;
                header("Location: error.php?mensaje=$mensaje");
                die();   
            }
        }else {
            $mensaje= "Adjunta una foto";
            header("Location: error.php?mensaje=$mensaje");
            die();   
        }
    }}


?>
<form action="formulario.php" method="post"
enctype="multipart/form-data">

<label for="nombre">Nombre:</label>
<input type="text" name="nombre" id="nombre" size="30"><br>

<label for="email">Email:</label>
<input type="email" name="email" id="email" size="32"><br>

<label for="imagen">Subir Imagen:</label>
<input type="file" name="imagen" id="imagen" accept="image/*"><br>

<input type="submit" value="Guardar"><br>

</form>
</body>
</html>