 <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Quản lí bình luận</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Trang Chủ</a></li>
              <li class="breadcrumb-item active">Quản lí bình luận</li>
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
                <th style="width: 1%">
                </th>
                <th style="width: 5%">
                    ID_BinhLuan
                </th>
                <th style="width: 10%">
                    NDBinhLuan
                </th>
                <th style="width: 10%">
                    NgayBinhLuan
                </th>
                <th style="width: 10%">
                    Username
                </th>
                <th style="width: 10%">
                    Tên Tin Tức
                </th>
                <th style="width: 10%">
                    Ẩn Bình Luận
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
                    $listbinhluan = loadall_binhluan();
                    foreach ($listbinhluan as $binhluan) {
                        extract($binhluan);
                        echo '<tr>
                                <td></td>
                                <td>'.$ID_BinhLuan.'</td>
                                <td>'.$NDBinhLuan.'</td>
                                <td>'.$NgayBinhLuan.'</td>
                                <td>'.$Username.'</td>
                                <td>'.$TieuDeTin.'</td>
                                <td>'.$TrangThai.'</td>
                                <td class="project-actions text-right">
                                <a class="btn btn-primary btn-sm" href="#">
                                    <i class="fas fa-folder">
                                    </i>
                                    Xem
                                </a>
                                <a class="btn btn-danger btn-sm" href="index.php?act=anbl&ID_BinhLuan='.$ID_BinhLuan.'">
                                    <i class="fas fa-trash">
                                    </i>
                                    Ẩn
                                </a>
                                <a class="btn btn-info btn-sm" href="index.php?act=hienbl&ID_BinhLuan='.$ID_BinhLuan.'">
                                <i class="fas fa-pencil-alt">
                                    </i>
                                    Hiện
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