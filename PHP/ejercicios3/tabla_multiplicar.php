<!DOCTYPE html>
<html>
<head>
    <title>Tabla de Multiplicar</title>
</head>
<body>
    <h1>Tabla de multiplicar en PHP</h1>
        <table border="1">          
        <th>Multiplicando</th>
        <th>Número</th>

        <?php
        // Crear el array bidimensional para las tablas de multiplicar
     
        for ($i=0; $i < 10; $i++) { 
            echo "<tr>";
            echo "<td>Tabla de $i";
            echo "<td>";
            echo "<br>";
            for ($j=0; $j < 10; $j++) { 
                $tabla[$i][$j] = $i * $j;
                echo "$i x $j = ". $tabla[$i][$j];
                echo "<br>";
            }
        }
    
        ?>
    </table>
</body>
</html>
