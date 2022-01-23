<?php
require_once 'Controllers/BaseController.php';
require_once 'Models/Post.php';
require_once 'Models/User.php';
require_once 'Models/Category.php';
/**
 *
 */
class ReaderController extends BaseController
{
  public function index()
  {
    // $posts = new Post;
    // $post = $posts->randPosts();
    //
    // $categories = new Category;
    // $category = $categories->randCategories();

    $post_model = new Post();
    $category_model = new Category();
    $listcategory = $category_model->randCategories();
    $listpost = $post_model->randPosts();
    $user_model = new User();
    $posts = array();
    foreach ($listpost as $post) {
      $id = $post['category_id'];
      $id_user = $post['user_id'];
      $category = $category_model->find($id);
      $user = $user_model->find($id_user);
      $post['category_name'] = $category['name'];
      $post['user_name'] = $user['name'];
      $posts[] = $post;
    }

    // $this->view('Readers/Home/index.php', ['categories' => $category,'posts'=> $post,]);
    require_once 'Views/Readers/Home/index.php';
  }
}

 ?>
