<?php
  require_once 'Views/Admin/Partials/header.php';
 ?>
    <div class="container">
    <h3 align="center">Thêm mới Blog</h3>
    <hr>
        <form action="index.php?mod=post&act=store" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Tiêu đề</label>
                <input type="text" class="form-control" id="" placeholder="" name="title">
            </div>
            <div class="form-group">
                <label for="">Mô tả</label>
                <textarea name="description" class="form-control" id="" cols="40" rows="5"></textarea>
                <!-- <input type="text" class="form-control" id="" placeholder="" name="description"> -->
            </div>
            <div class="form-group">
                <label for="">Ảnh</label>
                <input type="file" class="form-control" id="thumbnail" name="thumbnail">
            </div>
            <div class="form-group">
                <label for="">Danh mục</label>
                <select class="form-control" name="category_id">
                  <?php foreach (getListCategory() as $category) { ?>
                    <option value="<?= $category['id'] ?>"><?= $category['name'] ?></option>
                  <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Tác giả</label>
                <select class="form-control" name="user_id">
                  <?php foreach (getUsers() as $user) { ?>
                    <option value="<?= $user['id'] ?>"><?= $user['name'] ?></option>
                  <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Nội dung</label>
                <textarea name="content" class="form-control" id="contentMovie" cols="40" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Tạo mới</button>
        </form>
    </div>
<?php
    require_once 'Views/Admin/Partials/footer.php';
?>
