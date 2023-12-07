<?php
   
     include "../../model/pdo.php";
     include "../../model/taikhoan.php";
    
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
      <p class="login-box-msg">Đổi mật khẩu</p>

<form action="doimk.php" method="post">
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="OldPassword" placeholder="Mật khẩu cũ">
          <div class="input-group-append">
            <div class="input-group-text">
            <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="NewPassword" placeholder="Mật khẩu mới">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="ConfirmPassword" placeholder="Nhập lại mật khẩu mới">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <!-- <input type="checkbox" id="remember">
              <label for="remember">
                Ghi nhớ
              </label> -->
              <a href="../../index.php?act=trangcanhan">Quay lại</a>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <input type="submit" class="btn btn-primary btn-block" name="doimk" value="Đổi mới">
          </div>
          <!-- /.col -->
        </div>
      </form>
<!-- /.social-auth-links -->

<p class="mb-1">
       
      </p>
      <!-- <p class="mb-0">
        <a href="dangky.php" class="text-center">Đăng kí</a>
      </p> -->
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<?php
// Kiểm tra xem form đã được submit chưa
if (isset($_POST['doimk'])) {
    // Lấy dữ liệu từ form
    $oldPassword = $_POST['OldPassword'];
    $newPassword = $_POST['NewPassword'];
    $confirmPassword = $_POST['ConfirmPassword'];
    $ID_User = $_SESSION['Username']['ID_User'];
    //Kiểm tra xem các trường có được nhập đầy đủ không
    if (empty($oldPassword) || empty($newPassword) || empty($confirmPassword)) {
        echo "Vui lòng điền đầy đủ thông tin.";
    } else {
        // Kiểm tra mật khẩu cũ có khớp với mật khẩu lưu trong session không
        if ($oldPassword === $_SESSION['Username']['Password']) {
            // Kiểm tra mật khẩu mới và mật khẩu xác nhận có khớp nhau không
            if ($newPassword === $confirmPassword) {
                // Thực hiện đổi mật khẩu
                update_password($newPassword,$ID_User);
                echo "Đổi mật khẩu thành công, bạn sẽ vẫn tiếp tục phiên đăng nhập của mình khi quay lại.";
            } else {
                echo "Mật khẩu mới và xác nhận mật khẩu không khớp.";
            }
        } else {
            echo "Mật khẩu cũ không đúng.";
        }
    }
}
?>

<!-- jQuery -->
<script src="../../admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../admin/dist/js/adminlte.min.js"></script>
</body>
</html>
