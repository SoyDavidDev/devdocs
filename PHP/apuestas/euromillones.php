<?php 
include_once 'loteria.inc.php';
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

    $numPosibles = 50;
    $numApuestas = 5;

    $euromillones = array();
    $euromillones = generarApuesta($numPosibles, $numApuestas);

    mostrarApuesta("Euromillones", $euromillones);

    $numStars = 2;
    $numStarsPosibles = 9;

    $stars = array();
    $stars = generarApuesta($numStarsPosibles, $numStars);

    echo "<br>";
    mostrarApuesta("Estrellas", $stars);
    ?>
    
</body>
</html>