<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="scripts/script.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <style>
      .map {
        height: 400px;
        width: 100%;
      }
      .article-pic{
            width:100%;
        }
        .photo-box-small{
            padding:2%;
            padding-top:0;
        }
        .link-row{
            padding-left:5%;
            padding-right: 5%; 
        }
        .message-field{
            word-warp: break-word;
        }
        .article-text-small{
            height:100px;
            overflow: hidden;
            display: -webkit-box;
            -webkit-line-clamp: 4;
            -webkit-box-orient: vertical; 
        }
        hr{
            border:none;
        }
        
    </style>
    <title>Your Perfect Slide</title>
</head>
<body class="container main-text">
    <header>
            <div style="text-align: right">
                <span class="main-text" >
                    <a href="">EN</a>/<a href="">LV</a>
                </span>
            </div>
        <h1 class="main-text">YOUR PERFECT SLIDE</h1>
        <hr>
        <div class="container main-text">
            <div class="row link-row">
                <div class="col-sm links">
                    <span class="main-link <?= $page == 'home'? 'active':'' ?>"><a href="./?page=home">Home</a></span>
                </div>
                <div class="col-sm links">
                <span class="main-link <?= $page == 'about'? 'active':'' ?>"><a href="./?page=about">About</a></span>
                </div>
                <div class="col-sm links">
                <span class="main-link <?= $page == 'services'? 'active':'' ?>"><a href="./?page=services">Services</a></span>
                </div>
                <div class="col-sm links">
                <span class="main-link <?= $page == 'blog'? 'active':'' ?><?= $page == 'articles'? 'active':'' ?>"><a href="./?page=blog">Blog</a></span>
                </div>
                <div class="col-sm links">
                <span class="main-link <?= $page == 'chat'? 'active':'' ?>"><a href="./?page=chat">Chat</a></span>
                </div>
                <div class="col-sm links">
                <span class="main-link <?= $page == 'contact'? 'active':'' ?>"><a href="./?page=contact">Contact</a></span>
                </div>
            </div>
        </div>
    </header>
<div id="content">



