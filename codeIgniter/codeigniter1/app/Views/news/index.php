<h2><?= esc($title) ?></h2>
<p><a href="http://localhost:8888/codeigniter/public/news/new">New article</a></p>

<?php if (! empty($news) && is_array($news)): ?>

    <?php foreach ($news as $news_item): ?>

<!--         Título de la tabla -->        
<h3><?= esc($news_item['title']) ?></h3>

        <div class="main">
            <?= esc($news_item['body']) ?>
        </div>
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


<!--         utilizamos esc()para ayudar a prevenir ataques XSS.  -->        
<!--         Pero esta vez también pasamos "url" como segundo parámetro. 
            Esto se debe a que los patrones de ataque son diferentes según el 
            contexto en el que se utiliza el resultado  -->        
