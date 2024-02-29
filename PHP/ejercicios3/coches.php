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
    Ejercicio 2:
Crea una página llamada coches.php. Define dentro un array bidimensional mixto donde:

La primera dimensión sea asociativa. Aquí pondremos matrículas de coches

La segunda dimensión será numérica. En cada casilla guardaremos la marca, modelo y número de

puertas del coche en cuestión. 

Por ejemplo, el coche con matrícula "111BCD" puede ser un "Ford" (casilla 0), modelo "Focus" (casilla 1) de 5 puertas (casilla 2).

Rellena el array con al menos 3 o 4 coches, y después utiliza las estructuras adecuadas para recorrerlo mostrando los datos de los coches ordenados por matrícula.
    */
    


    $coches = 
    array(
        "2342HHH" => array("ford", "mondeo", 5),
        "4356GHS" => array("seat", "leon", 3),
        "9876HOL" => array("renault", "megane", 4),
        "8746ROS" => array("audi", "a5", 5)
    );

    foreach ($coches as $matricula => $coche) {
        # code...
        echo $matricula;
        echo "<br>";
    }

    ?>
    
</body>
</html>