<?php
require_once 'Models/Query.php';
require_once 'Models/Category.php';
require_once 'Models/Post.php';
require_once 'Models/User.php';

function getCategories()
{
  $category = new Category();
  $categories = $category->getCategoriesHomeAdmin();
  return $categories;
}
function getListCategory()
{
  $category = new Category();
  $categories = $category->getlist();
  return $categories;
}

function getUsers()
{
  $user = new User();
  $users = $user->getUsersAdmin();
  return $users;
}

function getPosts()
{
  $post_model = new Post();
  $category_model = new Category();
  $listpost = $post_model->getPostsHomeAdmin();
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
  // $posts = $post->getPostsHomeAdmin();
  return $posts;
}
 ?>
