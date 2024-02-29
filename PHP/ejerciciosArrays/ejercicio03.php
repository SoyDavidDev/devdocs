<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// Crear un array con los 10 primeros números primos

// Fatal error: Maximum execution time of 30 seconds exceeded in /Applications/XAMPP/xamppfiles/htdocs/php/ejerciciosArrays/ejercicio03.php on line 15

function esNumPrim ($num)
{
    
    if ($num <= 1) // si es menor que 1 no es primo
    {
        return false;
    }

    for ($i=2; $i < $num; $i++) { 
        
        if ($num % $i == 0) { // si el resto es cero es que es divisible por lo que no es primo
            return false;

        }

    }
    return true;
}

$primos = array();
$numero = 2;
while (count($primos) <= 10) {

    if (esNumPrim($numero)) {
        $primos[] = $numero;
    }
    $numero++;

}

print_r($primos);


?>
    
</body>
</html>
