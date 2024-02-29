<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
echo "Tu búsqueda: "; echo $_POST['texto']; echo "<br/>"; 
echo "Buscar en: "; echo $_POST['buscar']; echo "<br/>"; 
echo "Género: "; echo $_POST['tipo']; echo "<br/>"; 

?>


<a href="form_libros.php"><h3>Volver</h3></a>
</body>
</html>