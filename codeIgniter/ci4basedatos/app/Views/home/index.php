<main class="mt-5">
    <div class="album py-5 bg-body-tertiary">
        <div class="container">
            <div class="row row-cols-1 ro-cols-sm-2 row-cols-md-3 g-3">
                <?php if(!empty($news) && is_array($news)): ?>
                    <?php foreach ($news as $news_item): ?>
                        <div class="col-6">
                            <div class="card shadow-sm">
                                <a href="<?= base_url("news/".esc($news_item['slug'])) ?>">
                                    <img class="bd-placeholder-img card-img-top"
                                    width="100%"
                                    src="<?= base_url("assets/img/".esc($news_item['imagen'])) ?>" 
                                    alt="Foto Noticia">
                                    <div class="card-body text-center">
                                        <p class="card-text"><?= esc($news_item['title']) ?></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    <?php endforeach ?>
                <?php endif ?>
            </div>
        </div>
    </div>
</main>