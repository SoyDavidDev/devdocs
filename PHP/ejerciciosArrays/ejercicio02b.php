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
2. Rellena un array de 100 elementos de manera aleatoria con valores M o F (por ejemplo ["M", "M", "F", "M", ...]). 
Una vez completado, vuelve a recorrerlo y calcula cuantos elementos hay de cada uno de los valores almacenando el resultado en un array asociativo 
['M' => 44, 'F' =>66]. Finalmente, muestra el resultado por pantalla.
*/


$elementos = array();

for ($i=1; $i < 101; $i++) { 

    $random = rand(1,2);
    
    if ($random == 1) {

        $elementos[] = "M";
    } else {
        $elementos[] = "F";
    }
}

/* for ($i=0; $i < 100; $i++) { 

    $elemento = (rand(0,1) == 0) ? "M" : "F"; 
    $elementos[] = $elemento;
} */
print_r($elementos);


// Una vez completado, vuelve a recorrerlo y calcula cuantos elementos hay de cada uno de los valores almacenando el resultado en un array asociativo 

$letraM = 0;
$letraF = 0;
foreach ($elementos as $elemento) {

    if ($elemento == "M") {
        $letraM ++;
    }elseif ($elemento == "F") {
        $letraF++;
    }
}

/* $contarElementos = array_count_values($elementos);

print_r($contarElementos); */

echo "['M'] => ".$letraM;
echo "<br>";
echo "['F'] => ".$letraF;


?>

</body>
</html>