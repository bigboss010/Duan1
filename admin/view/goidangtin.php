
     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Quản lí gói đăng tin</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Trang Chủ</a></li>
              <li class="breadcrumb-item active">Quản lí gói đăng tin</li>
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
                <th style="width: 10%">
                    ID Gói đăng tin
                </th>
                <th style="width: 10%">
                    Tên gói
                </th>
                <th style="width: 10%">
                    Chu Kỳ
                </th>
                <th style="width: 10%">
                    Giá
                </th>
                <th style="width: 10%">
                    Mô tả
                </th>
                <th style="width: 10%">
                    Mua gói
                </th>
                <th style="width: 20%">
                    Chức năng
                </th>
                <!-- <th style="width: 20%">
                </th> -->
            </tr>
        </thead>
        <tbody>
                <?php
                foreach ($listgdt as $gdt){
                    extract($gdt);
                    echo '<tr>
                    <td></td>        
                    <td>'.$ID_GoiDangTin.'</td>        
                    <td>'.$TenGoi.'</td>
                    <td>'.$ChuKy.'</td>
                    <td>'.$Gia.'</td>
                    <td>'.$Mota.'</td>
                    <td><p >'.$MuaGoi.'</p></td>
                    <td class="project-actions text-right">
                    <a class="btn btn-primary btn-sm" href="http://localhost/Duan1/index.php?act=goidangtin">
                        <i class="fas fa-folder">
                        </i>
                        Xem
                    </a>
                    <a class="btn btn-info btn-sm" href="#">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Sửa
                    </a>
                    <a class="btn btn-danger btn-sm" href="#">
                        <i class="fas fa-trash">
                        </i>
                        Xóa
                    </a>
                    </td>
                     </tr> ';
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