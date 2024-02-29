<?php

if ($_SERVER["REQUEST_METHOD"] === 'POST') {

    $edad = $_REQUEST['edad'];
    $rango_edad = $edad <=130 && $edad >=18;

    if (is_numeric($edad) && !empty($_REQUEST['edad']) ) 
    {
        $mensaje = "Su edad es: $edad";
        echo $mensaje;
    } else {
        $mensaje = "Error";
        echo $mensaje;
        echo "<br>";
        header("Refresh:5; url=form.php");
        echo "Volviendo a la página inicial"; 
        die();
    }

    if (!$rango_edad) {
        header("Location: form.php?mensaje=Su edad no está entre 18 y 130 años");
        die();
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
    <p><a href="form.php">Volver al formulario</a></p>
</body>
</html>