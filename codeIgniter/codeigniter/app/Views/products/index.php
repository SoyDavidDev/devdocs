<div class="container text-center justify-content-center">

<h1><?= esc($title) ?></h1>
<h3><a href="<?= base_url('products/new')?>">New Article</a></h3>

<?php if (! empty($products) && is_array($products)): ?>

    <?php foreach ($products as $product): ?>

        <h3><?= esc($product['name']) ?></h3>

        <h4><?= esc($product['brand'])?></h4>
        <p><?= esc($product['description'])?></h4>
        <p>
            <a href="./products/<?= esc($product['id_product'], 'url') ?>">
            View Product</a>
        </p>

    <?php endforeach ?>

<?php else: ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>

</div>
