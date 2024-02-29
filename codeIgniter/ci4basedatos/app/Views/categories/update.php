<h2><?= esc($title) ?></h2>
 
<a href="../../categories">Volver al listado de categorías</a>
<br><br><br>
 
<?php if (! empty($categories) && is_array($categories)):?>
 
    <form action="./updated/<?= esc($categories['id']) ?>"  method="post">
        <?= csrf_field() ?>
 
        <label for="category">Category</label>
        <input type="input" name="category" value="<?= esc($categories['category']) ?>">
        <br>

        <input type="submit" name="submit" value="Update item">
    </form>
 
<?php endif ?>