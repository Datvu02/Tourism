<?php
    require_once 'Views/Admin/Partials/header.php';
?>
    <div class="container">
    <h3 align="center">Tạo mới danh mục</h3>
    <hr>
        <form action="index.php?mod=category&act=store" method="POST" role="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="">Tên</label>
                <input type="text" class="form-control" id="" placeholder="" name="name">
            </div>
            <div class="form-group">
                <label for="">Mô tả</label>
                <input type="text" class="form-control" id="" placeholder="" name="description">
            </div>
            <div class="form-group">
                <label for="">Ảnh</label>
                <input type="file" class="form-control" id="" placeholder="" name="thumbnail">
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
            <button type="submit" class="btn btn-primary">Tạo mới</button>
        </form>
    </div>
    <?php
        require_once 'Views/Admin/Partials/footer.php';
    ?>
