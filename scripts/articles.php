<?php
$query=$pdo->query("SELECT * FROM articles");

$articles = $query->fetchAll();

if ($page == 'articles'){
if (isset($art_id)){
    $query = $pdo->prepare("SELECT * FROM articles WHERE id = :id");
    $query->execute(['id' => $art_id]);
    $article_focus = $query ->fetch();
    if (!$article_focus){
        header('Location: ?page=error');
        die;
    } 
} else{
    header('Location: ?page=error');
}
}
switch ($art_id){
    case 1:
        $pictures = [
            "https://cdn.pixabay.com/photo/2013/07/30/12/25/marriage-168831_960_720.jpg",
            "https://cdn.pixabay.com/photo/2018/02/08/22/27/flower-3140492_960_720.jpg",
            "https://cdn.pixabay.com/photo/2014/09/14/18/04/dandelion-445228_960_720.jpg",
            "https://cdn.pixabay.com/photo/2014/01/22/19/44/flower-field-250016_960_720.jpg",
            "https://cdn.pixabay.com/photo/2016/02/17/19/08/lotus-1205631_960_720.jpg",
            "https://cdn.pixabay.com/photo/2017/02/15/13/40/tulips-2068692_960_720.jpg",
            "https://cdn.pixabay.com/photo/2018/01/05/16/24/rose-3063284_960_720.jpg",
            "https://cdn.pixabay.com/photo/2012/03/01/00/55/flowers-19830_960_720.jpg",
            "https://cdn.pixabay.com/photo/2015/04/08/15/09/daisy-712892_960_720.jpg",
            "https://cdn.pixabay.com/photo/2016/10/06/14/07/sunflowers-1719119_960_720.jpg",
        ];
        break;
    case 2:
        $pictures = [
            "https://cdn.pixabay.com/photo/2017/02/07/16/47/kingfisher-2046453_960_720.jpg",
            "https://cdn.pixabay.com/photo/2014/11/28/01/01/jay-548381_960_720.jpg",
            "https://cdn.pixabay.com/photo/2018/10/08/14/46/bird-3732867_960_720.jpg",
            "https://cdn.pixabay.com/photo/2013/03/04/18/49/peacock-90051_960_720.jpg",
            "https://cdn.pixabay.com/photo/2017/06/09/09/39/adler-2386314_960_720.jpg",
            "https://cdn.pixabay.com/photo/2018/09/02/15/34/burrowing-3649048_960_720.jpg",
            "https://cdn.pixabay.com/photo/2016/11/23/18/27/hummingbird-1854225_960_720.jpg",
        ];
        break;
    case 3:
        $pictures = [
            "https://cdn.pixabay.com/photo/2017/02/20/18/03/cat-2083492_960_720.jpg",
            "https://cdn.pixabay.com/photo/2017/07/24/19/57/tiger-2535888_960_720.jpg",
            "https://cdn.pixabay.com/photo/2016/12/05/11/39/fox-1883658_960_720.jpg",
            "https://cdn.pixabay.com/photo/2019/07/02/10/25/giraffe-4312090_960_720.jpg",
            "https://cdn.pixabay.com/photo/2016/12/04/21/58/rabbit-1882699_960_720.jpg",
            "https://cdn.pixabay.com/photo/2012/10/25/23/52/wolf-62898_960_720.jpg",
            "https://cdn.pixabay.com/photo/2015/10/12/15/46/fallow-deer-984573_960_720.jpg",
            "https://cdn.pixabay.com/photo/2014/10/01/10/44/hedgehog-468228_960_720.jpg",
            "https://cdn.pixabay.com/photo/2016/07/15/15/55/dachshund-1519374_960_720.jpg",
            "https://cdn.pixabay.com/photo/2014/11/29/09/56/sleigh-ride-549727_960_720.jpg",
        ];
        break;
    default:
        $pictures = [
        ];
        break;
}


$pictures1 = [
    "https://cdn.pixabay.com/photo/2013/07/30/12/25/marriage-168831_960_720.jpg",
    "https://cdn.pixabay.com/photo/2018/02/08/22/27/flower-3140492_960_720.jpg",
    "https://cdn.pixabay.com/photo/2014/09/14/18/04/dandelion-445228_960_720.jpg",
    "https://cdn.pixabay.com/photo/2014/01/22/19/44/flower-field-250016_960_720.jpg",
    "https://cdn.pixabay.com/photo/2016/02/17/19/08/lotus-1205631_960_720.jpg",
    "https://cdn.pixabay.com/photo/2017/02/15/13/40/tulips-2068692_960_720.jpg",
    "https://cdn.pixabay.com/photo/2018/01/05/16/24/rose-3063284_960_720.jpg",
    "https://cdn.pixabay.com/photo/2012/03/01/00/55/flowers-19830_960_720.jpg",
    "https://cdn.pixabay.com/photo/2015/04/08/15/09/daisy-712892_960_720.jpg",
    "https://cdn.pixabay.com/photo/2016/10/06/14/07/sunflowers-1719119_960_720.jpg",
];

$pictures2 = [
    "https://cdn.pixabay.com/photo/2017/02/07/16/47/kingfisher-2046453_960_720.jpg",
    "https://cdn.pixabay.com/photo/2014/11/28/01/01/jay-548381_960_720.jpg",
    "https://cdn.pixabay.com/photo/2018/10/08/14/46/bird-3732867_960_720.jpg",
    "https://cdn.pixabay.com/photo/2013/03/04/18/49/peacock-90051_960_720.jpg",
    "https://cdn.pixabay.com/photo/2017/06/09/09/39/adler-2386314_960_720.jpg",
    "https://cdn.pixabay.com/photo/2018/09/02/15/34/burrowing-3649048_960_720.jpg",
    "https://cdn.pixabay.com/photo/2016/11/23/18/27/hummingbird-1854225_960_720.jpg",
];

$pictures3 = [
    "https://cdn.pixabay.com/photo/2017/02/20/18/03/cat-2083492_960_720.jpg",
    "https://cdn.pixabay.com/photo/2017/07/24/19/57/tiger-2535888_960_720.jpg",
    "https://cdn.pixabay.com/photo/2016/12/05/11/39/fox-1883658_960_720.jpg",
    "https://cdn.pixabay.com/photo/2019/07/02/10/25/giraffe-4312090_960_720.jpg",
    "https://cdn.pixabay.com/photo/2016/12/04/21/58/rabbit-1882699_960_720.jpg",
    "https://cdn.pixabay.com/photo/2012/10/25/23/52/wolf-62898_960_720.jpg",
    "https://cdn.pixabay.com/photo/2015/10/12/15/46/fallow-deer-984573_960_720.jpg",
    "https://cdn.pixabay.com/photo/2014/10/01/10/44/hedgehog-468228_960_720.jpg",
    "https://cdn.pixabay.com/photo/2016/07/15/15/55/dachshund-1519374_960_720.jpg",
    "https://cdn.pixabay.com/photo/2014/11/29/09/56/sleigh-ride-549727_960_720.jpg",
];
