<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>
<body>

<?php
$tirada = 1;
$puntos = 0;
if (isset($_GET['tirada'])) {
    $tirada = $_GET['tirada'];
    echo "Tirada Nª: ".$tirada."<br>";
    $tirada++;

    $numeroRandom = rand(1,6);
    echo "Número: ". $numeroRandom."<br>";

    $puntos = $_GET['puntos'];
    $puntos = $numeroRandom + $puntos;
    echo "Puntos: ". $puntos . "<br>";

}

if ($tirada <=3) {?>
    <a href="index.php?tirada=<?php echo $tirada;?>&puntos=
    <?php echo $puntos;?>">Tirar Dado</a>
<?php
}else {
    if ($puntos <10) {
        echo "Has perdido";
    }else{
        echo "Has ganado";
    }
    echo "<br>Fin de la partida.";}

?>
<br>


</body>
</html>