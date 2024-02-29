<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

echo "<h3>Departamento seleccionado: </h3>"; echo $_GET['departamento']; echo "<br/>"; 

$informatica = 500;
$lengua = 300;
$matematicas = 300;
$ingles = 400;

switch ($_GET['departamento']) {
    case "informatica";
        echo "El presupuesto asignado sería : ". $informatica. " €"; echo "<br/>"; 
    break;
    case "lengua";
    echo "El presupuesto asignado sería : ". $lengua. " €"; echo "<br/>"; 
    break;
    case "matematicas";
    echo "El presupuesto asignado sería : ". $matematicas. " €"; echo "<br/>"; 
    break;
    case "ingles";
    echo "El presupuesto asignado sería : ". $ingles. " €"; echo "<br/>"; 
    break;
}

?>
</body>
</html>