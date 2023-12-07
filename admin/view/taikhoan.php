
     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Quản lí tài khoản</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Trang Chủ</a></li>
              <li class="breadcrumb-item active">Quản lí tài khoản</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
        <table class="table table-striped projects">
        <thead>
            <tr>
                <!-- <th style="width: 1%">
                    #
                </th> -->
                <th style="width: 5%">
                </th>
                <th style="width: 8%">
                    ID User
                </th>
                <th style="width: 15%">
                    Tên tài khoản
                </th>
                <th style="width: 10%">
                    Mật khẩu
                </th>
                <th style="width: 10%">
                    Email
                </th>
                <th style="width: 10%">
                    Tel
                </th>
                <th style="width: 10%">
                    Coins
                </th>
                <th style="width: 10%">
                    Role
                </th>
                <th style="width: 20%">
                    Chức năng
                </th>
                <!-- <th style="width: 20%">
                </th> -->
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php 
    foreach ($listtaikhoan as $taikhoan) {
        extract($taikhoan);
        // $suatk="index.php?act=suatk&id=".$ID_User;
        // $xoatk="index.php?act=xoatk&id=".$ID_User;
        echo '<tr>
                <td></td>
                <td>'.$ID_User.'</td>
                <td>'.$Username.'</td>
                <td>'.$Password.'</td>
                <td>'.$Email.'</td>
                <td>'.$Tel.'</td>
                <td>$'.$Coins.'</td>
                <td>'.$Role.'</td>
                <td class="project-actions text-right">
                    <a class="btn btn-info btn-sm" href="index.php?act=khoiphuctk&ID_User='.$ID_User.'">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Khôi phục
                    </a>
                    <a class="btn btn-danger btn-sm" href="index.php?act=khoatk&ID_User='.$ID_User.'">
                        <i class="fas fa-trash">
                        </i>
                        Khóa
                    </a>
                    </td>
            </tr>';
    } 
?>
        </tbody>
    </table>
       </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->