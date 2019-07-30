<?php
session_start();
$page=$_GET['page']?? 'home';
$art_id=$_GET['id']?? '';

require_once './parts/header.php';
require_once './db.php';

switch ($page){
    case 'home':
        require_once './scripts/articles.php';
        require_once './pages/home.php';
        break;
    case 'blog':
        require_once './scripts/articles.php';
        require_once './pages/blog.php';
        break;
    case 'services':
        require_once './pages/services.php';
        break;
    case 'about':
        require_once './scripts/articles.php';
        require_once './pages/about.php';
        break;
    case 'chat':
        require_once './scripts/chat.php';
        require_once './pages/chat.php';
        break;
    case 'contact':
        require_once './pages/contact.html';
        break;
    case 'articles':
        if ($art_id != ''){
            require_once './scripts/articles.php';
            require_once './pages/articles/article.php';
            break;}
    default:
        require_once './pages/error.php';
        break;
}

require_once './parts/footer.html';