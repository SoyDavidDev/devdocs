<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Currículum Vitae</title>
</head>
<body>
    <h1>Mi Currículum</h1>
<?php
/*
Crea una página en la carpeta de ejercicios llamada curriculum.php donde, 
utilizando variables variables, muestres parte de tu currículum (por ejemplo, un párrafo con tus estudios y otro con los idiomas que hablas), 
tanto en español como en otro idioma que elijas.
*/

// datos en Español
$estudios_esp = "Título de Grado Superior Desarrollo App Web";
$idiomas_esp = "Hablo español y valenciano de manera nativa, inglés con fluidez.";

// datos en inglés
$estudios_eng = "I have a degree in WEB APP DEVELOPMENT";
$idiomas_eng = "I am fluent in english and spanish/valencian native.";

// variable que indica el idioma actual
$idioma_actual = "eng";

// utilizando variables para mostrar la info
$estudios = ${"estudios_". $idioma_actual};
$idiomas = ${"idiomas_". $idioma_actual};

// mostrar la información
echo "<h2>Estudios</h2>";
echo "<p>$estudios</p>;";

echo "<h2>Idiomas</h2>";
echo "<p>$idiomas</p>";
?>
</body>
</html>