<?php
  require_once 'Views/Admin/Partials/header.php';
  // var_dump($posts);die;
 ?>
<div class="row">
 <div class="col-12 col-lg-12">
   <div class="card">
     <div class="card-header">Bảng bài viết:
       <a href="index.php?mod=post&act=create" style="float: right" class="btn btn-success">Thêm mới</a>
   </div>
       <div class="table-responsive">
                <table class="table table-flush table-borderless" style="text-align: center">
                 <thead>
                    <tr>
                      <th>ID</th>
                      <th>Tiêu đề</th>
                      <th>Ảnh</th>
                      <th>Danh mục</th>
                      <th>Tác giả</th>
                      <th>Lượt xem</th>
                      <th>Thời gian tạo</th>
                      <th>Hoạt động</th>
                    </tr>
                  </thead>
                  <tbody style="line-height:">
                    <?php foreach ($posts as $key => $post) { ?>
                    <tr>
                        <td><?= $key + 1 ?></td>
                        <td> <p style="width: 110px !important; white-space: normal;"><?= $post['title'] ?></p> </td>
                        <td>
                            <img src="assets/Admin/uploads/<?= $post['thumbnail'] ?>" width="100%" height="100px" style="border-radius: 5px; object-fit: cover;">
                        </td>
                        <td> <p style="width: 100px !important; white-space: normal;"><?= $post['category_name'] ?></p> </td>
                        <td><?= $post['user_name'] ?></td>
                        <td><?= $post['view_count'] ?></td>
                        <td><?= $post['created_at'] ?></td>
                        <td>
                            <a href="index.php?mod=post&act=handleFind&id=<?= $post['id'] ?>" class="btn btn-success">Chỉnh sửa</a>
                            <a href="index.php?mod=post&act=handleDelete&id=<?= $post['id'] ?>" class="btn btn-danger">Xóa</a>
                        </td>
                    </tr>
                  <?php } ?>

                  </tbody></table>
              </div>
   </div>
 </div>
</div><!--End Row-->
<?php
    require_once 'Views/Admin/Partials/footer.php';
?>
