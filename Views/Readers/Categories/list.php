<?php
  require_once 'Views/Readers/Partials/header.php';

 ?>

  <!-- Page Content -->
  <!-- Banner Starts Here -->
  <div class="heading-page header-text">
    <section class="page-heading">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="text-content">
              <h4>Danh mục nổi bật</h4>
              <h2>Du lịch cùng gia đình.</h2>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- Banner Ends Here -->

  <section class="blog-posts grid-system">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="all-blog-posts">
            <div class="row">
              <?php foreach ($categories as $category) { ?>

                <div class="col-lg-6">
                <div class="blog-post" >
                  <div class="blog-thumb">
                    <img src="assets/Admin/uploads/<?= $category['thumbnail'] ?>" style="width: 100%; object-fit: cover;height: 250px;" alt="">
                  </div>
                  <div class="down-content" style=" height: 397px;">
                    <a href="index.php?mod=category&act=detail&id=<?= $category['id'] ?>"><h4><?= $category['name'] ?></h4></a>
                    <ul class="post-info">
                      <li><a href="#"><?= $category['created_at'] ?></a></li>
                    </ul>
                    <p><?= substr($category['description'],0,200); echo "..."; ?></p>
                    <div class="post-options">
                           <a href="index.php?mod=category&act=detail&id=<?= $category['id'] ?>">Xem chi tiết</a>
                    </div>
                  </div>
                </div>

              </div>
               <?php } ?>
            </div>
          </div>
        </div>


 <?php
   require_once 'Views/Readers/Partials/footer.php';
  ?>
