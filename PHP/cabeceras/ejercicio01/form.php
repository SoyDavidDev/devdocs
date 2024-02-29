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

<h1>Formulario</h1>
<form action="result_form.php" method="POST">

<label for="edad">Escriba su edad (Entre 18 y 130 años)</label>

<input type="text" name="edad" id="edad" size="5"><br><br>
<input type="submit" name="submit" value="Comprobar">
<input type="submit" name="reset" value="Borrar">

</form>


</body>
</html>