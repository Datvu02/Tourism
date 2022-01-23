<?php
  require_once 'Views/Readers/Partials/header.php';
 ?>

 <!-- //Categories -->
 <div class="main-banner header-text">
   <div class="container-fluid">
     <div class="owl-banner owl-carousel">
        <?php foreach ($listcategory as $category) {
          ?>

          <div class="item">
            <img src="assets/Admin/uploads/<?= $category['thumbnail'] ?>" style="width: 100%; object-fit: cover;height: 400px;" alt="">
            <div class="item-content">
              <div class="main-content">
                <div class="meta-category">
                  <span><?= $category['name'] ?></span>
                </div>
                <a href="index.php?mod=category&act=discover&id=<?= $category['id'] ?>"><h4><?= substr($category['description'],0,60); echo "..."; ?></h4></a>
                <ul class="post-info">
                  <li><a href="#"><?= $category['created_at'] ?></a></li>
                </ul>
              </div>
            </div>
          </div>

        <?php } ?>
     </div>
   </div>
 </div>

<!-- // -->
<section class="blog-posts">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="all-blog-posts">
          <div class="row">
            <?php foreach ($posts as $post) { ?>

              <div class="col-lg-12">
                <div class="blog-post">
                  <div class="blog-thumb">
                    <img src="assets/Admin/uploads/<?= $post['thumbnail'] ?>" style="width: 100%; object-fit: cover;height: 350px;" alt="">
                  </div>
                  <div class="down-content">
                    <span><?= $post['category_name'] ?></span>
                    <a href="index.php?mod=post&act=discover&id=<?= $post['id'] ?>"><h4><?= $post['title'] ?></h4></a>
                    <ul class="post-info">
                      <li><a href="#"><?= $post['user_name'] ?></a></li>
                      <li><a href="#"><?= $post['created_at'] ?></a></li>
                      <li><a href="#"><?= $post['view_count'] ?> Lượt xem</a></li>
                    </ul>
                    <div class="" style="overflow: hidden; height: 100px;">
                      <?= $post['content']?>
                    </div>
                    <div class="post-options">
                      <div class="row">
                        <div class="col-6">
                          <ul class="post-tags">
                            <li><i class="fa fa-tags"></i></li>
                            <li><a href="#"><?= $post['category_name'] ?></a>,</li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>
            <div class="col-lg-12">
              <div class="main-button">
                <a href="index.php?mod=post&act=list">Xem tất cả bài viết</a>
              </div>
            </div>
          </div>
        </div>
      </div>

 <?php
   require_once 'Views/Readers/Partials/footer.php';
  ?>
