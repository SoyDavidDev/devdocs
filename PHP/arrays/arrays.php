<?php
// Arrays numéricos

$tabla = array('Uno', 'Dos', 'Tres');

$tabla[] = 'Cuatro';

echo $tabla[3];

echo "<br>";

// Arrays asociativos.- Añadimos claves además de crear el array

$notas = array('Manuel' =>8.5, 'Ana' =>7, 'Juan' =>9);

$notas ['David'] = 9.5;

echo $notas['David'];
echo "<br>";

// Arrays multidiimensionales

$tablaa[0][0] = 34.1;
$tablaa[0][1] = 23;
$tablaa[1][0] = 432;
$tablaa[1][1] = 423;
$tablaa[2][0] = 54;
$tablaa[2][1] = 644;

echo $tablaa[2][1] = 644;
echo "<br>";

// Arrays multidiimensionales tipo asociativo, o array mixtos, donde algunas dimensiones son numéricas y otras asociativas. 

$tabla2 = 
array(
    array('nombre' => 'Juan',
            'dni' =>'23433212j',
            'idiomas' => array ('inglés', 'valenciano', 'español')
),
    array ('nombre' => 'David',
            'dni' =>'45635267S',
            'idiomas' => array ('inglés', 'valenciano', 'español', 'italiano')
            )
);

echo $tabla2[1]['idiomas'][3];
echo "<br>";

echo $tabla2[0]['nombre'];
echo "<br>";

// Recorrido de Arrays.- foreach, nos devuelve el valor de cada posición, independiente de si es un array numérico o asociativo

foreach ($notas as $nota) {
    # code...
    echo $nota;
    echo "<br>";
}
// Una estructura for que cuente hasta el tamaño del array, función count.- 

for ($i = 0; $i < count($notas); $i++)
{
    echo $notas[$i];
    echo "<br>";

}

for ($i = 0; $i < sizeof($notas); $i++)
{
    echo $notas[$i];
    echo "<br>";

}

// Para Arrays asociativos, podemos usar esta instrucción foreach, indicando en la parte derecha de las variables, una para la clave y otra para el valor

foreach ($notas as $alumno => $nota) {
    # code...
    echo "El alumno $alumno tiene un $nota";
    echo "<br>";
}

// En el caso de arrays bidimensionales numéricos, para recorrer todos los elementos de un array como el de la tabla numérica anterior, con un bucle anidado, uno que recorra
// las filas y otro las columnas.- 

// filas
for ($i=0; $i < count($tablaa); $i++) { 
    // Columnas
    for ($j=0; $j < count($tablaa[0]); $j++) { 
        # code...
        echo $tablaa[$i][$j];
        echo "<br>";
    }
}

// Funciones para ARRAYS.- 
/* 
count(array) nos indica cuántos elementos tiene el array. Es útil para utilizarlo en bucles y saber cuántas
repeticiones podemos hacer sobre el array.

sort(array) y rsort(array) ordenan y reindexan un array numérico (la segunda en orden decreciente)

asort(array) y arsort(array) ordenan y reindexan un array asociativo (la segunda en orden decreciente),
por sus valores.

ksort(array) y krsort(array) ordenan un array asociativo por sus claves (la segunda en orden
decreciente).

usort(array, funcion) ordena un array según la función que defina el usuario como segundo parámetro.

array_filter(array, funcion_filtrado) devuelve un array con los elementos del array original (pasado
como parámetro) que pasan la función de filtrado indicada.

Podemos, además, usar la función print_r para sacar la información del array de forma legible
*/

$numeros = [2, 5, 3, 9, 6];
// Ordenamos un array de enteros de mayor a menor.-
sort($numeros);
print_r($numeros);
echo "<br>";


$notas = array('Manuel García' =>8.5, 'Ana López' =>7, 'Juan Solís' =>9);
// Ordenamos un array de alumnos y notas de menor a mayor nota
arsort($notas);
print_r($notas);
echo "<br>";

// Ordenamos un array de alumnos por nombre de menor a mayor
ksort($notas);
print_r($notas);
echo "<br>";


$numeros = [12, 18, 5, 11, 10, 95, 3];
// Filtramos los múltiplos de 5 del array 
$multiplos5 = array_filter($numeros, function($num)
{
    return $num % 5 == 0;
});

print_r($multiplos5);
echo "<br>";


$alimentos = array(
    array("nombre" => "Arroz", "precio" => 1.95),
    array("nombre" => "Carne picada", "precio" => 3.45),
    array("nombre" => "Tomate frito", "precio" => 2.15)
   );
   // Ordenamos array por precio de menor a mayor

   usort($alimentos, function($precio1, $precio2)
{
    return $precio1["precio"] <=> $precio2["precio"];
});

print_r($alimentos);

?>