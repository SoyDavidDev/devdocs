<?php
$message = "";

if (isset($_GET['messageErrorLogin'])) {
    $message = "Error de credenciales";
}

if (isset($_GET['session'])) {
    if ($_GET['session'] == "close") {
        session_start(); 
        session_destroy();
        unset($_SESSION['usuario']);

        $message =  "Sesión cerrada. Hasta pronto!";
    } elseif ($_GET['session'] == "noAccess") {
        $message = "No tienes acceso, por favor, inserta usuario y contraseña.";
    }

} 
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso privado</title>
</head>
<body>
<nav>
    <ul>
        <li><a href="#">Quiénes somos</a></li>
        <li><a href="#">Servicios</a></li>
        <li><a href="#">Contacto</a></li>
        <li><a href="login.php">Acceso privado</a></li>
    </ul>
</nav>

<main>
    <h1>Acceso privado</h1>
    <h2><?php echo (isset($message) ? $message : '');?></h2>
    <form action="admin/gestion.php" method="post">
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario">
        <label for="pass">Contraseña:</label>
        <input type="password" name="pass" id="pass">

        <input type="submit" value="Acceder" name="enviar">
    </form>

</main>

</body>
</html>