<?php
  require_once 'Views/Admin/Partials/header.php';
 ?>

 <div class="row">
  <div class="col-12 col-lg-12">
    <div class="card">
      <div class="card-header">Bảng Danh Mục:
        <a href="index.php?mod=category&act=create" style="float: right" class="btn btn-success">Thêm mới</a>
    </div>
        <div class="table-responsive">
                 <table class="table align-items-center table-flush table-borderless">
                  <thead>
                     <tr>
                       <th>ID</th>
                       <th>Tên </th>
                       <th>Ảnh</th>
                       <th>Danh mục cha</th>
                       <th>Thời gian tạo</th>
                       <th>Hoạt động</th>
                     </tr>
                   </thead>
                   <tbody>
                     <?php foreach ($categories as $key => $category) {       ?>

                     <tr>
                       <td><?= $key +   1 ?></td>
                       <td><?= $category['name'] ?></td>
                       <td><img src="assets/Admin/uploads/<?= $category['thumbnail'] ?>" style="width: 150px; height: 100px; border-radius: 5px; object-fit: cover;"></td>
                       <td> <?php
                          foreach ($categoriesParent as $key => $categoryParent) {
                            if ($category['parent_id'] == $categoryParent['id']) {
                              echo $categoryParent['name'];
                            }
                          }
                          // $category['parent_id']
                        ?> </td>
                       <td><?= $category['created_at'] ?></td>
                       <td>
                         <a href="index.php?mod=category&act=handleFind&id=<?= $category['id'] ?>" class="btn btn-success">Chỉnh sửa</a>
                         <a href="index.php?mod=category&act=handleDelete&id=<?= $category['id'] ?>" class="btn btn-danger">xóa</a>
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
