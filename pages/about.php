
<div class="w3-bar w3-black">
    <?php foreach ($articles as $article){ ?>
        <button class="tablink w3-bar-item w3-button" onclick="openTab(event,'<?= $article['id'] ?>')"><?= $article['title'] ?></button>
    <?php } ?>
</div>

<?php foreach ($articles as $article){ ?>
<div id="<?= $article['id'] ?>" class="container article" style="display:none">
    <div class="row">
        <div class="col-5">
                <div class= "row main-photo">
                    <a data-fancybox="gallery" href="<?= $article['main_pic'] ?>"><img style="width:100%" src="<?= $article['main_pic'] ?>" alt=""></a>
                </div>
                <div class= "row photo-row">
                    <?php switch ($article['id']){
                        case 1:
                            $pics = $pictures1;
                            break;
                        case 2:
                            $pics = $pictures2;
                            break;
                        case 3:
                            $pics = $pictures3;
                            break;
                    } ?>
                    <?php foreach ($pics as $picture) { ?>
                        <div class="col-sm-4 photo-box-small">
                            <a data-fancybox="gallery" href="<?= $picture ?>"><img class="article-pic" src="<?= $picture ?>"></a>
                        </div>
                    <?php } ?>
                </div>
        </div>
        <div class="col-7 backdrop orient-left">
            <h4>Article <?= $article['id'] ?>: <?= $article['title'] ?></h4>
            <p><?= $article['content'] ?></p>
            <span><i>Last updated:</i> <?= $article['update_date'] ?></span>
        </div>
    </div>
</div>
<?php } ?>