<?php
setcookie("colorFavorito", "#432FA1", time()+3600);
$color = $_COOKIE["colorFavorito"];
echo "<style>body { background-color: " . $color . "; }</style>";
?>