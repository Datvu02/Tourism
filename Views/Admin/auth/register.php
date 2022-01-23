<?php
  require_once 'Views/Admin/Partials/header.php';
 ?>
 <div id="layoutAuthentication">
     <div id="layoutAuthentication_content">
         <main>
                 <div class="row justify-content-center">
                     <div class="col-lg-7">
                         <div class="card shadow-lg border-0 rounded-lg mt-3">
                             <div class="card-header"><h3 class="text-center font-weight-light my-4">Tạo tài khoản</h3></div>
                             <div class="card-body">
                                 <form action="index.php?mod=auth&act=handleRegister" method="POST" role="form" enctype="multipart/form-data">
                                     <div class="form-floating mb-3">
                                       <label for="inputEmail">Tên</label>
                                         <input class="form-control" name="name" id="inputName" type="" />
                                     </div>
                                     <div class="form-floating mb-3">
                                       <label for="inputEmail">Email</label>
                                         <input class="form-control" name="email" id="inputEmail" type="email" placeholder="name@example.com" />
                                     </div>
                                        <div class="form-floating mb-3">
                                          <label for="inputPassword" >Mật Khẩu</label>
                                            <input class="form-control" name="password" id="inputPassword" type="password" placeholder="Nhập mật khẩu" />
                                         </div>
                                     <div class="mt-4 mb-0">
                                         <input type="submit" class="btn btn-primary btn-user btn-block" value="Tạo mới">
                                     </div>
                                 </form>
                            </div>
                            <div class="card-footer text-center py-3">
                                 <div class="small"><a href="index.php?mod=auth&act=login">Bạn đã có tài khoản? Đi tới đăng nhập</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
     </div>
<?php
    require_once 'Views/Admin/Partials/footer.php';
?>
