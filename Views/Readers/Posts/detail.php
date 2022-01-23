<?php
  require_once 'Views/Readers/Partials/header.php';
 ?>

 <div class="heading-page header-text">
   <section class="page-heading">
     <div class="container">
       <div class="row">
         <?php foreach ($posts as $post) { ?>

         <div class="col-lg-12">
           <div class="text-content">
             <h4>Chi tiết blog</h4>
             <h2><?= $post['title'] ?></h2>
           </div>
         </div>
       </div>
     <?php } ?>
     </div>
   </section>
 </div>

 <section class="blog-posts grid-system">
   <div class="container">
     <div class="row">
       <div class="col-lg-8">
         <div class="all-blog-posts">
           <div class="row">
             <?php foreach ($posts as $post) { ?>

               <div class="col-lg-12">
                 <div class="blog-post">
                   <div class="blog-thumb">

                     <img src="assets/Admin/uploads/<?= $post['thumbnail'] ?>" style="width: 100%; object-fit: cover;height: 500px;" alt="">
                   </div>
                   <div class="down-content">
                     <span><?= $post['category_name'] ?></span>
                     <a href="index.php?mod=post&act=discover&id=<?= $post['id'] ?>"><h4><?= $post['title'] ?></h4></a>
                     <ul class="post-info">
                       <li><a href="#"><?= $post['user_name'] ?></a></li>
                       <li><a href="#"><?= $post['created_at'] ?></a></li>
                       <li><a href="#"><?= $post['view_count'] ?> Views</a></li>
                     </ul>
                     <div class="content">
                       <p><?= $post['description'] ?></p>
                       <style media="screen">
                         .content img{
                           width: 100% !important;
                           height: 300px !important;
                           object-fit: cover;
                         }
                         .content table{
                           width: 100% !important;
                           overflow: auto;
                         }
                         .content .wp-caption{
                           width: 100% !important;

                         }
                       </style>
                       <?= $post['content']?>
                     </div>
                     <div class="post-options">
                       <div class="row">
                         <div class="col-6">
                           <ul class="post-tags">
                             <li><i class="fas fa-hand-point-right"></i></li>
                               <li><a href="#">Hãy cùng tìm hiểu danh sách blog của chúng tôi.</a></li>
                           </ul>
                         </div>
                        </div>
                     </div>
                   </div>
                 </div>
               </div>

            <?php } ?>
             <!-- <div class="col-lg-12">
               <div class="sidebar-item comments">
                 <div class="sidebar-heading">
                   <h2>4 comments</h2>
                 </div>
                 <div class="content">
                   <ul>
                     <li>
                       <div class="author-thumb">
                         <img src="assets/images/comment-author-01.jpg" alt="">
                       </div>
                       <div class="right-content">
                         <h4>Charles Kate<span>May 16, 2020</span></h4>
                         <p>Fusce ornare mollis eros. Duis et diam vitae justo fringilla condimentum eu quis leo. Vestibulum id turpis porttitor sapien facilisis scelerisque. Curabitur a nisl eu lacus convallis eleifend posuere id tellus.</p>
                       </div>
                     </li>
                     <li class="replied">
                       <div class="author-thumb">
                         <img src="assets/images/comment-author-02.jpg" alt="">
                       </div>
                       <div class="right-content">
                         <h4>Thirteen Man<span>May 20, 2020</span></h4>
                         <p>In porta urna sed venenatis sollicitudin. Praesent urna sem, pulvinar vel mattis eget.</p>
                       </div>
                     </li>
                     <li>
                       <div class="author-thumb">
                         <img src="assets/images/comment-author-03.jpg" alt="">
                       </div>
                       <div class="right-content">
                         <h4>Belisimo Mama<span>May 16, 2020</span></h4>
                         <p>Nullam nec pharetra nibh. Cras tortor nulla, faucibus id tincidunt in, ultrices eget ligula. Sed vitae suscipit ligula. Vestibulum id turpis volutpat, lobortis turpis ac, molestie nibh.</p>
                       </div>
                     </li>
                     <li class="replied">
                       <div class="author-thumb">
                         <img src="assets/images/comment-author-02.jpg" alt="">
                       </div>
                       <div class="right-content">
                         <h4>Thirteen Man<span>May 22, 2020</span></h4>
                         <p>Mauris sit amet justo vulputate, cursus massa congue, vestibulum odio. Aenean elit nunc, gravida in erat sit amet, feugiat viverra leo.</p>
                       </div>
                     </li>
                   </ul>
                 </div>
               </div>
             </div>
             <div class="col-lg-12">
               <div class="sidebar-item submit-comment">
                 <div class="sidebar-heading">
                   <h2>Your comment</h2>
                 </div>
                 <div class="content">
                   <form id="comment" action="#" method="post">
                     <div class="row">
                       <div class="col-md-6 col-sm-12">
                         <fieldset>
                           <input name="name" type="text" id="name" placeholder="Your name" required="">
                         </fieldset>
                       </div>
                       <div class="col-md-6 col-sm-12">
                         <fieldset>
                           <input name="email" type="text" id="email" placeholder="Your email" required="">
                         </fieldset>
                       </div>
                       <div class="col-md-12 col-sm-12">
                         <fieldset>
                           <input name="subject" type="text" id="subject" placeholder="Subject">
                         </fieldset>
                       </div>
                       <div class="col-lg-12">
                         <fieldset>
                           <textarea name="message" rows="6" id="message" placeholder="Type your comment" required=""></textarea>
                         </fieldset>
                       </div>
                       <div class="col-lg-12">
                         <fieldset>
                           <button type="submit" id="form-submit" class="main-button">Submit</button>
                         </fieldset>
                       </div>
                     </div>
                   </form>
                 </div>
               </div>
             </div> -->
           </div>
         </div>
       </div>
 <?php
   require_once 'Views/Readers/Partials/footer.php';
  ?>
