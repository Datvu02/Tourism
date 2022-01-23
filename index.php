<?php

  //index.php?mod=category&act=index
  //index.php?mod=post&act=index
  $mod = isset($_GET['mod']) ? $_GET['mod'] : 'home';
  $act = isset($_GET['act']) ? $_GET['act'] : 'index';

  $class_name = ucfirst($mod) . "Controller";
  $path = __DIR__ . "/Controllers/" . $class_name . ".php";
  if (!file_exists($path)) {
    require_once 'Views/Partials/home.php';
  }
  require_once $path;
  $Controller_obj = new $class_name();
  // var_dump($Controller_obj);
  $Controller_obj->$act();
 ?>
