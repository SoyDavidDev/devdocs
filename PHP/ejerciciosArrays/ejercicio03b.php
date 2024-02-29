<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Función para determinar si un jugador gana un punto
function ganaPunto() {
    return rand(0, 1); // Simulación aleatoria de quién gana el punto
}

// Número de sets que deseas simular
$numSets = 6;

// Inicializamos los marcadores de sets de cada jugador
$jugador1_sets = 0;
$jugador2_sets = 0;

echo "<table border='1'>";
echo "<tr><th>Set</th><th>Federer</th><th>Nadal</th></tr>";

while ($jugador1_sets < $numSets && $jugador2_sets < $numSets) {
    // Inicializamos los marcadores de juegos para el set actual
    $jugador1_juegos = 0;
    $jugador2_juegos = 0;

    echo "<tr>";
    echo "<td>Set $jugador1_sets-$jugador2_sets</td>";

    while (true) {
        // Simulamos un punto
        $ganadorPunto = ganaPunto();

        if ($ganadorPunto == 0) {
            $jugador1_juegos++;
        } else {
            $jugador2_juegos++;
        }

        // Verificamos si un jugador ganó el set (llega a 6 juegos)
        if (($jugador1_juegos >= 6 && $jugador1_juegos - $jugador2_juegos >= 2) || ($jugador2_juegos >= 6 && $jugador2_juegos - $jugador1_juegos >= 2)) {
            break; // Alguien gana el set
        }
    }

    // Mostramos el resultado del set en la tabla
    for ($i = 1; $i <= $jugador1_sets; $i++) {
        echo "<td>Federer</td>";
    }

    for ($i = 1; $i <= $jugador2_sets; $i++) {
        echo "<td>Nadal/td>";
    }

    echo "</tr>";

    // Verificamos quién ganó el set
    if ($jugador1_juegos > $jugador2_juegos) {
        $jugador1_sets++;
    } else {
        $jugador2_sets++;
    }
}

echo "</table>";

// Imprimimos el resultado final del partido
if ($jugador1_sets > $jugador2_sets) {
    echo "Federer gana el partido ($jugador1_sets-$jugador2_sets)";
} elseif ($jugador2_sets > $jugador1_sets) {
    echo "Nadal gana el partido ($jugador2_sets-$jugador1_sets)";
} else {
    echo "El partido termina en empate ($jugador1_sets-$jugador2_sets)";
}
?>



</body>
</html>