<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Admin</title>
  <!-- loader-->
  <link href="assets/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="https://khamphadisan.com.vn/wp-content/uploads/2018/09/dia-diem-phuot-tay-bac-khamphadisan-1.jpg" type="image/x-icon">
  <!-- Vector CSS -->
  <link href="assets/Admin/plugins/vectormap/jquery-jvectormap-2.0.2.css" rel="stylesheet"/>
  <!-- simplebar CSS-->
  <link href="assets/Admin/plugins/simplebar/css/simplebar.css" rel="stylesheet"/>
  <!-- Bootstrap core CSS-->
  <link href="assets/Admin/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/Admin/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/Admin/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Sidebar CSS-->
  <link href="assets/Admin/css/sidebar-menu.css" rel="stylesheet"/>
  <!-- Custom Style-->
  <link href="assets/Admin/css/app-style.css" rel="stylesheet"/>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300;400&family=Love+Light&display=swap" rel="stylesheet">

</head>

<body class="bg-theme bg-theme1">

<!-- Start wrapper-->
 <div id="wrapper">

  <!--Start sidebar-wrapper-->
   <div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true">
     <div class="brand-logo">
      <a href="index.php?mod=home&act=index">
       <h5 class="logo-text" style="font-family: 'Dongle', sans-serif; font-family: 'Love Light', cursive; font-family: 'Smooch', cursive;"> <a href="index.php?mod=home&act=index">Tourism</a> </h5>
     </a>
   </div>
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">Bảng điều khiển</li>
      <li>
        <a href="index.php?mod=home&act=index">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Trang chủ</span>
        </a>
      </li>

      <li>
        <a href="index.php?mod=category&act=index">
          <i class="zmdi zmdi-grid"></i> <span>Danh Mục</span>
        </a>
      </li>

      <li>
        <a href="index.php?mod=post&act=index">
          <i class="zmdi zmdi-grid"></i> <span>Bài viết Blog</span>
        </a>
      </li>

      <li>
        <a href="index.php?mod=auth&act=handleLogin" target="_blank">
          <i class="zmdi zmdi-lock"></i> <span>Đăng nhập</span>
        </a>
      </li>

       <li>
        <a href="index.php?mod=auth&act=handleRegister" target="_blank">
          <i class="zmdi zmdi-account-circle"></i> <span>Tạo tài khoản</span>
        </a>
      </li>

    </ul>

   </div>
   <!--End sidebar-wrapper-->

<!--Start topbar header-->
<header class="topbar-nav">
 <nav class="navbar navbar-expand fixed-top">
  <ul class="navbar-nav mr-auto align-items-center">
    <li class="nav-item">
      <a class="nav-link toggle-menu" href="javascript:void();">
       <i class="icon-menu menu-icon"></i>
     </a>
    </li>
    <li style="padding: 10px;box-shadow: 0 16px 38px -12px rgba(0,0,0,.56), 0 4px 25px 0 rgba(0,0,0,.12), 0 8px 10px -5px rgba(0,0,0,.2);">
     <a href="index.php?mod=reader&act=index" target="_blank">
       <i class="zmdi zmdi-view-dashboard" ></i> <span>Trang chính</span>
     </a>
   </li>
  </ul>

  <ul class="navbar-nav align-items-center right-nav-link">
    <li class="nav-item language">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret waves-effect" data-toggle="dropdown" href="javascript:void();"><i class="fa fa-flag"></i></a>
      <ul class="dropdown-menu dropdown-menu-right">
          <li class="dropdown-item"> <i class="flag-icon flag-icon-gb mr-2"></i> English</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-fr mr-2"></i> French</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-cn mr-2"></i> Chinese</li>
          <li class="dropdown-item"> <i class="flag-icon flag-icon-de mr-2"></i> German</li>
        </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown" href="#">
        <span class="user-profile"><img src="https://via.placeholder.com/110x110" class="img-circle" alt="user avatar"></span>
      </a>
      <ul class="dropdown-menu dropdown-menu-right">
       <li class="dropdown-item user-details">
        <a href="javaScript:void();">
           <div class="media">
             <div class="avatar"><img class="align-self-start mr-3"src="https://via.placeholder.com/110x110" alt="user avatar"></div>
            <div class="media-body">
            <h6 class="mt-2 user-title"><?= $_SESSION['auth']['name'] ?></h6>
            <p class="user-subtitle"><?= $_SESSION['auth']['email'] ?></p>
            </div>
           </div>
          </a>
        </li>
        <li class="dropdown-item"><i class="icon-power mr-2"></i> <a href="index.php?mod=auth&act=logout">Logout</a> </li>
      </ul>
    </li>
  </ul>
</nav>
</header>
<!--End topbar header-->

 <div class="clearfix"></div>

   <div class="content-wrapper">
     <div class="container-fluid">
