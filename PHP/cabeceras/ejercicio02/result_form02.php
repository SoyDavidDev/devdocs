<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nombre = $_REQUEST['nombre'];
    $edad = $_REQUEST['edad'];
    $rango_edad = $edad <=130 && $edad >=18;

    $malRellenadoNombre = !isset($nombre) || empty($nombre);
    $malRellenadaEdad = empty($edad) || !$rango_edad || !is_numeric($edad);

    if (!$malRellenadoNombre && !$malRellenadaEdad) {
        echo "Su nombre es: $nombre";
        echo "<br>";
        echo "Su edad es: $edad años";
        echo "<br>";
    } else {

        if ($malRellenadaEdad && !$malRellenadoNombre) {
            $mensaje = "No ha escrito su edad, correctamente.";
            header("Location:form02.php?mensaje=$mensaje");
            die();
        }
        elseif (!$malRellenadaEdad && $malRellenadoNombre) {
            $mensaje = "No ha escrito su nombre, correctamente.";
            header("Location:form02.php?mensaje=$mensaje");
            die();
        } else {
            $mensaje = "Están todos los campos mal rellenados";
            header("Location:form02.php?mensaje=$mensaje");
            die();        
        }
    }
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<p><a href="form02.php">Volver al formulario</a></p>
</body>
</html>