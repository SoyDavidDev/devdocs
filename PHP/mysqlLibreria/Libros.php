<?php
include_once("CrudLibros.php");
include_once("CrudCategorias.php");

$database = new Libros();
$libros = $database->showLibros();

$database = new Categorias();
$categorias = $database->showCategorias();

if (isset($_POST['nuevo_libro'])) {
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $id_categoria = $_POST['categoria'];
    $precio = $_POST['precio'];

    $data = array($titulo, $autor, $id_categoria, $precio);

    $database = new Libros();
    $database->addLibro($data);
    header("Location:Libros.php");
}

if (isset($_GET['eliminar'])) {
    $id_libro = $_GET['id_libro'];

    $database = new Libros();
    $database->delLibro($id_libro);
    header("Location:Libros.php");
}

// de aquí sacamos los enlaces que irán luego al formulario para rellenarse auto
if (isset($_GET['editar'])) {
    $id_libro = $_GET['id_libro'];

    $database = new Libros();
    $libros_upd = $database->LibroById($id_libro);

    foreach ($libros_upd as $libro_upd) {
        $titulo = $libro_upd['titulo'];
        $autor = $libro_upd['autor'];
        $id_categoria = $libro_upd['id_categoria'];
        $precio = $libro_upd['precio'];
    }

}

if (isset($_POST['upd_libro'])) {
    $id_libro = $_POST['id_libro'];
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $id_categoria = $_POST['categoria'];
    $precio = $_POST['precio'];

    $data = array($id_libro, $titulo, $autor, $id_categoria, $precio);
    
    $database = new Libros();
    $database->updLibro($data);

    header("Location:Libros.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LIBROS</title>
</head>
<body>
    <form action="<?php  echo $_SERVER['PHP_SELF'];?>" method="post">
        <input type="hidden" name="id_libro" id="id_libro"
        value="<?php echo (isset($_GET['id_libro'])) ? $id_libro : '' ?>">
        <br>
        <label for="titulo">TÍTULO</label>
        <input type="text" name="titulo" id="titulo"
        value="<?php echo (isset($_GET['editar'])) ? $titulo : '' ?>">
        <br>
        <label for="autor">AUTOR</label>
        <input type="text" name="autor" id="autor"
        value="<?php echo (isset($_GET['editar'])) ? $autor : '' ?>">
        <br>
        <label for="categoria">CATEGORÍA</label>
        <select name="categoria" id="categoria">
            <?php
            foreach ($categorias as $categoria) {
            ?>
            <option value="<?php echo $categoria[0];?>">
            <?php echo $categoria[1];?></option>
            <?php
            }
            ?>
        </select>
        <br> 
        <label for="precio">PRECIO</label>
        <input type="text" name="precio" id="precio"
        value="<?php echo (isset($_GET['editar'])) ? $precio : '' ?>">
        <br>
        <input type="submit" 
        name="<?php echo (isset($_GET['editar'])) ? "upd_libro" : "nuevo_libro";?>" 
        value="Guardar">
        <br>
        <br>
    </form>
    <table border="1">
    <tr>
        <th>TÍTULO</th>
        <th>AUTOR</th>
        <th>CATEGORÍA</th>
        <th>PRECIO</th>
        <th>EDITAR</th>
        <th>ELIMINAR</th>
    </tr>
    <?php foreach ($libros as $libro) {?>
    <tr>
        <td><?php echo $libro['titulo'];?></td>
        <td><?php echo $libro['autor'];?></td>
        <td><?php echo $libro['categoria'];?></td>
        <td><?php echo $libro['precio'];?></td>
        <td><a href="Libros.php?id_libro=<?php echo $libro[0];?>&editar">
        EDITAR</a></td>
        <td><a href="Libros.php?id_libro=<?php echo $libro[0];?>&eliminar">
        ELIMINAR</a></td>
    </tr>
    <?php
    } // FINALIZA FOREACH.-
    ?>
    </table>
</body>
</html>