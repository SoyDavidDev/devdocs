<h2><?= esc($title) ?></h2>

<!-- se utiliza para mostrar al usuario el error relacionado con la protección CSRF-->
<?= session()->getFlashdata('error') ?>

<!-- roporcionada por Form Helper se utiliza para informar errores relacionados 
con la validación del formulario.-->
<?= validation_list_errors() ?>
<a href="../news">Volver al listado de noticias</a>
<br><br><br>

<form action="./create" method="post">

<!-- crea una entrada oculta con un token CSRF que ayuda a proteger contra 
algunos ataques comunes. -->
    <?= csrf_field() ?>

    <label for="title">Title</label>
    <!-- proporcionada por Form Helper se utiliza para mostrar datos de entrada 
antiguos cuando se producen errores -->
    <input type="input" name="title" value="<?= set_value('title') ?>">
    <br>

    <label for="body">Text</label>
    <textarea name="body" cols="45" rows="4"><?= set_value('body') ?></textarea>
    <br>

    <input type="submit" name="submit" value="Create news item">
</form>