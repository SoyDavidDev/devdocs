<?php
session_start();

if (isset($_POST['enviar'])) {
    require_once("crudUsuarios.php");

    $usuario = $_POST['usuario'];
    $pass = $_POST['pass'];
    $data = array($usuario,$pass);

    $database = new Usuarios();
    if ($users = $database->checkLogin($data)) {
        foreach($users as $user){
            $usuario_bd = $user[2];
            $password_bd = $user[3];
            $rol_bd = $user[4];

            $_SESSION['usuario']['user'] = $usuario;
            $_SESSION['usuario']['rol'] = $rol_bd;
            header("Location:gestion.php");
        }
    }else {
        header("Location:../login.php?messageErrorLogin");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion</title>
</head>
<body>
<nav>
    <ul>
        <li><a href="#">Quiénes somos</a></li>
        <li><a href="#">Servicios</a></li>
        <li><a href="#">Contacto</a></li>
        <li><a href="../login.php">Acceso privado</a></li>
    </ul>
</nav>

<main>
    <h1>Página Gestión</h1>
</main>
<?php
include_once("../menu.php");
?>

</body>
</html>