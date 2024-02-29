<div class="container text-center justify-content-center">

<h1><?= esc($title) ?></h1>
<h3><a href="<?= base_url('wonders/new')?>">New Article</a></h3>

<?php if (! empty($wonders) && is_array($wonders)): ?>

    <?php foreach ($wonders as $wonder): ?>

        <h3><?= esc($wonder['wonder']) ?></h3>

        <h4><?= esc($wonder['location'])?></h4>
        <p>
            <a href="./wonders/<?= esc($wonder['id'], 'url') ?>">
            View Wonder</a>
            <a href="./wonders/del/<?= esc($wonder['id'], 'url') ?>">
            Delete article</a>
            <a href="./wonders/update/<?= esc($wonder['id'], 'url') ?>">
            Update article</a>
        </p>

    <?php endforeach ?>

<?php else: ?>

    <h3>No News</h3>

    <p>Unable to find any news for you.</p>

<?php endif ?>

</div>
