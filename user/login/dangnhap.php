<?php
    include "../../model/pdo.php";
    include "../../model/taikhoan.php";
    include "../../global.php";
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Đăng nhập</p>

      <form action="dangnhap.php" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="Username" placeholder="Fullname">
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
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Ghi nhớ
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <input type="submit" class="btn btn-primary btn-block" name="dangnhap" value="Đăng nhập">
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links -->

      <p class="mb-1">
        <a href="quenmk.php">Quên mật khẩu</a>
      </p>
      <p class="mb-0">
        <a href="dangky.php" class="text-center">Đăng kí</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<?php
if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    $checkuser = checkuser($Username, $Password);

    if (is_array($checkuser)) {
        $_SESSION['Username'] = $checkuser;
        if ($_SESSION['Username']['Role'] == 1) {
            header("Location: ../../admin/index.php?act=thongke");
            exit(); 
        } elseif ($_SESSION['Username']['Role'] == 2) {
            echo "Tài khoản của bạn đã bị khóa, vui lòng liên hệ đội ngũ admin để biết thêm chi tiết!";
        } else {
            header("Location: ../../index.php");
            exit(); 
        }
    } else {
        $thongbao = "Sai thông tin tài khoản hoặc mật khẩu";
        echo $thongbao;
    }
}
?>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");

    form.addEventListener("submit", function(event) {
      const usernameInput = document.querySelector("[name='Username']");
      const passwordInput = document.querySelector("[name='Password']");

      // Kiểm tra trường Username
      if (usernameInput.value.trim() === "") {
        alert("Vui lòng nhập tên đăng nhập.");
        event.preventDefault(); // Ngăn chặn việc gửi form
        return;
      }

      // Kiểm tra trường Password
      if (passwordInput.value.trim() === "") {
        alert("Vui lòng nhập mật khẩu.");
        event.preventDefault(); // Ngăn chặn việc gửi form
        return;
      }
    });
  });
</script>


<!-- jQuery -->
<script src="../../admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../admin/dist/js/adminlte.min.js"></script>
</body>
</html>
