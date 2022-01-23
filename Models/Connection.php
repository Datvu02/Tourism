<?php
  class Connection
  {
    // var $conn;
    private $servername = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbname = 'blogs';

    public function connect()
    {
      $conn = new mysqli($this -> servername, $this -> username, $this -> password, $this -> dbname);

      if ($conn->connect_error) {
        echo"Connection failed: ".$conn->connect_error;
        exit();
      }
      return $conn;
    }
  }

 ?>
