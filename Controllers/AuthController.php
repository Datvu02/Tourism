<?php
require_once 'Controllers/BaseController.php';
require_once 'Models/User.php';


class AuthController extends BaseController
{

  public function login()
  {
    $this->view('Admin/auth/login.php');
  }
  public function handleLogin()
  {
    $userModel = new User();
    if ($userModel->CheckLogin($_POST['email'],$_POST['password'])) {
      $user = $userModel->getUser($_POST['email'],$_POST['password']);
      // var_dump($user);die;
      $this->view('Admin/Home/index.php',['user' => $user]);

    }else {
      $_SESSION['error']['loginFailed'] = 'Đăng nhập thất bại';
      $this->redirect('index.php?mod=auth&act=login');
    }
  }
  public function register()
  {
    $this -> view('Admin/auth/register.php');
  }

  public function handleRegister()
  {
    $user_register = new User();
    if($user_register -> checkRegister($_POST['email'])){
      $data = $_POST;
      if ($data['password'] != '') {
        $data_insert = [
          'name' => $data['name'],
          'email' => $data['email'],
          'password' => $data['password']
        ];

        $user = new User();
        $status = $user -> register($data_insert);
        session_destroy();
        $this -> redirect('index.php?mod=auth&act=login');
      }else {
        $_SESSION['error']['password'] = 'vui lòng nhập password';
        $this -> redirect('index.php?mod=auth&act=register');
      }
    }else{
      $this -> redirect('index.php?mod=auth&act=register');
    }
  }

  public function logout()
  {
    unset($_SESSION['auth']);
    $this->redirect('index.php?mod=auth&act=login');
  }
}
 ?>
