<?php
    require_once 'Views/Admin/Partials/header.php';

?>
<div class="container">
<h3 align="center">Submit a list of beautiful photos</h3>
<h3 align="center">Update Category</h3>
<hr>
    <form action="index.php?mod=category&act=handleEdit" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Name</label>
            <input type="hidden" name="id" value="<?= $categories['id'] ?>">
            <input type="text" class="form-control" name="name" value="<?= $categories['name'] ?>">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" class="form-control" name="description" value="<?= $categories['description'] ?>">
        </div>
        <div class="form-group">
            <label for="">Ảnh</label>
            <input type="file" class="form-control" name="thumbnail" value="<?= $categories['thumbnail'] ?>">
        </div>
        <div class="form-group">
            <label for="">Danh mục cha</label>
            <select class="form-control" id="cars" name="parent_id" >
              <option> Lựa chọn danh mục </option>
              <?php foreach (getListCategory() as $value) {
                ?>
                <option value="<?= $value['id'] ?>"><?= $value['name'] ?></option>
              <?php } ?>
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
</div>
<?php
    require_once 'Views/Admin/Partials/footer.php';
?>
