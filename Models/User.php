<?php
  require_once 'Models/Query.php';
  class User extends Query
  {
    public $table = 'users';
    public function CheckLogin($email, $password)
    {
      $users = $this->WHERE($this->table, ['email'=>$email, 'password'=>$password]);
      if (count($users) > 0) {

        return true;
      }else {
        return false;
      }
    }
    public function getUser($email, $password)
    {
      $users = $this->WHERE($this->table, ['email'=>$email, 'password'=>$password]);
      $user = $users[0];
      $_SESSION['auth'] = [
        'id' => $user['id'],
        'name' => $user['name'],
        'email' => $user['email']
      ];
        return $user;
    }
    public function checkRegister($email)
    {
      $userRegister = $this -> where($this -> table,
      ['email' => $email]);
      if ($userRegister != '') {
        $_SESSION['error']['email'] = 'vui lòng nhập email';
      }
      // var_dump($userRegister);die();
      if(count($userRegister)){
        $_SESSION['error']['email'] = 'email đã tồn tại';
        return false;
      }else {
        return true;
      }

    }

    public function getList()
    {
      $user_register = $this -> select ($this -> table, ['id', 'name', 'email', 'password', 'avatar', 'created_at']);
      return $user_register;
    }

    public function register($data)
    {
      $status = $this -> insert($this -> table, $data);
      return $status;
    }
    public function find($id)
    {
      return $this->GetID($this->table, $id);
      // var_dump( $categories);die();
    }

    public function getUsersAdmin(){  //bài viết ngẫu nhiên
            $randUsers = "SELECT * FROM users ORDER BY RAND() LIMIT 1,5;";

            $result = $this->conn->query($randUsers);

            $randUsers = array();

             while($row = $result->fetch_assoc()) {
                $randUsers[] = $row;
            }
            return $randUsers;
        }
  }
 ?>
