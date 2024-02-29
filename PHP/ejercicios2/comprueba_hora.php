<?php
/*
Crea una página llamada comprueba_hora.php en tu carpeta de ejercicios. 
Crea una variable de texto con una hora en ella (por ejemplo, "21:30:12"), 
y luego procésala para extraer por separado la hora, el minuto y el segundo, y comprobar si es una hora válida. 

Por ejemplo, la hora anterior sí debería ser válida, pero si ponemos “12:63:11” no debería serlo, porque 63 no es un minuto válido.
*/

$fecha = "12:34:11";
$patron = "/^(0[0-9]|1[0-9]|2[0-3]):([0-5][0-9]:([0-5][0-9]))$/";

if (preg_match($patron, $fecha, $partes) == 1)
{
    echo "La fecha completa es " . $partes[0];
    echo "El día es " . $partes[1];
    echo "El mes es " . $partes[2];
    echo "El año es " . $partes[3];

} else{
    echo "Formato de fecha no válido";
}