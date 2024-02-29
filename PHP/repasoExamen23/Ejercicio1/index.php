<?php

if (isset($_POST['enviar'])) {
    $opcion = $_POST['opciones'];
    header("Location:$opcion.php?opcion=$opcion");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>
    

<form action="" method="post">
<select name="opciones">
    <option value="asignatura">Asignatura</option>
    <option value="idioma">Idioma</option>
    <option value="colegio">Colegio</option>
</select>
<input type="submit" value="Enviar" name="">

</form>
</body>
</html>