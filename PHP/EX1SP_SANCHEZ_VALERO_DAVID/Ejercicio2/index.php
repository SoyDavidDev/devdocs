<?php
session_start();
$message = "";

if (isset($_GET['session'])) {
    if ($_GET['session'] == "close") {

        session_destroy();
        unset($_SESSION['usuario']);

        $message =  "Sesión cerrada. Hasta pronto!";
    } elseif ($_GET['session'] == "noAccess") {
        $message = "No tienes acceso, por favor, inserta usuario y contraseña.";
    }

} 

if (isset($_POST['enviar'])) {
    $usuario = $_POST['user_name'];
    $pass = $_POST['user_pass'];

    $loginCorrecto = ($usuario == "david") && ($pass == "1234");

    if (empty($usuario) || empty($pass)) { // añadido tras corrección examen
        header("Refresh:2; url=index.php");
        $message = "Rellena los campos, por favor.";
    } else {
        if (!$loginCorrecto) {
            header("Refresh:2; url=index.php");
            $message = "Usuario y contraseña incorrecta";
        }else {
            $_SESSION['usuario'] = $usuario;
            
            if (!isset($_SESSION['usuario'])) {
                header("Refresh:2; url=index.php");
                $message = "No hay sesión de usuario.";
            }else {
                header("Location:admin/index.php");
            }
        }    
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MI PÁGINA WEB</title>
</head>
<body>
<h2><?php echo (isset($message) ? $message : ""); ?></h2>
    <form method="post" action="<?php echo ($_SERVER['PHP_SELF']);?>">
        <input type="text" name="user_name" placeholder="Usuario">
        <input type="password" name="user_pass" placeholder="Contraseña">
        <input type="submit" name="enviar">
    </form>
</body>
</html>