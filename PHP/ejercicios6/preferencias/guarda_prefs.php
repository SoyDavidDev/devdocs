<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

if (isset($_REQUEST['nombre']) && isset($_REQUEST['color'])) {
    
    $nombre = $_REQUEST['nombre'];
    $color = $_REQUEST['color'];
    
    setcookie("nombreusu", $nombre, time()+ 300);
    
    setcookie("colorusu", $color, time() + 300);
    
    header("Location: index.php");
    die();
}else {
    echo "No funciona la cookie...,";
}
?>
</body>
</html>