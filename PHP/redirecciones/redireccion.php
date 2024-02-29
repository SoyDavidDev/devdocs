<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<header>

<?php
// header("Location:login.php");

/* header("Refresh:5; url=login.php");

echo '<p>En breve le redirigiremos a la página principal.</p>'; */


if (!isset($_REQUEST['login']) || empty($_REQUEST['login']))
{
    header("Location:login.php");
}
?>
</body>
</html>