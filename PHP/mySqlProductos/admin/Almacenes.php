<?php
require_once("crudAlmacenes.php");
$message = "";
$database= new Almacenes();
$almacenes = $database->showAlmacenes();

if (isset($_POST['nuevo_almacen'])) {
    $almacen = $_POST['almacen'];
    if (!empty($almacen)) {
        $database = new Almacenes();
        $database->addAlmacen($almacen);
    }else {
        $message = "Rellena todos los campos.";
    }
    header("Refresh:3; url=Almacenes.php");

}

if (isset($_GET['eliminar'])) {
    $id = $_GET['id'];

    $database = new Almacenes();
    $database->delAlmacen($id);
    header("Location:Almacenes.php");
}

if (isset($_GET['editar'])) {
    $id = $_GET['id'];
    $database = new Almacenes();
    $almacenes_upd = $database->AlmacenById($id);
    foreach ($almacenes_upd as $almacen_upd) {
        $almacen = $almacen_upd[1];
    }
}

if (isset($_POST['upd_almacen'])) {
    $id = $_POST['id'];
    $almacen = $_POST['almacen'];

    $data = array($id, $almacen);
    $database = new Almacenes();
    $database->updAlmacen($data);
    header("Location:Almacenes.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ALMACENES</title>
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
<h1>Almacenes.</h1>
<h2><?php echo isset($message) ? $message : '';?></h2>

    <form action="<?php  echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="hidden" name="id" id="id"
        value="<?php echo (isset($_GET['id']))? $id : '';?>">
        <br>
        <label for="almacen">ALMACEN</label>
        <input type="text" name="almacen" id="almacen"
        value="<?php echo (isset($_GET['editar'])) ? $almacen : '';?>">
        <br>
        <br>
        <input type="submit" 
        name="<?php echo (isset($_GET['editar'])) ? "upd_almacen" : "nuevo_almacen";?>" 
        value="Guardar">
        <br>
        <br>
    </form>
    <table border="1">
    <tr>
        <th>ID_ALMACEN</th>
        <th>ALMACEN</th>
        <th>EDITAR</th>
        <th>ELIMINAR</th>
    </tr>
    <?php foreach ($almacenes as $almacen) {?>
    <tr>
        <td><?php echo $almacen['id'];?></td>
        <td><?php echo $almacen['almacen'];?></td>
        <td><a href="Almacenes.php?id=<?php echo $almacen[0];?>&editar">
        EDITAR</a></td>
        <td><a href="Almacenes.php?id=<?php echo $almacen[0];?>&eliminar">
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
</main>
</body>
</html>