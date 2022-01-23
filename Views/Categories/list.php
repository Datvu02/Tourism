<?php
  require_once 'Views/Partials/header.php';
 ?>
 <div class="card mb-4">
     <div class="card-header">
         <i class="fas fa-table me-1"></i>
         Article list
         <a href="index.php?mod=category&act=create" style="float: right" class="btn btn-success">Create</a>
     </div>
     <div class="card-body">
       <table id="datatablesSimple">
           <thead>
               <tr>
                 <th>ID</th>
                 <th>Name</th>
                 <th>Description</th>
                 <th>Thumbnail</th>
                 <th>parent_id</th>
                 <th>created_at</th>
                 <th>Action</th>
               </tr>
           </thead>
           <tbody>
             <?php foreach ($categories as $key => $category) { ?>
                  <tr>
                    <td><?= $key + 1 ?></td>
                    <td><?= $category['name'] ?></td>
                    <td><?= $category['description'] ?></td>
                    <td><img src="images/<?= $category['thumbnail'] ?>" style="width: 50px; height: 50px; border-radius: 30%; object-fit: cover;"></td>
                    <td><?= $category['parent_id'] ?></td>
                    <td><?= $category['created_at'] ?></td>
                    <td>
                      <a href="index.php?controller=category&action=edit&id=<?= $category['id'] ?>" class="btn btn-info" class="btn btn-warning">Edit</a>
                      <a href="index.php?controller=category&action=destroy&id=<?= $category['id'] ?>" class="btn btn-info" class="btn btn-danger">Delete</a>
                    </td>
                  </tr>
              <?php } ?>
           </tbody>
       </table>
   </div>
 </div>
<?php
    require_once 'Views/Partials/footer.php';
?>
