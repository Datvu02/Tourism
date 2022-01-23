<?php
  require_once 'Controllers/BaseController.php';
  /**
   *
   */
  class AdminController extends BaseController
  {
    public function __construct()
    {
      if (!$this->checkLogin()) {
        $this->redirect('index.php?mod=auth&act=login');
      }
    }
    protected function checkLogin()
    {
      if (isset($_SESSION['auth'])) {
        return true;
      }else {
        return false;
      }
    }
    protected function checkUsers()
    {
      echo $_POST['email'];die();

      // if (isset($_SESSION['auth'])) {
      //   return true;
      // }else {
      //   return false;
      // }
    }
  }

 ?>
