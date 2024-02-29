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

$primitiva = array();

$numApuestas = 6;
$numPosibles = 49;

$primitiva = generarApuesta($numPosibles, $numApuestas);

mostrarApuesta("La primitiva", $primitiva);

?>    
</body>
</html>