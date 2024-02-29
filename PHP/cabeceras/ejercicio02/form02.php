<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    if (isset($_REQUEST['mensaje'])) {

        echo '<p style="color:red;">' . $_REQUEST['mensaje'] . '</p>';
    }
?>


<form action="result_form02.php" method="post">
<br>
<label for="nombre">Escriba su nombre:</label>
<input type="text" name="nombre" id="nombre">
<br>
<label for="edad">Escriba su edad (entre 18 y 130 años)</label>
<input type="text" name="edad" id="edad" size="5">
<br>
<input type="submit" name="submit" value="Comprobar">
<input type="reset" name="reset" value="Borrar">



</form>


</body>
</html>