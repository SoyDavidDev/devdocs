<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
define('PI', 3.14);
$radio = 3.5;
$area = PI * ($radio**2);

$num1 = 3;
$num2 = 5;
$num3 = 8;
$num1 *= 4; // 12

echo $num1; // 12 IMPRIME

echo $num1 <= $num2; // false
echo $num3 > $num1 and $num3 > $num2; // false true

echo $num3 > $num1 or $num3 > $num2; // false true.- imprime 1 porque es true el de la derecha. IMPRIME

echo $num1 > $num2 xor $num1 > $num3; // true true
$num3--; // 7

echo $num3; // 7 IMPRIME

$num3 += $num1; // 19
echo $num3; // 19 IMPRIME

echo "El área del círculo es $area";

?>
</body>
</html>