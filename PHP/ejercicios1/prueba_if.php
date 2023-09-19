<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nota1 = 40;
    $nota2 = 993;

    $nota3 = 234234;

/*     
Ejercicio 4:
Crea una página llamada prueba_if.php en la carpeta de ejercicios del tema. 
Crea en ella dos variables llamadas $nota1 y $nota2 , y dales el valor de dos notas de examen cualesquiera (con decimales si quieres). 
Después, utiliza expresiones if..else para determinar qué nota es la mayor de las dos.

    if ($nota1 > $nota2)
    {
        echo "La nota 1: $nota1 es mayor que la nota 2: $nota2";
    } elseif ($nota1 < $nota2)
    {
        echo "La nota 2: $nota2 es mayor que la nota 1: $nota1";

    } else
    {
        echo "La nota 2: $nota2 es igual que la nota 1: $nota1";
    } */

    /*
    Ejercicio 5:
Modifica el ejercicio anterior añadiendo una tercera nota $nota3 , 
y determinando cuál de las 3 notas es ahora la mayor. Para ello, deberás ayudarte 
esta vez de la estructura if..elseif..else
    */

    if ($nota1 > $nota2 and $nota1 > $nota2)
    {
        echo "La nota 1: $nota1 es la nota más alta";

    } elseif ($nota2 > $nota1 and $nota2 > $nota3)
    {
        echo "La nota 2: $nota2 es la nota más alta";

    } else
    {
        echo "La nota 3: $nota3 es la nota más alta";
    }



    ?>
</body>
</html>