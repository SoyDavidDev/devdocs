<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ley d'Hont</title>
    <style>
        table{
            border-collapse: separate;
        }
        td{
            width: 100px;
            height: 50px;
            text-align: center;
            border: 2px solid grey;
        }
        .titular{
            background-color: grey;
        }
        .escanyos{
            font-weight: bold;
            font-size: 20px;
        }
        .elegibles{
            background-color: yellow;
        }
    </style>
</head>
<body>
    
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
<h3>Introduce Votos:</h3>
<label for="votos">Partido A:</label>
<input type="text" name="partidoA" id="partidoA" size="20"><br>
<label for="votos">Partido B:</label>
<input type="text" name="partidoB" id="partidoB" size="20"><br>
<label for="votos">Partido C:</label>
<input type="text" name="partidoC" id="partidoC" size="20"><br>
<label for="votos">Partido D:</label>
<input type="text" name="partidoD" id="partidoD" size="20"><br>
<input type="submit" value="Calcular">
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] = "REQUEST") {
    
    // obtenemos el resultado de lo escrito en la celda corresp. 

    $partidoA = $_REQUEST['partidoA'];
    $partidoB = $_REQUEST['partidoB'];
    $partidoC = $_REQUEST['partidoC'];
    $partidoD = $_REQUEST['partidoD'];

    echo "<h2>Resultado electoral</h2>";
    echo "<table border = '1'>";
    echo "<tr>";
    echo "<th>Escaños</th>";
    echo "<th>Partido A</th>";
    echo "<th>Partido B</th>";
    echo "<th>Partido C</th>";
    echo "<th>Partido D</th>";
    echo "</tr>";


    // indicamos el resultado en la primera fila después de la cabecera
    echo "<tr>";
    echo "<td class = 'titular'><h2>Votos</h2></td>";
    echo "<td class = 'titular'>$partidoA</td>";
    echo "<td class = 'titular'>$partidoB</td>";
    echo "<td class = 'titular'>$partidoC</td>";
    echo "<td class = 'titular'>$partidoD</td>";
    echo "</tr>";

    // lista para sumar todos los valores y ordenarlos
    $valores = array();
    // inicializamos array por cada valor de celda
    $valoresA = array();
    $valoresB = array();
    $valoresC = array();
    $valoresD = array();

    // hacemos las operaciones hasta el escaño 7 y guardamos en su array corresp.
    for ($i=1; $i < 8; $i++) { 
        $valoresA[]= $partidoA / $i;
        $valoresB[]= $partidoB / $i;
        $valoresC[]= $partidoC / $i;
        $valoresD[]= $partidoD / $i;
    }

    // añadimos todos los valores indiv al array gral para ordenar mayor a menor
    $valores = array_merge($valoresA, $valoresB, $valoresC, $valoresD);
    rsort($valores);
    
    // guardamos los 7 primeros valores del array gral para tener el top 7.
    $escanyosElegibles = array();

    for ($i=0; $i < 7; $i++) { 
        $escanyosElegibles[] = $valores[$i];
    }

    for ($i=0; $i < 7; $i++) { 
        // pasamos a una variable número la posición de cada array indiv
        $numeroA = $valoresA[$i];
        $numeroB = $valoresB[$i];
        $numeroC = $valoresC[$i];
        $numeroD = $valoresD[$i];
         
        // cada número comprobamos si está en el array escanyos top7
        // En el caso de que sea igual, quiere decir que está en el top
        // por lo que aplicamos estilo .elegibles(marcarlo en amarillo)
        // si no coincide, lo deja como está.
        $claseA = in_array($numeroA, $escanyosElegibles) ? "elegibles" : "";
        $claseB = in_array($numeroB, $escanyosElegibles) ? "elegibles" : "";
        $claseC = in_array($numeroC, $escanyosElegibles) ? "elegibles" : "";
        $claseD = in_array($numeroD, $escanyosElegibles) ? "elegibles" : "";


        // cambiamos el formato para que nos muestre un decimal, ahora que ya
        // hemos hecho todas las comparaciones. 
        echo "<tr>";
        echo "<td class = 'escanyos'>Escaño".($i+1)."</td>";
        echo "<td class = '$claseA'>".number_format($numeroA,1)."</td>";
        echo "<td class = '$claseB'>".number_format($numeroB,1)."</td>";
        echo "<td class = '$claseC'>".number_format($numeroC,1)."</td>";
        echo "<td class = '$claseD'>".number_format($numeroD,1)."</td>";

        echo "</tr>";
    }


    echo "</table>";
}

?>


</body>
</html>