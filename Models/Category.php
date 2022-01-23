<?php
  require_once 'Models/Query.php';
  /**
   *
   */
  class Category extends Query
  {
    public $table = 'categories';

    public function getList()
    {
      // echo "Get list    ";
      $categories = $this->select($this->table, ['id', 'name', 'description', 'thumbnail','parent_id','created_at']);
      return $categories;
    }
    public function create($data)
    {
      $status = $this->insert($this->table, $data);
      return $status;
    }
    // function uploadFile($input_name, $target_dir, $allowtypes, $max_size, $override)
    // {
    //   $upload_status = true;
    //   $target_file = $target_dir."/" . basename($_FILES[$input_name]["name"]);
    //   $errors = array();
    //
    //   $types = "";
    //
    //   //duyet danh sach cac dinh dang file cho phep, noi thanh 1 chuoi (de cho phep cac duoi file ntn thi dk upload)
    //   if(is_array($allowtypes)){
    //     foreach ($allowtypes as $key => $type) {
    //       $types .= $type.",";
    //     }
    //   }
    //
    //   $types = trim($types,',');
    //
    //   //kiem tra xem $_FILES[$input_name] co dk gui len hay khong
    //   if(!isset($_FILES[$input_name])){
    //     $errors[] = "không có dữ liệu file";
    //     $upload_status = false;
    //
    //   }
    //
    //   if ($_FILES[$input_name]['error']!=0) {
    //     $errors[] = "Dữ liệu upload bị lỗi";
    //     $upload_status = false;
    //   }
    //
    //   $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    //
    //   if(!in_array($imageFileType, $allowtypes )){
    //     $errors[] = "Chỉ được upload các định dạng file ".$types;
    //     $upload_status = false;
    //   }
    //
    //   if($_FILES[$input_name]["size"] > $max_size*1024*1024){
    //     $errors[] = "Không dược upload ảnh lớn hơn $max_size (MB).";
    //     $upload_status = false;
    //   }
    //
    //   if(file_exists($target_file) && $override == false){
    //     $errors[] = "Tên file đã tồn tại trên server, không được ghi đè";
    //     $upload_status = false;
    //   }
    //   if($upload_status){
    //     if(move_uploaded_file($_FILES['thumbnail']["tmp_name"], SITE_ROOT. '/' . $target_file)){
    //       return array(true, $target_file);
    //       $errors[] = "Up file thành công";
    //     }
    //     else{
    //       $errors[] = "Có lỗi xảy ra khi upload file. Vui lòng kiểm tra lại";
    //       return array(false, $errors);
    //     }
    //   }
    //     else{
    //       return array(false, $errors);
    //     }
    //
    //   }
  }


?>
