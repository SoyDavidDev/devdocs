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


/*
2. A partir del ejercicio 1, genera un array aleatorio de 33 elementos con números comprendidos entre el 0 y 100 y calcula.
• El mayor • El menor • La media
*/

$aleatorios = array();

for ($i=0; $i < 33; $i++) { 
    # code...
    $aleatorios[] = rand(0,100);
}

print_r($aleatorios);

// El mayor
rsort($aleatorios);

echo "El mayor \n";

echo $aleatorios[0];
echo "\n";

echo "El menor \n";

// El menor

sort($aleatorios);
echo $aleatorios[0];
echo "\n";

// La media

echo "La media \n";
$total = array_sum($aleatorios);
$media = $total / count($aleatorios);
echo $media;
echo "\n";

    ?>

</body>
</html>