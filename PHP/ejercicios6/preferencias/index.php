<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if (isset($_COOKIE['nombreusu']) && isset($_COOKIE['colorusu'])) {
    
    $nombre = $_COOKIE['nombreusu'];
    $color = $_COOKIE['colorusu'];

    echo "<h1>Bienvenido $nombre</h1>";
    echo "<style>body { background-color: " . $color . "; }</style>";
    echo "<a href='borrar_prefs.php'>Borrar preferencias</a>";
} else {
    echo "<h1>Página de inicio</h1>";
    echo "<style>body { background-color: white; }</style>";
}
echo "<br>";
echo "<br>";
echo "<a href='preferencias.php'>Modificar preferencias</a>";
?>
</body>
</html>