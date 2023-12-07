<?php
    include "../../model/pdo.php";
    include "../../model/taikhoan.php";
    include "../../model/coins.php";
    include "../../global.php";
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../admin/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../admin/dist/css/adminlte.min.css">

</head>
<body class="hold-transition register-page">
<div class="register-box">
<div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Đăng kí tài khoản</p>

      <form action="dangky.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="Username" placeholder="Full name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="Email" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="Tel" placeholder="Tel">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="Password" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="Password" placeholder="Retype password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree">
              <label for="agreeTerms">
               Tôi đồng ý với <a href="#">Điều khoản</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
           <input type="submit" class="btn btn-primary btn-block" name="dangky" value="Đăng ký">
          </div>
          <!-- /.col -->
        </div>
      </form>
      <?php 
      if(isset($_POST['dangky']) && ($_POST['dangky']!="")){
        $Username = $_POST['Username'];
        $Password = $_POST['Password'];
        $Email = $_POST['Email'];
        $Tel = $_POST['Tel'];
        // $Role = $_POST['Role'];
        insert_taikhoan($Username,$Password,$Email,$Tel);
        $thongbao="Đăng ký thành công mời ";
        }
        if(isset($thongbao) && ($thongbao != "")) {
            echo $thongbao;
            $listtaikhoan = loadall_taikhoanID();
            foreach($listtaikhoan as $tk){
              extract($tk);
              $AnhDaiDien = "avatar.jpg";
              insert_anhdaidien($MAXID_User,$AnhDaiDien);
            }
        }
        ?>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");

    form.addEventListener("submit", function(event) {
      const usernameInput = document.querySelector("[name='Username']");
      const emailInput = document.querySelector("[name='Email']");
      const telInput = document.querySelector("[name='Tel']");
      const passwordInput = document.querySelector("[name='Password']");
      const retypePasswordInput = document.querySelector("[name='RetypePassword']");
      const agreeTermsCheckbox = document.querySelector("[name='terms']");

      // Kiểm tra tất cả các trường không được để trống
      if (
        usernameInput.value.trim() === "" ||
        emailInput.value.trim() === "" ||
        telInput.value.trim() === "" ||
        passwordInput.value.trim() === "" ||
        retypePasswordInput.value.trim() === ""
      ) {
        alert("Vui lòng điền đầy đủ thông tin.");
        event.preventDefault(); // Ngăn chặn việc gửi form
        return;
      }

      // Kiểm tra độ dài và ký tự của Username
      const usernameRegex = /^\w{1,12}$/;
      if (!usernameRegex.test(usernameInput.value.trim())) {
        alert("Tên đăng nhập tối đa 12 ký tự, không cách và không trùng.");
        event.preventDefault(); // Ngăn chặn việc gửi form
        return;
      }

      // Kiểm tra độ dài của Password
      if (passwordInput.value.trim().length < 8) {
        alert("Mật khẩu phải có ít nhất 8 ký tự.");
        event.preventDefault(); // Ngăn chặn việc gửi form
        return;
      }

      // Kiểm tra trường Email không trùng
      const emailRegex = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]+$/;
      if (!emailRegex.test(emailInput.value.trim())) {
        alert("Vui lòng nhập một địa chỉ email hợp lệ.");
        event.preventDefault(); // Ngăn chặn việc gửi form
        return;
      }

      // Kiểm tra trường Số điện thoại không trùng
      // (Lưu ý: Cần một cơ chế kiểm tra trùng lặp bên server)
      const telRegex = /^\d+$/;
      if (!telRegex.test(telInput.value.trim())) {
        alert("Vui lòng nhập một số điện thoại hợp lệ.");
        event.preventDefault(); // Ngăn chặn việc gửi form
        return;
      }

      // Kiểm tra trường Password và Retype Password khớp nhau
      if (retypePasswordInput.value.trim() !== passwordInput.value.trim()) {
        alert("Mật khẩu nhập lại không khớp.");
        event.preventDefault(); // Ngăn chặn việc gửi form
        return;
      }

      // Kiểm tra checkbox Điều khoản
      if (!agreeTermsCheckbox.checked) {
        alert("Vui lòng đồng ý với Điều khoản.");
        event.preventDefault(); // Ngăn chặn việc gửi form
        return;
      }

      // Nếu mọi thứ đều hợp lệ, form sẽ được gửi đi như thường lệ
    });
  });
</script>

      <!-- <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div> -->

      <a href="dangnhap.php" class="text-center">Đăng nhập</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
  <!-- jQuery -->
<script src="../../admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../admin/dist/js/adminlte.min.js"></script>
  </body>
</html>