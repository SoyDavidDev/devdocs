<a href="../categories">Volver al listado de categorías</a>
<br><br><br>
<!-- se utiliza para mostrar al usuario el error relacionado con la 
protección CSRF -->
<?= session()->getFlashdata('error') ?> 
<?= validation_list_errors() ?>
<!-- se utiliza para informar errores relacionados con la validación del 
formulario -->
<form action="<?= site_url('wonders/create')?>" method="post">
    <?= csrf_field() ?>
    <!-- csrf_field() crea una entrada oculta con un token CSRF que ayuda a 
    proteger contra algunos ataques comunes. -->
    <label for="wonder">Wonder</label>
    <input type="input" name="wonder" value="<?= set_value('wonder') ?>">
    <br>
    <label for="location">Location</label>
    <input type="input" name="location" value="<?= set_value('location') ?>">
    <br>
    <input type="submit" name="submit" value="Create wonders item">
</form>
<!-- La función set_value() proporcionada por Form Helper se utiliza para 
mostrar datos de entrada antiguos cuando se producen errores. -->