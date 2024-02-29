<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acceso privado</title>
</head>
<body>
    

<main>
    <h1>Acceso privado</h1>

    <form action="admin/gestion.php" method="POST">
        <label for="usuario">Usuario</label>
        <input type="text" name="usuario" id="usuario">
    
        <label for="pass">Contraseña:</label>
        <input type="password" name="pass" id="pass">

        <input type="submit" value="Acceder" name="login">
    </form>
</main>

<?php
if (isset($_GET['session'])) {
    if ($_GET['session'] == "close") {
        include_once ("session-destroy.php");
        echo "Sesión cerrada.";
    } else {
        echo "La sesión sigue abierta.";
    }
}
?>
</body>
</html>