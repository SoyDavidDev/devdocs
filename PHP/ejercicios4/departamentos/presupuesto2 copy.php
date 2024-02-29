<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">

Elige Departamento: <select name="departamento">
<option>NINGUNO</option>
<option value="informatica">INFORMÁTICA</option>
<option value="lengua">LENGUA</option>
<option value="matematicas">MATEMÁTICAS</option>
<option value="ingles">INGLÉS</option>
</select>

<p><input type="submit" value="Buscar" /></p>
</form>

<?php

// Verificar si se ha enviado el formulario

if (isset($_POST['calcular'])) {
    // Obtener el departamento seleccionado del formulario
    $departamento = $_POST['departamento'];

    // Realizar cálculos de presupuesto según el departamento
    $presupuesto = calcularPresupuesto($departamento);

    echo "<h3>Departamento seleccionado: </h3>"; echo $_POST['departamento']; echo "<br/>"; 

}



function calcularPresupuesto($departamento)
{
    $informatica = 500;
    $lengua = 300;
    $matematicas = 300;
    $ingles = 400;
    
    switch ($_POST[$departamento]) {
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

    return $_POST[$departamento];
}


?>
</body>
</html>