<?php
  require_once 'Views/Readers/Partials/header.php';
 ?>
  <div class="content" style="margin: 100px">

    <!-- //Categories -->
    <a href="#" style="margin: 0px 50px;"> <h2>Categories</h2> </a>
    <div class="row" style="display:flex">

      <div class="card col-md-6 col-lg-4 col-xl-4" style=" box-shadow: 0px 0px 10px 5px #aaa0a0; padding: 20px;margin: 20px;">
        <div class="card-block">
          <a href="#"><h3 class="card-title">Card title</h3></a>
          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
          <p class="card-text">
            Some quick example text to build on the card title
            and make up the bulk of the card's content.
          </p>
          <a href="#" class="btn">DETAIL</a>
        </div>
      </div>
      <div class="card col-md-6 col-lg-4 col-xl-4" style=" box-shadow: 0px 0px 10px 5px #aaa0a0; padding: 20px;margin: 20px;">

        <div class="card-block">
          <a href="#"><h3 class="card-title">Card title</h3></a>
          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
          <p class="card-text">
            Some quick example text to build on the card title
            and make up the bulk of the card's content.
          </p>
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
      <div class="card col-md-6 col-lg-4 col-xl-4" style=" box-shadow: 0px 0px 10px 5px #aaa0a0; padding: 20px;margin: 20px;">

        <div class="card-block">
          <a href="#"><h3 class="card-title">Card title</h3></a>
          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
          <p class="card-text">
            Some quick example text to build on the card title
            and make up the bulk of the card's content.
          </p>
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
    </div>
    <hr>

    <!-- //Posts -->
    <a href="#" style="margin: 0px 50px;"> <h2>Posts</h2> </a>
    <div class="row" style="display:flex">
      <?php foreach ($Posts as $Post) {
       ?>
      <div class="card col-md-6 col-lg-4 col-xl-4" style=" box-shadow: 0px 0px 10px 5px #aaa0a0; padding: 20px;margin: 20px;">

        <div class="card-block">
          <img src="asset/admin/upload/<?= $Post['thumbnail'] ?>" alt=""> <a href="#"><h3 class="card-title"><?= $Post['title']  ?></h3></a>
          <h6 class="card-subtitle mb-2 text-muted"><?= $Post['description']  ?></h6>
          <p class="card-text">
            <?= $Post['content']  ?>
          </p>
          <a href="#">DETAIL</a>
        </div>
      </div>
    <?php } ?>
      <div class="card col-md-6 col-lg-4 col-xl-4" style=" box-shadow: 0px 0px 10px 5px #aaa0a0; padding: 20px;margin: 20px;">

        <div class="card-block">
          <a href="#"><h3 class="card-title">Card title</h3></a>
          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
          <p class="card-text">
            Some quick example text to build on the card title
            and make up the bulk of the card's content.
          </p>
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
      <div class="card col-md-6 col-lg-4 col-xl-4" style=" box-shadow: 0px 0px 10px 5px #aaa0a0; padding: 20px;margin: 20px;">

        <div class="card-block">
          <a href="#"><h3 class="card-title">Card title</h3></a>
          <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
          <p class="card-text">
            Some quick example text to build on the card title
            and make up the bulk of the card's content.
          </p>
          <a href="#" class="card-link">Card link</a>
          <a href="#" class="card-link">Another link</a>
        </div>
      </div>
    </div>
    <hr>
  </div>
 <?php
   require_once 'Views/Readers/Partials/footer.php';
  ?>
