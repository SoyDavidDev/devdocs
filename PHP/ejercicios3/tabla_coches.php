<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Información de Coches</h1>
    <table border="1">

    <th>Matrícula</th>
    <th>Marca</th>
    <th>Modelo</th>
    <th>Número de puertas</th>


    <?php
    $coches = 
    array(
        "2342HHH" => array("ford", "mondeo", 5),
        "4356GHS" => array("seat", "leon", 3),
        "9876HOL" => array("renault", "megane", 4),
        "8746ROS" => array("audi", "a5", 5)
    );

    // Generar filas de la tabla a partir del array primero

        foreach ($coches as $matricula => $datos) {
            # code...
            echo "<tr>";
            echo "<td>".$matricula."</td>"; // funciona igual así que no poniendo el cierre.
            echo "<td>$datos[0]";
            echo "<td>$datos[1]";
            echo "<td>$datos[2]";
        }
    
    

    ?>
</table>
</body>
</html>