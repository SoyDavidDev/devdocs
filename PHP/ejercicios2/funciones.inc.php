<?php

/*
Crea un archivo llamado funciones.inc en la carpeta de ejercicios de la sesión y añade dentro las 
funciones que hemos definido en los ejercicios anteriores. Incluye el fichero en cada uno de los ejercicios 
para que pueda hacer uso de las funciones que necesite.*/

function cuenta ($a, $b)
{
    $resultado = "";
    for ($i=$a; $i <= $b; $i++) { 
        $resultado .= $i;

        if ($i<$b) {
            $resultado .= ", ";
        }
 
    }
    return $resultado;
}

function calculaDescuento ($precio, $descuento = 0)
{
    return ($precio - ($precio * $descuento/100));
    
}

function intercambia(&$a, &$b)
{
    $a = $b;
    $b = $a;
}

function saludo($n)
{
    echo "Hola, $n";
}

?>