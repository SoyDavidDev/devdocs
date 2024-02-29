<h2><?= esc($title) ?></h2>
<a href="../news">Volver al listado de noticias</a>
<br><br><br>
<!-- se utiliza para mostrar al usuario el error relacionado con la 
protección CSRF -->
<?= session()->getFlashdata('error') ?> 
<?= validation_list_errors() ?>
<!-- se utiliza para informar errores relacionados con la validación del 
formulario -->
<form action="./create" method="post" enctype="multipart/form-data">
    <?= csrf_field() ?>
    <!-- csrf_field() crea una entrada oculta con un token CSRF que ayuda a 
    proteger contra algunos ataques comunes. -->
    <label for="title">Title</label>
    <input type="input" name="title" value="<?= set_value('title') ?>">
    <br>

    <label for="body">Text</label>
    <textarea name="body" cols="45" rows="4"><?= set_value('body') ?></textarea>
    <br>
    <label for="category">Category</label>
    <select name="id_category">
        <?php if (! empty($category) && is_array($category)): ?>

            <?php foreach ($category as $category_item): ?>

                <option value="<?= $category_item['id'] ?>">
                    <?= $category_item['category'] ?>
                </option>
                
            <?php endforeach ?>
        <?php endif ?>
    </select>
    <br>
    <input type="file" name="imagen" id="imagen" value="<?= set_value('imagen') ?>">

    <input type="submit" name="submit" value="Create news item">
</form>
<!-- La función set_value() proporcionada por Form Helper se utiliza para 
mostrar datos de entrada antiguos cuando se producen errores. -->