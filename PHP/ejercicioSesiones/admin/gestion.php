<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion</title>
</head>
<body>
    

<main>
    <h1>Página Gestión</h1>
</main>

<?php

$usuario = $_POST['usuario'];
$pass = $_POST['pass'];

if ($usuario != "david" and $pass != "1234") {
    header("Refresh:5; url= ../login.php");
    echo "<h2>Usuario y contraseña incorrecta</h2>";
    die();
} else{
    session_start();
    $_SESSION['user'] = $usuario;
    
    if (!isset($_SESSION['user'])) {
        // echo $usuario .= " " . $pass;
        header("Refresh:5; url= ../login.php");
        echo "No hay sesión de usuario";
        die();
    } else {
        echo "<a href='categorias.php'>Acceder a Categorías</a>";
        echo "<br>";
        echo "<a href='productos.php'>Acceder a Productos</a>";
        echo "<br>";
        echo "<a href='clientes.php'>Acceder a Clientes</a>";
    }
}


?>
</body>
</html>