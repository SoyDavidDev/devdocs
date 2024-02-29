<?php
require("CrudUsuarios.php");

// Creamos nuevo objeto de la clase usuarios.-
$database = new Usuarios();
// invocamos método showUsuarios y lo metemos en un array nuevo.-
$users = $database->showUsuarios();

if (isset($_POST['nuevo_usuario'])) {
    $usuario = $_POST['usuario'];
    $password = md5($_POST['password']); // ciframos password
    $rol = $_POST['rol'];

    // lo pasamos a array tal y como esperamos en crudusuarios
    // así la variable sql se introduce según las posiciones del array,
    // recibido en formulario.-
    $data = array($usuario, $password, $rol);

    $database = new Usuarios();
    $database->addUsuario($data); // invocamos addUsuario y le pasamos array con los datos
                                    // Del formulario.-
    header("Location:Usuarios.php");
}

if (isset($_GET['eliminar'])) {
    $id = $_GET['id'];
    // aunque sea un dato, como lo hemos hecho con array en delUsuario, lo dejamos
    // para obtener $data[0]
    // $data = array($id);
    $database = new Usuarios();
    // $database->delUsuario($data);
    $database->delUsuario($id);
    header("Location:Usuarios.php");
}

if (isset($_GET['editar'])) {
    $id = $_GET['id'];

    $database = new Usuarios();
    $users_upd = $database->UsuarioById($id);

    foreach ($users_upd as $user_upd) {
        $usuario = $user_upd['usuario'];
        $password = $user_upd['password'];
        $rol = $user_upd['rol'];
    }
}

if (isset($_POST['upd_usuario'])) {
    $id = $_POST['id'];
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $rol = $_POST['rol'];

    $data = array($id,$usuario, $password, $rol);

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
    <form action="<?php  echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="hidden" name="id" id="id" 
        value="<?php echo (isset($_GET['id'])) ? $id : ''?>">
        <br>
        <label for="usuario">USUARIO</label>
        <input type="text" name="usuario" id="usuario" 
        value="<?php echo (isset($_GET['editar'])) ? $usuario : ''?>">
        <br>
        <label for="password">PASSWORD</label>
        <input type="password" name="password" id="password"
        value="<?php echo (isset($_GET['editar'])) ? $password : ''?>">
        <br>
        <label for="rol">ROL</label>
        <input type="text" name="rol" id="rol"
        value="<?php echo (isset($_GET['editar'])) ? $rol : ''?>">
        <br>
        <input type="submit" 
        name="<?php echo (isset($_GET['editar'])) ? "upd_usuario" : "nuevo_usuario";?>" 
        value="Guardar">
        <br>
    </form>
    <table border="1">
    <tr>
        <th>ID_USUARIO</th>
        <th>USUARIO</th>
        <th>PASSWORD</th>
        <th>ROL</th>
        <th>EDITAR</th>
        <th>ELIMINAR</th>
    </tr>
    <?php foreach ($users as $user) {?>
    <tr>
        <td><?php echo $user['id'];?></td>
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
</body>
</html>