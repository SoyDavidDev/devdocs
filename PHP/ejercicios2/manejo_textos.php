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
Crea una página llamada manejo_textos.php. Realiza en ella las siguientes operaciones:
Crea una variable con un radio de circunferencia (el que quieras).
Crea una variable y calcula en ella el área del círculo, como has hecho en algún ejercicio
2
 $radio
 anterior (PI * radio, definiendo la constante PI).
Crea una variable $textoResultado que diga "El área calculada del círculo es" y luego ponga la variable $area , 
mostrando sólo 2 decimales (utiliza la función number_format ). Muestra luego esta variable por pantalla con un echo.

Crea una variable que convierta el texto anterior a mayúsculas, usando la función . Muestra también esta variable por pantalla. 

Crea una variable llamada que reemplace la palabra "calculada" por la palabra "obtenida", usando la función , en la variable .

Averigua la longitud del texto de la variable anterior usando la función .

Averigua en qué posición del texto de la variable anterior se encuentra la palabra "círculo", usando la función strpos .

Crea una variable $numeros que tenga el valor "1,2,3,4,5", y utiliza la función explode para quedarte con los números por separado. 
Sácalos por pantalla, separados por el signo "+" ("1+2+3+4+5"), y después, intenta sumarlos entre sí y mostrar el resultado de la 
suma a continuación (al final, te quedará algo como "1+2+3+4+5=15").*/


$radio = 5;
// $area = M_PI * ($radio**2);
$area = M_PI * pow($radio, 2);
echo $area;
echo "<br>";

$textoResultado = "El área calculada del círculo es ". number_format($area,2);

echo $textoResultado;
echo "<br>";

$textoResultadoMayus = strtoupper($textoResultado);
echo $textoResultadoMayus;
echo "<br>";

$textoResultadoModificado = str_replace("calculada", "obtenida", $textoResultado);
echo $textoResultadoModificado;
echo "<br>";

$longitudModificado = strlen($textoResultadoModificado);
echo "Longitud ".$longitudModificado;
echo "<br>";

$posicionCirculo = strpos($textoResultadoModificado, "círculo");
echo "Posición :".$posicionCirculo;
echo "<br>";

$numeros = "1,2,3,4,5";
$partes = explode(",", $numeros);
print_r($partes);
echo "<br>";

$suma = implode("+", $partes);
echo $suma;
echo "<br>";

$total = 0;

foreach ($partes as $numero) {
    $total += $numero;
}

echo $suma. "=".$total;

?>
</body>
</html>