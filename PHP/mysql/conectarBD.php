<?php

$host = "localhost";
$bdnombre = "form_videoclub";
$username = "root";
$pass = "";

try {
// establecer la conexión
$pdo = new PDO("mysql:host=$host;dbname=$bdnombre",$username,$pass);

//configurar el manejo de errores
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec("SET CHARACTER SET utf8");

} catch (Exception $ex) {
    echo "Fallo en la conexión de datos" . $ex->getLine();
}

?>