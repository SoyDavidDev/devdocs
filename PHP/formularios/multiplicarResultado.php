<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Tabla de multiplicar en PHP</h1>
        <table border="1">          
        <th>Multiplicando</th>
        <th>Número</th>
<?php // si añado la cabecera dentro de php muestra el mensaje
// De error si no hay número.- else..., 

if (isset($_POST['numero'])) {
    
    $numero = $_POST['numero'];
    echo "<tr>";
    echo "<td>Tabla de $numero";
    echo "<td>";
    echo "<br>";
    for ($i=0; $i < 11; $i++) { 
        $tabla[$numero][$i] = $numero * $i;
        echo "$numero x $i = ". $tabla[$numero][$i];
        echo "<br>";
    }

} else {
    echo "Introduce un número";
}
?>    

        </table>
</body>
</html>