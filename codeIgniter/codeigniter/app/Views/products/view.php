<div class="container">
<a href="<?= base_url('')?>">Volver al listado de Wonders</a>
<br><br><br>
<h2><?= esc($products['name']) ?></h2>
<h4><?= esc($products['brand']) ?></h4>
<p><?= esc($products['description']) ?></p>
</div>
<p>

            <a href="<?=base_url('products/del/'). esc($products['id_product'], 'url') ?>">
            Delete Product</a>

            <a href="<?=base_url('products/update/'). esc($products['id_product'], 'url') ?>">
            Update Product</a>
</p>
