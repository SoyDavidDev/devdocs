<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio1</title>
</head>
<body>

<?php
$message = "";
if (isset($_GET['nombre'])) {
    $message = "Hola, me llamo David";
    echo "<a href='index.php'>Volver</a><br>";
}elseif (isset($_GET['curso'])) {
    $message = "Estoy cursando 2DAW.";
    echo "<a href='index.php'>Volver</a><br>";
}elseif (isset($_GET['lugar'])) {
    $message = "Vivo en Valencia.";
    echo "<a href='index.php'>Volver</a><br>";
} else {?>
    <a href="index.php?nombre">Mostrar nombre</a><br>
    <a href="index.php?curso">Mostrar un curso</a><br>
    <a href="index.php?lugar">Mostrar un lugar</a><br>
<?php
}
?>

<h2><?php echo (isset($message) ? $message : '');?></h2>


    
</body>
</html>