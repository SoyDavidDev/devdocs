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
    
    setcookie('nombreusu',"",time()-300);
    setcookie('colorusu',"",time()-300);
}

header("Location: index.php");
die();
?>
</body>
</html>