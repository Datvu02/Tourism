<?php
    // var_dump($categories);die();
    require_once 'Views/Admin/Partials/header.php';

?>
<div class="container">
<h3 align="center">Submit a list of beautiful photos</h3>
<h3 align="center">Update posts</h3>
<hr>
    <form action="index.php?mod=post&act=handleEdit" method="POST" role="form" enctype="multipart/form-data">
        <div class="form-group">
            <label for="">Title</label>
            <input type="hidden" name="id" value="<?= $posts['id'] ?>">
            <input type="text" class="form-control" name="title" value="<?= $posts['title'] ?>">
        </div>
        <div class="form-group">
            <label for="">Description</label>
            <input type="text" class="form-control"  name="description" value="<?= $posts['description'] ?>">
        </div><div class="form-group">
            <label for="">Ảnh</label>
            <input type="file" class="form-control" name="thumbnail" value="<?= $posts['thumbnail'] ?>">
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
        <!-- <div class="form-group">
            <label for="">Nội dung</label>
            <input type="text" class="form-control" id="contentMovie"  name="content" >
        </div> -->
        <div class="form-group">
            <label for="">Nội dung</label>
            <textarea name="content" class="form-control" id="contentMovie" cols="40" rows="10" value="<?= $posts['content'] ?>"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
<?php
    require_once 'Views/Admin/Partials/footer.php';
?>
