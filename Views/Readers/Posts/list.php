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
             <h4>Bài viết nổi bật</h4>
             <h2>Những điều tươi đẹp trên hành trình.</h2>
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
             <?php foreach ($posts as $post) { ?>

               <div class="col-lg-6">
                  <div class="blog-post" style=" ">
                     <div class="blog-thumb">
                       <img src="assets/Admin/uploads/<?= $post['thumbnail'] ?>" style="width: 100%; object-fit: cover;height: 250px;" alt="">
                     </div>
                     <div class="down-content">
                         <span><?= $post['category_name'] ?></span>
                         <a href="index.php?mod=post&act=discover&id=<?= $post['id'] ?>"><h4><?= $post['title'] ?></h4></a>
                         <ul class="post-info">
                           <li><a href="#"><?= $post['user_name'] ?></a></li>
                           <li><a href="#"><?= $post['created_at'] ?></a></li>
                           <li><a href="#"><?= $post['view_count'] ?> Views</a></li>
                         </ul>
                         <div class="" style="overflow: hidden; height: 100px;">
                           <?= $post['description']?>
                         </div>
                         <div class="post-options">
                                <a href="index.php?mod=post&act=discover&id=<?= $post['id'] ?>">Xem chi tiết</a>
                         </div>
                       </div>
                  </div>
                </div>

              <?php } ?>
             <!-- <div class="col-lg-12">
               <ul class="page-numbers">
                 <li class="active"><a href="#">1</a></li>
                 <li ><a href="#">2</a></li>
                 <li><a href="#">3</a></li>
                 <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
               </ul>
             </div> -->
           </div>
         </div>
       <!-- </div> -->
     </div>

 <?php
   require_once 'Views/Readers/Partials/footer.php';
  ?>
