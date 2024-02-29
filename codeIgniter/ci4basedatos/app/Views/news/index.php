<div class="container text-center justify-content-center">

<h1><?= esc($title) ?></h1>
<h3><a href="<?= base_url('news/new')?>">New Article</a></h3>

<?php if (! empty($news) && is_array($news)): ?>

    <?php foreach ($news as $news_item): ?>

        <h3><?= esc($news_item['title']) ?></h3>

        <div class="main">
            <?= esc($news_item['body']) ?>
        </div>
        <h4><?= esc($news_item['category'])?></h4>
        <img src="<?= base_url('assets/img/'.$news_item['imagen'])?>" alt="Descripción imagen">
        <p>
            <a href="./news/<?= esc($news_item['slug'], 'url') ?>">
            View article</a>
            <a href="./news/del/<?= esc($news_item['id'], 'url') ?>">
            Delete article</a>
            <a href="./news/update/<?= esc($news_item['id'], 'url') ?>">
            Update article</a>
        </p>

    <?php endforeach ?>

<?php else: ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>

</div>
