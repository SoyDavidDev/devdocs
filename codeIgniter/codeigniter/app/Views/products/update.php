<h2><?= esc($title) ?></h2>
 
<a href="<?php base_url('')?>">Volver al listado de Products</a>
<br><br><br>
 
<?php if (! empty($products) && is_array($products)):?>
 
    <form action="./updated/<?= esc($products['id_product']) ?>"  method="post">
        <?= csrf_field() ?>
 
        <label for="name">Name</label>
        <input type="input" name="name" value="<?= esc($products['name']) ?>">
        <br>

        <label for="brand">Brand</label>
        <input type="input" name="brand" value="<?= esc($products['brand']) ?>">
        <br>

        <label for="description">Description</label>
        <input type="input" name="description" value="<?= esc($products['description']) ?>">
        <br>

        <input type="submit" name="submit" value="Update product item">
    </form>
 
<?php endif ?>