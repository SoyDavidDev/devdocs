<?php
require_once("crudUsuarios.php");


$database = new Usuarios();
$users = $database->showUsuarios();

if (isset($_POST['nuevo_usuario'])) {
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $password = md5($_POST['password']);
    $rol = $_POST['rol'];

    $data = array($nombre, $usuario, $password, $rol);

    if (!empty($nombre) and !empty($usuario) and !empty($password)
        and !empty($rol)) {
        $database = new Usuarios();
        $database->addUsuario($data);
        header("Location:Usuarios.php");
    }else {
        $message = "Rellena todos los campos";
    }
}

if (isset($_GET['eliminar'])) {
    $id = $_GET['id'];
    
    $database = new Usuarios();
    $database->delUsuario($id);
    header("Location:Usuarios.php");
}

if (isset($_GET['editar'])) {
    // si recoge de url editar
    // recogemos la variable id de la url.-
    $id = $_GET['id'];
    //creamos nuevo obj de usuarios.-
    $database = new Usuarios();
    // aplicamos el método usuario byid, que consiste en recoger array según select
    $users_upd = $database->UsuarioById($id);
    // recorremos el array y creamos variables correspondientes
    // que irán al formulario como primera opción para rellenar el dicho form.
    foreach ($users_upd as $user_upd) {
        $nombre = $user_upd['nombre'];
        $usuario = $user_upd['usuario'];
        $password = $user_upd['password'];
        $rol = $user_upd['rol'];
    }
}

if (isset($_POST['upd_usuario'])) {
    // si le damos a guardar con la URL editar, recogemos post upd_usuario
    // recogemos todas las variables del formulario.-
    // id oculta en formulario pero necesaria para editar.-
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $usuario = $_POST['usuario'];
    $password =$_POST['password'];
    $rol = $_POST['rol'];

    // recogemos todos los datos en array en el orden realizado en el método.-
    $data = array($id,$nombre,$usuario,$password,$rol);
    //ejecutamos método.-
    $database = new Usuarios();
    $database->updUsuario($data);
    header("Location:Usuarios.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USUARIOS</title>
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
<h1>Usuarios.</h1>
<h2><?php echo (isset($message) ? $message : '');?></h2>

    <form action="<?php  echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="hidden" name="id" id="id"
        value="<?php echo (isset($_GET['id']))? $id : '';?>">
        <br>
        <label for="nombre">NOMBRE</label>
        <input type="text" name="nombre" id="nombre"
        value="<?php echo (isset($_GET['editar'])) ? $nombre : '';?>">
        <br>
        <label for="usuario">USUARIO</label>
        <input type="text" name="usuario" id="usuario"
        value="<?php echo (isset($_GET['editar'])) ? $usuario : '';?>">
        <br>
        <label for="password">PASSWORD</label>
        <input type="password" name="password" id="password"
        value="<?php echo (isset($_GET['editar'])) ? $password : '';?>">
        <br>
        <label for="rol">ROL</label>
        <input type="text" name="rol" id="rol"
        value="<?php echo (isset($_GET['editar'])) ? $rol : '';?>">
        <br>
        <input type="submit" 
        name="<?php echo (isset($_GET['editar'])) ? "upd_usuario" : "nuevo_usuario";?>" 
        value="Guardar">
        <br>
        <br>
    </form>
    <table border="1">
    <tr>
        <th>ID_USUARIO</th>
        <th>NOMBRE</th>
        <th>USUARIO</th>
        <th>PASSWORD</th>
        <th>ROL</th>
        <th>EDITAR</th>
        <th>ELIMINAR</th>
    </tr>
    <?php foreach ($users as $user) {?>
    <tr>
        <td><?php echo $user['id'];?></td>
        <td><?php echo $user['nombre'];?></td>
        <td><?php echo $user['usuario'];?></td>
        <td><?php echo $user['password'];?></td>
        <td><?php echo $user['rol'];?></td>
        <td><a href="Usuarios.php?id=<?php echo $user[0];?>&editar">
        EDITAR</a></td>
        <td><a href="Usuarios.php?id=<?php echo $user[0];?>&eliminar">
        ELIMINAR</a></td>
    </tr>

    <?php
    } // FINALIZA FOREACH.-
    ?>
    </table>
    <br>

    <?php
    require("../menu.php");

    ?>
</body>
</html>