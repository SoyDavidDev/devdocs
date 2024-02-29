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
1. Rellena un array con 50 números aleatorios comprendidos entre el 0 y el 99, y luego
muéstralo en una lista desordenada. Para crear un número aleatorio, utiliza la función rand(inicio, fin).
*/

$numeros = array();

for ($i=0; $i < 50; $i++) { 
    # code...
    $numeros[] = rand(0,99);
}

print_r($numeros);

    ?>
</body>
</html>