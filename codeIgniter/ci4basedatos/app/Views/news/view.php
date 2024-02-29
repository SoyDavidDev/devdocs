<a href="<?= base_url('news/')?>">Volver al listado de noticias</a>
<br><br><br>
<h2><?= esc($news['title']) ?></h2>
<p><?= esc($news['body']) ?></p>
<h4><?= esc($news['category'])?></h4>
<img src="<?= base_url('assets/img/'.$news['imagen'])?>" alt="Descripción imagen">
<br>
