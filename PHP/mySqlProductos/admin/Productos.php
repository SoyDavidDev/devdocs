<?php
require("../menu.php");

include_once("crudProductos.php");
include_once("crudMarcas.php");
include_once("crudAlmacenes.php");


// para mostrar tabla según consulta y según vaya habiendo cambios.-
$database = new Productos();
$productos = $database->showProductos();

// para el select del formulario
$database = new Marcas();
$marcas = $database->showMarcas();

// para el select de almacenes
$database = new Almacenes();
$almacenes = $database->showAlmacenes();

if (isset($_POST['nuevo_producto'])) {
    $producto = $_POST['producto'];
    $precio = $_POST['precio'];
    $marca = $_POST['marca'];
    $almacen = $_POST['almacen'];

    $data = array($producto, $precio, $marca,$almacen);
    if (!empty($producto)and !empty($precio)) {
        $database = new Productos();
        $database->addProducto($data);
        header("Location:Productos.php");
    }else {
        $message = "Rellena todos los campos";
    }
}

if (isset($_GET['eliminar'])) {
    $id_producto = $_GET['id_producto'];
    $database = new Productos();
    $database->delProducto($id_producto);
    header("Location:Productos.php");
}

if (isset($_GET['editar'])) {
    $id_producto = $_GET['id_producto'];

    $database = new Productos();
    $productos_upd = $database->ProductobyId($id_producto);

    foreach ($productos_upd as $producto_upd) {
        $producto = $producto_upd['producto'];
        $precio = $producto_upd['precio'];
        $id_marca = $producto_upd['id_marca'];
        $id_almacen = $producto_upd['id_almacen'];
    }
}

if (isset($_POST['upd_producto'])) {
    $id_producto = $_POST['id_producto'];
    $producto = $_POST['producto'];
    $precio = $_POST['precio'];
    $id_marca = $_POST['marca'];
    $id_almacen = $_POST['almacen'];

    $data = array($id_producto, $producto, $precio, $id_marca, $id_almacen);

    $database = new Productos();
    $database->updProducto($data);
    header("Location:Productos.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRODUCTOS</title>
</head>
<body>

<h1>Productos.</h1>
<h2><?php echo (isset($message) ? $message : '');?></h2>

    <form action="<?php  echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="hidden" name="id_producto" id="id_producto"
        value="<?php echo (isset($_GET['id_producto'])) ? $id_producto : ''?>">
        <br>
        <label for="producto">PRODUCTO</label>
        <input type="text" name="producto" id="producto"
        value="<?php echo (isset($_GET['editar']))? $producto : ''?>">
        <br>
        <label for="precio">PRECIO</label>
        <input type="text" name="precio" id="precio"
        value="<?php echo (isset($_GET['editar'])) ? $precio : ''?>">
        <br>
        <label for="marca">MARCA</label>
        <select name="marca" id="marca">
            <?php
            foreach ($marcas as $marca) {
            ?>
            <option value="<?php echo $marca[0];?>">
            <?php echo $marca[1];?></option>
            <?php
            }
            ?>
        </select>
        <br>
        <label for="almacen">ALMACÉN</label>
        <select name="almacen" id="almacen">
            <?php
            foreach ($almacenes as $almacen) {
            ?>
            <option value="<?php echo $almacen[0];?>">
            <?php echo $almacen[1];?></option>
            <?php
            }
            ?>
        </select>
        <br> 
        <br>
        <input type="submit" 
        name="<?php echo (isset($_GET['editar'])) ? "upd_producto" : 
        "nuevo_producto";?>" 
        value="Guardar">
        <br>
        <br>
    </form>
    <table border="1">
    <tr>
        <th>PRODUCTO</th>
        <th>PRECIO</th>
        <th>MARCA</th>
        <th>ALMACÉN</th>
        <th>EDITAR</th>
        <th>ELIMINAR</th>
    </tr>
    <?php foreach ($productos as $producto) {?>
    <tr>
        <td><?php echo $producto['producto'];?></td>
        <td><?php echo $producto['precio'];?></td>
        <td><?php echo $producto['marca'];?></td>
        <td><?php echo $producto['almacen'];?></td>
        <td><a href="Productos.php?id_producto=<?php echo $producto[0];?>&editar">
        EDITAR</a></td>
        <td><a href="Productos.php?id_producto=<?php echo $producto[0];?>&eliminar">
        ELIMINAR</a></td>
    </tr>
    <?php
    } // FINALIZA FOREACH.-
    ?>
    </table>
    <br>

</body>
</html>