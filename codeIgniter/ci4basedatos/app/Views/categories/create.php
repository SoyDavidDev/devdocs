<h2><?= esc($title) ?></h2>
<a href="../categories">Volver al listado de categorías</a>
<br><br><br>
<!-- se utiliza para mostrar al usuario el error relacionado con la 
protección CSRF -->
<?= session()->getFlashdata('error') ?> 
<?= validation_list_errors() ?>
<!-- se utiliza para informar errores relacionados con la validación del 
formulario -->
<form action="<?= site_url('categories/create')?>" method="post">
    <?= csrf_field() ?>
    <!-- csrf_field() crea una entrada oculta con un token CSRF que ayuda a 
    proteger contra algunos ataques comunes. -->
    <label for="category">Category</label>
    <input type="input" name="category" value="<?= set_value('category') ?>">
    <br>
    <input type="submit" name="submit" value="Create categories item">
</form>
<!-- La función set_value() proporcionada por Form Helper se utiliza para 
mostrar datos de entrada antiguos cuando se producen errores. -->