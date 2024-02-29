<?php
require("checkSession.php");

if ($_SESSION['usuario']['rol']== 0) {
    echo "<a href='Usuarios.php'>Acceder a Usuarios</a><br>";
    echo "<a href='Marcas.php'>Acceder a Marcas</a><br>";
    echo "<a href='Almacenes.php'>Acceder a Almacenes</a><br>";
}

echo "<a href='Productos.php'>Acceder a Productos</a><br>";
echo "<a href='../login.php?session=close'>Cerrar Sesión</a><br>";
?>