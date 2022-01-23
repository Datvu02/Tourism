<?php
  require_once 'Views/Admin/Partials/header.php';
 ?>
<h2>Danh mục nổi bật</h2>
<hr>

<div class="all-blog-posts">
  <div class="row">
    <?php foreach (getCategories() as $category) { ?>

      <div class="col-lg-4">
      <div class="blog-post" style="background: rgba(255, 255, 255, 0.2); padding:20px;margin:10px; height: ">
        <div class="blog-thumb">
          <img src="assets/Admin/uploads/<?= $category['thumbnail'] ?>" style="width: 100%; object-fit: cover;height: 250px;" alt="">
        </div>
        <div class="down-content">
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
<h2>Blog nổi bật</h2>
<hr>

<div class="all-blog-posts">
  <div class="row">
    <?php foreach (getPosts() as $post) { ?>

      <div class="col-lg-6">
         <div class="blog-post" style="background: rgba(255, 255, 255, 0.2); padding:20px;margin:10px; height: ">
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
                <p><?= substr($category['description'],0,200); echo "..."; ?></p>

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
 <div class="card">
   <div class="card-header">Tác giả nổi bật
   </div>
 <div class="table-responsive">
         <table class="table align-items-center table-flush table-borderless">
          <thead>
           <tr>
             <th>id</th>
             <th>Ảnh đại diện</th>
             <th>Tên</th>
             <th>Email</th>
             <th>Thời gian tham gia</th>
           </tr>
           </thead>
           <tbody>
             <?php foreach (getUsers() as $key => $user) { ?>
             <tr>
              <td><?= $key + 1 ?></td>
              <td><img src="<?= $user['avatar'] ?>" style=" width: 50px; height: 50px; object-fit: cover; border-radius: 50%;" class="product-img" alt="product img"></td>
              <td><?= $user['name'] ?></td>
              <td><?= $user['email'] ?></td>
            <td><?= $user['created_at'] ?></td>
              </tr>
          <?php } ?>
         </tbody></table>
       </div>
</div>
<?php
    require_once 'Views/Admin/Partials/footer.php';
?>
