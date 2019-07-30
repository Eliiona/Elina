<div class="container-fluid main-text">
<h2>This is home</h2>
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="https://images.pexels.com/photos/529927/pexels-photo-529927.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=500&w=750" alt="First slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h4>Page 1</h4>
                        <p>...</p>
                    </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="https://images.pexels.com/photos/2378539/pexels-photo-2378539.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Second slide">
                    <div class="carousel-caption d-none d-md-block">
                        <h4>Page 2</h4>
                        <p>...</p>
                    </div>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="https://images.pexels.com/photos/1483908/pexels-photo-1483908.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="Third slide">  
                    <div class="carousel-caption d-none d-md-block">
                        <h4>Page 3</h4>
                        <p>...</p>
                    </div>
              </div>
              <div class="carousel-item">
                  <img class="d-block w-100" src="https://cdn.pixabay.com/photo/2016/11/18/17/14/cloth-1835894_960_720.jpg" alt="Third slide">  
                      <div class="carousel-caption d-none d-md-block">
                          <h4>Page 4</h4>
                          <p>...</p>
                      </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="https://cdn.pixabay.com/photo/2015/07/28/21/01/create-865017_960_720.jpg" alt="Third slide">  
                        <div class="carousel-caption d-none d-md-block">
                            <h4>Page 5</h4>
                            <p>...</p>
                        </div>
                  </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          </div>
        </div>
        <div class="container" style="margin-top:3%">
          <div class="row">
              <?php foreach ($articles as $article){ ?>
                <div class="col-sm backdrop" style="margin-left:1px">
                  <div class="media">
                    <img class="mr-3" src="<?= $article['main_pic'] ?>" alt="" style="width:75px;height:75px;margin-top:10px;">
                    <div class="media-body article-text-small main-text orient-left">
                      <h4 class="mt-0"><a href="./?page=articles&id=<?= $article['id'] ?>">Article <?= $article['id'] ?>: <?= $article['title'] ?></a></h4>
                      <p style="font-size:11px;"><?= $article['content'] ?><p>
                    </div>
                  </div>
              </div>
              <?php } ?>
          </div>

        </div>
          <script>
            $('.carousel').carousel({
                interval: 1000
            })
          </script>