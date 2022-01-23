<?php
  require_once 'Views/Admin/Partials/header.php';
 ?>

   <!--Start Dashboard Content-->
   <h3>Danh mục nổi bật:</h3>

   <div class="container">
     <div class="row">
         <div class="all-blog-posts">
           <div class="row">
             <?php foreach (getCategories() as $category) { ?>

               <div class="col-lg-4">
               <div class="blog-post" style="background-color: rgba(0,0,0,.2); padding: 20px; margin: 20px;">
                 <div class="blog-thumb">
                   <img src="assets/Admin/uploads/<?= $category['thumbnail'] ?>" style="width: 100%; object-fit: cover;height: 250px;" alt="">
                 </div>
                 <div class="down-content">
                   <a href="index.php?mod=category&act=detail&id=<?= $category['id'] ?>"><h4><?= $category['name'] ?></h4></a>
                   <ul class="post-info p-0">
                     <li style="list-style: none;"><a href="#"><?= $category['created_at'] ?></a></li>
                   </ul>
                   <p><?= substr($category['description'],0,180); echo "..."; ?></p>
                 </div>
               </div>
             </div>

              <?php } ?>
           </div>
         </div>
     </div>
    </div>
    <hr>

    <h3>Bài viết nổi bật:</h3>

    <div class="container">
      <div class="row">
          <div class="all-blog-posts">
            <div class="row">
              <?php foreach (getPosts() as $post) { ?>

                <div class="col-lg-4">
                <div class="blog-post" style="background-color: rgba(0,0,0,.2); padding: 20px; margin: 20px;">
                  <div class="blog-thumb">
                    <img src="assets/Admin/uploads/<?= $post['thumbnail'] ?>" style="width: 100%; object-fit: cover;height: 250px;" alt="">
                  </div>
                  <div class="down-content">
                    <span><?= $post['category_name'] ?></span>
                    <a href="index.php?mod=post&act=discover&id=<?= $post['id'] ?>"><h4><?= substr($post['title'],0,20);  echo '...' ?></h4></a>
                    <ul class="post-info p-0" style="display: flex; ">
                      <li style="list-style: none;"><a href="#"><?= $post['user_name'] ?> | </a></li>
                      <li style="list-style: none;"><a href="#"><?= $post['created_at'] ?> | </a></li>
                      <li style="list-style: none;"><a href="#"><?= $post['view_count'] ?> lượt xem</a></li>
                    </ul>
                    <p><?= substr($post['description'],0,180);  echo '...' ?></p>

                  </div>
                </div>
              </div>

               <?php } ?>
            </div>
          </div>
      </div>
     </div>
     <hr>

 	<div class="row">
 	 <div class="col-12 col-lg-12">
 	   <div class="card">
 	     <div class="card-header">Tác giả nổi bật
 		  <div class="card-action">
              <div class="dropdown">
              <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
               <i class="icon-options"></i>
              </a>
               <div class="dropdown-menu dropdown-menu-right">
               <a class="dropdown-item" href="javascript:void();">Action</a>
               <a class="dropdown-item" href="javascript:void();">Another action</a>
               <a class="dropdown-item" href="javascript:void();">Something else here</a>
               <div class="dropdown-divider"></div>
               <a class="dropdown-item" href="javascript:void();">Separated link</a>
                </div>
               </div>
              </div>
 		 </div>
 	       <div class="table-responsive">
                  <table class="table align-items-center table-flush table-borderless">
                  <thead>
                     <tr>
                      <th>ID</th>
                      <th>Ảnh đại diện</th>
                      <th>Tên</th>
                      <th>Email</th>
                      <th>Thời gian tạo</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach (getUsers() as $user) { ?>
                    <tr>
                       <td><?= $user['id'] ?></td>
                       <td><img src="assets/Admin/uploads/<?= $user['avata'] ?>" class="product-img" alt="product img"></td>
                       <td><?= $user['name'] ?></td>
                       <td><?= $user['email'] ?></td>
                       <td><?= $user['created_at'] ?></td>
                    </tr>
                  <?php } ?>

                  </tbody></table>
                </div>
 	   </div>
 	 </div>
 	</div><!--End Row-->

       <!--End Dashboard Content-->

 	<!--start overlay-->
 		  <div class="overlay toggle-menu"></div>
 		<!--end overlay-->

     </div>
     <!-- End container-fluid-->

     </div><!--End content-wrapper-->
    <!--Start Back To Top Button-->
     <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
     <!--End Back To Top Button-->

<?php
  require_once 'Views/Admin/Partials/footer.php';
 ?>
