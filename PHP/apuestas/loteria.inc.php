<?php

function generarAleatorio ($fin)
{
    return rand(1, $fin);
}

function generarApuesta($numPosibles, $numApuestas)
{
    $apuesta = array();

    while (count($apuesta) < $numApuestas) {
        $numero = generarAleatorio($numPosibles);
        if (!in_array($numero, $apuesta)) {
            $apuesta[] = $numero;
        }
    }
    sort($apuesta);
    return $apuesta;
}

function mostrarApuesta($titulo, $apuesta)
{
    echo "<h1>$titulo</h1>";
    echo "<p>Números: ". implode(", ", $apuesta). "</p";
}
?>