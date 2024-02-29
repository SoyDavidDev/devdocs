<?php
require_once("crudMarcas.php");

$database= new Marcas();
$marcas = $database->showMarcas();

if (isset($_POST['nueva_marca'])) {
    $nombre_marca = $_POST['marca'];
    if (!empty($nombre_marca)) {
        $database = new Marcas();
        $database->addMarca($nombre_marca);    
        header("Location:Marcas.php");
    }else {
        $message = "Rellena todos los campos";
    }
}

if (isset($_GET['eliminar'])) {
    $id_marca = $_GET['id'];
    $database = new Marcas();
    $database->delMarca($id_marca);
    header("Location:Marcas.php");
}

if (isset($_GET['editar'])) {
    $id = $_GET['id'];

    $database = new Marcas();
    $marcas_upd = $database->MarcaById($id);
    foreach ($marcas_upd as $marca_upd) {
        $marca = $marca_upd[1];
    }
}

if (isset($_POST['upd_marca'])) {
    $id = $_POST['id'];
    $marca = $_POST['marca'];

    $data = array($id,$marca);
    $database = new Marcas();
    $database->updMarca($data);
    header("Location:Marcas.php");
    
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MARCAS</title>
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
<h1>Marcas.</h1>
<h2><?php echo (isset($message) ? $message : '');?></h2>

    <form action="<?php  echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="hidden" name="id" id="id"
        value="<?php echo (isset($_GET['id']))? $id : '';?>">
        <br>
        <label for="marca">MARCA</label>
        <input type="text" name="marca" id="marca"
        value="<?php echo (isset($_GET['editar'])) ? $marca : '';?>">
        <br>
        <br>
        <input type="submit" 
        name="<?php echo (isset($_GET['editar'])) ? "upd_marca" : "nueva_marca";?>" 
        value="Guardar">
        <br>
        <br>
    </form>
    <table border="1">
    <tr>
        <th>ID_MARCA</th>
        <th>MARCA</th>
        <th>EDITAR</th>
        <th>ELIMINAR</th>
    </tr>
    <?php foreach ($marcas as $marca) {?>
    <tr>
        <td><?php echo $marca['id'];?></td>
        <td><?php echo $marca['marca'];?></td>
        <td><a href="Marcas.php?id=<?php echo $marca[0];?>&editar">
        EDITAR</a></td>
        <td><a href="Marcas.php?id=<?php echo $marca[0];?>&eliminar">
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