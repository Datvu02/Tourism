<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
  <meta name="description" content=""/>
  <meta name="author" content=""/>
  <title>Đăng nhập</title>
  <!-- loader-->
  <link href="assets/Admin/css/pace.min.css" rel="stylesheet"/>
  <script src="assets/Admin/js/pace.min.js"></script>
  <!--favicon-->
  <link rel="icon" href="https://khamphadisan.com.vn/wp-content/uploads/2018/09/dia-diem-phuot-tay-bac-khamphadisan-1.jpg" type="image/x-icon">
  <!-- Bootstrap core CSS-->
  <link href="assets/Admin/css/bootstrap.min.css" rel="stylesheet"/>
  <!-- animate CSS-->
  <link href="assets/Admin/css/animate.css" rel="stylesheet" type="text/css"/>
  <!-- Icons CSS-->
  <link href="assets/Admin/css/icons.css" rel="stylesheet" type="text/css"/>
  <!-- Custom Style-->
  <link href="assets/Admin/css/app-style.css" rel="stylesheet"/>

</head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Đăng nhập</h3></div>
                                    <div class="card-body">
                                        <form method="POST" action="index.php?mod=auth&act=HandleLogin">
                                            <div class="form-floating mb-3">
                                              <label for="inputEmail">Email</label>
                                                <input class="form-control" name="email" id="inputEmail" type="email" placeholder="name@example.com" />
                                            </div>
                                            <div class="form-floating mb-3">
                                              <label for="inputPassword">Mật khẩu</label>
                                                <input class="form-control" name="password" id="inputPassword" type="password" placeholder="Password" />
                                            </div>
                                            <div class="form-check mb-3">
                                                <input class="form-check-input" id="inputRememberPassword" type="checkbox" value="" />
                                                <label class="form-check-label" for="inputRememberPassword">Ghi nhớ mật khẩu</label>
                                            </div>
                                            <div class=" align-items-center mt-4 mb-0">
                                                <!-- <a class="small" href="password.html">Forgot Password?</a> -->
                                                <input type="submit" class="btn btn-primary btn-user btn-block" value="Đăng nhập">
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="small"><a href="index.php?mod=auth&act=register">Bạn chưa có tài khoản? Tạo tài khoản.</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
            <div id="layoutAuthentication_footer">
                <footer class="py-4 bg-light" style="margin-top: 101px;">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-center small">
                            <div class="text-muted">Copyright © Blog Tourism</div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
  <script src="assets/Admin/js/jquery.min.js"></script>
  <script src="assets/Admin/js/popper.min.js"></script>
  <script src="assets/Admin/js/bootstrap.min.js"></script>

  <!-- sidebar-menu js -->
  <script src="assets/Admin/js/sidebar-menu.js"></script>

  <!-- Custom scripts -->
  <script src="assets/Admin/js/app-script.js"></script>

</body>
</html>
