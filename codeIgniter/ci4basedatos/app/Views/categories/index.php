<div class="container text-center justify-content-center">
<h2><?= esc($title) ?></h2>
<h3><a href="http://localhost:8888/ci4basedatos/public/categories/new">New Category</a></h3>

<?php if (! empty($categories) && is_array($categories)): ?>

    <?php foreach ($categories as $categories_item): ?>

        <div class="main">
            <?= esc($categories_item['category']) ?>
        </div>
        <h4><?= esc($categories_item['id'])?></h4>
        <p>
            <a href="./categories/<?= esc($categories_item['id'], 'url') ?>">
            View category</a>
            <a href="./categories/del/<?= esc($categories_item['id'], 'url') ?>">
            Delete category</a>
            <a href="./categories/update/<?= esc($categories_item['id'], 'url') ?>">
            Update category</a>
        </p>
    <?php endforeach ?>

<?php else: ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>
</div>