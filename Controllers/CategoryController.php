<?php
require_once 'Models/Category.php';
require_once 'Controllers/BaseController.php';
  class CategoryController extends BaseController
  {
    public function index()
    {
      // echo "CategoryController-index";
      $category = new Category();
      $categories = $category -> getlist();
      $this -> view('Categories/list.php', ['categories' => $categories]);
    }

    public function create()
    {
      $this -> view('Categories/create.php');
    }

    public function store()
    {
      $data = $_POST;
      // $upload = uploadFile('thumbnail', 'images', array('jpg','jpeg', 'png', 'gif'), 1, false);
      // $_SESSION['upload_status'] = $upload;
      // echo "<pre>";
      //   print_r($_SESSION['upload_status']);
      // echo "</pre>";
      // die();
      $data_insert = [
        'id' => $data['id'],
        'name' => $data['name'],
        'description' => $data['description'],
        // 'thumbnail' => $_FILES['thumbnail']["name"],
        'parent_id' => $data['parent_id'],
        'created_at' => $data['created_at']
      ];
      $category = new Category();
      $status = $category->create($data_insert);

      $this -> redirect('index.php?mod=category&act=index');
    }
  }
 ?>
