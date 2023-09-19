<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Página de bienvenida</h1>
    <p>Bienvenido a esta Página</p>
    <?php

    $nombre = "David";
    $any = 2023;

    ?>

    <p>El autor de esta página es <?php echo $nombre; ?> y está realizada en el año <?php echo $any;?></p>

    <p>El autor de esta página es <?= $nombre; ?> y está realizada en el año <?= $any;?></p>

    <p>El autor de esta página es <?php print $nombre; ?> y está realizada en el año <?php print $any;?></p>

</body>
</html>