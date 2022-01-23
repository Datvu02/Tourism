<?php
  require_once 'Models/Connection.php';

  class Query
  {
    private $conn;

    public function __construct()
    {
      $connection = new Connection();
      // $connection -> password = "";
      $this -> conn = $connection -> connect();
    }
    public function select($table, $columns = '*')
    {
      if ($columns == '*') {
  			$query = "SELECT * FROM " . $table;
  		}elseif (is_array($columns)) {
  			$sub_string = '';
  			foreach ($columns as $i =>$column) {
  				$sub_string .= '`'.$column . '`';

  				if ($i + 1 != count($columns)) {
  					$sub_string .= ',';
  				}
  			}

  			$query = "SELECT " . $sub_string . " FROM " . '`' . $table . '`';
  		}else{
  			exit();
  		}
  		$result = $this->conn->query($query);
  		// Buoc 3
  		// Tạo 1 mảng để chứa dữ liệu
  		$data = array();

  		while($row = $result->fetch_assoc()) {
  			$data[] = $row;
  		};
  		return $data;
    }
    protected function insert($table, $data){
	    $query = "INSERT INTO $table";
	    $string_1 = '';
	    $string_2 = '';

	    $i = 0;

	    foreach ($data as $column => $value){
	        $i++;

	        $string_1 .= $column;
	        if ($i != count($data)){ // Nếu không phải là cột cuối cùng thì mới thêm dấu ,
	            $string_1 .= ',';
	        }

	        $string_2 .= "'" . $value . "'";
	        if ($i != count($data)){ // Nếu không phải là giá trị cuối cùng thì mới thêm dấu ,
	            $string_2 .= ',';
	        }
	    }
	    $string = ' (' . $string_1 . ')' . ' VALUES ' . '(' . $string_2 . ')';
	    $query = $query . $string;


	    $status = $this->conn->query($query);

	    return $status;
	}
  }
 ?>
