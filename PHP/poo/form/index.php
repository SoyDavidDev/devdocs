<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<body>  
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">

<label for="tipo"><h3>Selecciona tipo Vehículo</h3></label>
<select name="tipo" id="tipo">
    <option value="sel">Selecciona una opción</option>
    <option value="coche">Coche</option>
    <option value="bicicleta">Bicicleta</option><br>
</select>
<label for="marca"><h3>Marca</h3></label>
<input type="text" name="marca" id="marca" size="23"><br><br>

<label for="km"><h3>Kilometros Recorridos</h3></label>
<input type="text" name="km" id="km" size="23"><br><br>

<h3>Tipo consulta</h3>
<input type="checkbox" name="kmsRecorridos" id="kmsRecorridos"> Kms Recorridos.
vehículos. <br><br>

<input type="submit" value="Enviar"><br>
<!-- <input type="reset" value="Reiniciar" name="reset">
 -->
</form>

<?php
include_once 'vehiculo.php';
include_once("coche.php");
include_once("bicicleta.php");

session_start();

$tipo = $_POST['tipo'];
$km = $_POST['km'];
$marca = $_POST['marca'];

$mensaje_error = "Selecciona una opción!";

 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    if ($tipo === 'sel') {
        echo "<br>$mensaje_error";

    } else {
        if ($tipo === 'coche') {
            $vehiculo = new Coche($marca);
        } elseif ($tipo === 'bicicleta') {
            $vehiculo = new Bicicleta($marca);
        }
        if (isset($km)) {
            $vehiculo->andar($km);
        }
    }

    if (isset($_REQUEST['kmsRecorridos'])) {
        $vehiculo->mostrarDatos();
    } 

    if (isset($_SESSION['kmTOT'])) {
        $_SESSION['kmTOT']+=$km;
    }else {
        $_SESSION['kmTOT'] = $km;
    }
    $_SESSION['vehiculos'][]=$vehiculo;
    
    $contadorVehiculos = 0;
    
    foreach ($_SESSION['vehiculos'] as $vehiculo) {
        $contadorVehiculos++;
    }
    
    echo "Los kms totales son: <br>";
    echo $_SESSION['kmTOT'] . "<br>";
    
    echo "Vehículos totales: " . $contadorVehiculos;
}



    





?>
</body>
</html>