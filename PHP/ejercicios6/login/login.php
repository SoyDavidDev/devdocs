<?php 
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // guardamos en variables lo que el usuario escribe en los input de form
    $login = trim($_REQUEST['login']);
    $pass = trim($_REQUEST['pass']);

    // ruta archivo
    $archivo = "usuarios.txt";

    // leer archivo línea a línea
    $fp = fopen($archivo, "r") or die("Unable to open file!");

    // mensaje si hay error
    $mensaje_error = "Datos incorrectos, fíjate mejor la próxima!";

    // Credenciales correctas?
    $datosCorrectos = false;


    // Recorremos archivo línea a línea
    while (!feof($fp)) {
        $linea = fgets($fp);
    
        // asignamos variables como si fuera array y comparamos
        // con lo que ha leído en línea.
        list($usuario,$contrasenya) = explode(":",$linea);

        if (trim($usuario) === $login && trim($contrasenya) === $pass) {

            // si coinciden no hay mensaje de error
            // si coinciden creamos sesión de loginusu
            // y redirigimos a index.php
            $_SESSION['loginusu'] = $login;
            $datosCorrectos = true;
            break;
        } 
    }  
        
    // cerramos archivo
    fclose($fp);

    if ($datosCorrectos) {
        header("Location: index.php");
        die();
    } 
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<?php
if (isset($mensaje_error)) {
    echo "<h3 style = 'color: red'>$mensaje_error</h3>";
}
?>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
    
    <label for="login">Escribe tu usuario:</label><br>
    <input type="text"name = "login" id="login"><br>

    <label for="pass">Escribe tu contraseña</label><br>
    <input type="password" name="pass" id="pass"><br>

    <input type="submit" value="Guardar"><br>

    </form>
</body>
</html>