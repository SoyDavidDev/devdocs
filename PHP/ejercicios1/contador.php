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
    Ejercicio 6:
Crea una página llamada contador.php en la carpeta de ejercicios del tema. 
Utiliza una estructura for para contar los números del 1 al 100 (separados por comas), 
y luego una estructura while para contar los números del 10 al 0 (una cuenta atrás, separada por guiones). 
Al final debe quedarte algo como esto:

1,2,3,4,5,6,7,8,9,10,11,12,13,14,15...
10-9-8-7-6-5-4-3-2-1-0
    */

    for ($i=1; $i <=100 ; $i++) { 
        # code...

        if ($i != 100) {
            echo "$i , ";
        } else{
            echo $i . ".";
        }
    }
    echo "<br>";
    
    $numero = 0;
    
    while ($numero <= 10) {
        # code...
       
        if ($numero != 10)
        {
            echo $numero . ", ";
        }
        else {
            echo $numero . ".";
        }
       
        $numero++;
    }



?>
</body>
</html>