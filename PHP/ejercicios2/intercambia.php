<?php
include "funciones.inc.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /*
    Crea una página llamada intercambia.php en la carpeta de ejercicios. 
    Añade dentro una función llamada intercambia que reciba 2 parámetros numéricos por referencia, 
    y lo que haga sea intercambiar sus valores. Es decir, si recibe el parámetro $a y el $b , 
    debe hacer que $a tome el valor de $b , y $b tome el valor de $a .
    */



    $numA = 5;
    $numB = 10;

    intercambia($numA, $numB);

    echo $numA;

    ?>
</body>
</html>