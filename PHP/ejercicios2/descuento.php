
<?php
include "funciones.inc.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

/*Crea una página llamada descuento.php en la carpeta de ejercicios. 
Crea una función llamada calculaDescuento que reciba un parámetro $precio con el precio de una compra, 
y un parámetro opcional llamado $descuento con el porcentaje de descuento a aplicar. Si no se pone este segundo parámetro, 
el valor por defecto será 0. La función devolverá con un return el precio con el
descuento aplicado. Utiliza después la función desde el código PHP para calcular el descuento de un precio de 250 euros con un 10% de descuento, 
y el de un precio de 85 euros sin indicar descuento.*/


$precioFinal = calculaDescuento(250, 10);

echo $precioFinal;
echo "\n";

$precioFinal = calculaDescuento(85);
echo $precioFinal;

?>
    
</body>
</html>