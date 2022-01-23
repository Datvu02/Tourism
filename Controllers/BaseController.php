<?php
class BaseController
{
  public function view($path, $data = [])
  {
    extract($data);
    require_once( "Views/".$path);
  }
  public function redirect($url)
  {
    header("location:" . $url);
  }
}
 ?>
