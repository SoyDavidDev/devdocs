<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio de números cúbicos</title>
</head>
<body>

<?php

/*
1. Implementar la siguiente serie: Todo número n3 es el resultado de la suma de ese n de impares:
13 =1
23 = 3+5 = 8
33 = 7+9+11 = 27
43 = 13+15+17+19 = 64
*/
function calcularCubico ($num)
{
    $suma = 0;
    $impar = 1;

    for ($i=1; $i < $num; $i++) { 
        # code...
        $suma += $impar;
        $impar += 2;
        }
    
    return $suma;
}
$numero = 30;

for ($i=1; $i < $numero; $i++) { 
    # code...
    $cubico = calcularCubico($i);

    echo "$i^3 = $cubico<br>";
}

?>

</body>
</html>