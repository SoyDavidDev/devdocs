<?php
include('cabecera.inc.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        p{
            color: red;
        }
    </style>
</head>
<body>

<?php

if (!isset($_REQUEST['buscar']) || empty($_REQUEST['buscar'])) {
    
    header("Refresh:5; url=form_libros.php");

    echo "<p>Debes rellenar los datos de todos los campos antes
    de enviar formulario</p>";

} else {
    echo "Tu búsqueda: "; echo $_POST['texto']; echo "<br/>"; 
    echo "Buscar en: "; echo $_POST['buscar']; echo "<br/>"; 
    echo "Género: "; echo $_POST['tipo']; echo "<br/>"; 
    }


?>


<a href="form_libros.php"><h3>Volver</h3></a>
</body>
</html>