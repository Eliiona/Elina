<h2 class="main-text">THIS WILL BE BLOG</h2>
<div class="container main-text orient-left">
    <?php foreach ($articles as $article){ ?>
    <div class="row article-row">
        <div class="col-4 col-md-3 col-xl-2">
            <img class="article-profile" src="<?= $article['main_pic'] ?>" alt="">
        </div>
        <div class="col-8 col-md-9 col-xl-10 article-text">
            <h4><a href="./?page=articles&id=<?= $article['id'] ?>">Article <?= $article['id'] ?>: <?= $article['title'] ?></a></h4>
            <p><?= $article['content'] ?></p>
        </div>
    </div>
    <?php if ($article != end($articles)) { ?>
        <hr>
        <?php } ?>
    <?php } ?>
</div>