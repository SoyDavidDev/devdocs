<a href="../products">Volver al listado de categorías</a>
<br><br><br>

<?= session()->getFlashdata('error') ?> 
<?= validation_list_errors() ?>


<form action="<?= site_url('products/create')?>" method="post">
    <?= csrf_field() ?>

    
    <label for="name">Name</label>
    <input type="input" name="name" value="<?= set_value('name') ?>">
    <br>
    <label for="location">Brand</label>
    <input type="input" name="brand" value="<?= set_value('brand') ?>">
    <br>
    <label for="description">Description</label>
    <input type="input" name="description" value="<?= set_value('description') ?>">
    <br>
    <input type="submit" name="submit" value="Create Products item">
</form>

