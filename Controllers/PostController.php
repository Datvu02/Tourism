<?php
require_once 'Models/Post.php';
require_once 'Controllers/BaseController.php';
  class PostController  extends BaseController
  {
    public function index()
    {
      // echo "CategoryController-index";
      $Post = new Post();
      $posts = $Post -> getlist();
      $this -> view('posts/posts_list.php', ['posts' => $posts]);
      // require_once 'Views/Posts/posts_list.php';
    }
    public function create()
    {
      $this -> view('Posts/create.php');
    }

    public function store()
    {
      // require_once 'Models/Category.php';
      $data = $_POST;
      $data_insert = [
        'id' => $data['id'],
        'title' => $data['title'],
        'description' => $data['description'],
        // 'thumbnail' => $_FILES['thumbnail']["name"],
        'content' => $data['content'],
        // 'category_id' => $data['category_id'],
        'created_at' => $data['created_at']
      ];
      $post = new Post();
      $status = $post->create($data_insert);

      $this -> redirect('index.php?mod=post&act=index');
    }
  }
 ?>
