<h2>Article <?= $article_focus['id'] ?>: <?= $article_focus['title'] ?></h2>
<div class="container">
    <div class="row">
        <div class="col-5">

                <div class= "row main-photo">
                    <a data-fancybox="gallery" href="<?= $article_focus['main_pic'] ?>"><img style="width:100%" src="<?= $article_focus['main_pic'] ?>" alt=""></a>
                </div>
                <div class= "row photo-row">
                    <?php foreach ($pictures as $picture) { ?>
                        <div class="col-sm-4 photo-box-small">
                            <a data-fancybox="gallery" href="<?= $picture ?>"><img class="article-pic" src="<?= $picture ?>"></a>
                        </div>
                    <?php } ?>
                </div>
        </div>
        <div class="col-7 backdrop orient-left">
            <p><?= $article_focus['content'] ?></p>
            <span><i>Last updated:</i> <?= $article_focus['update_date'] ?></span>
        </div>
    </div>
</div>