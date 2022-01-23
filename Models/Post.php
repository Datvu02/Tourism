<?php
  require_once 'Models/Query.php';
  /**
   *
   */
  class Post extends Query
  {
    public $table = 'posts';

    public function getList()
    {
      // echo "Get list    ";
      $posts = $this -> select($this -> table, ['id', 'title', 'description', 'thumbnail','content','category_id','created_at']);
      return $posts;
    }
      public function create($data)
      {
        $status = $this->insert($this->table, $data);
        return $status;
      }
  }

  ?>
