<?php
session_start();

if (!isset($_SESSION['loginusu'])) {
    header("Location: login.php");
    die();
} /* ponemos los links en index.php
else {
    
    echo "<a href='pag1.php'>Página 1</a>";
    echo "<a href='pag2.php'>Página 2</a>";
} */
?>