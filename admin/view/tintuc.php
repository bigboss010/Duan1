
     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Quản lí tin tức</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Trang Chủ</a></li>
              <li class="breadcrumb-item active">Quản lí tin tức</li>
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
        <table class="table table-border projects">
        <thead>
            <tr>
                <!-- <th style="width: 1%">
                    #
                </th> -->
                <th style="width: 3%">
                </th>
                <th style="width: 5%">
                    ID Tin Tức
                </th>
                <th style="width: 10%">
                    Tên người đăng
                </th>
                <th style="width: 10%">
                    Tiêu đề tin
                </th>
                <th style="width: 10%">
                    Ảnh
                </th>
                <th style="width: 10%">
                    Trạng thái
                </th>
                <th style="width: 10%">
                    Khách hàng xóa
                </th>
                <th style="width: 19%">
                    Chức năng
                </th>
                <!-- <th style="width: 20%">
                </th> -->
            </tr>
        </thead>
        <tbody>
                <?php
                $dstt = loadall_tintucadmin();
                foreach ($dstt as $tt){
                    extract($tt);
                    echo '
                    <tr>
                    <td></td>
                    <td>'.$ID_TinTuc.'</td>    
                    <td>'.$Username.'</td>    
                    <td>'.$TieuDeTin.'</td>
                    <td><img class="w-100" src="../upload/'.$HinhAnhTin.'" height="100px" alt=""></td>
                    <td><p >'.$TrangThai.'</p></td>
                    <td><p >'.$XoaMem.'</p></td>
                    <td class="project-actions text-right">
                    <a class="btn btn-primary btn-sm" href="../index.php?act=chitiettintuc&ID_TinTuc='.$ID_TinTuc.'">
                        <i class="fas fa-folder">
                        </i>
                        Xem
                    </a>
                    <a class="btn btn-info btn-sm" href="index.php?act=duyettin&ID_TinTuc='.$ID_TinTuc.'">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Duyệt
                    </a>
                    <a class="btn btn-info btn-sm" href="index.php?act=khoiphuctt&ID_TinTuc='.$ID_TinTuc.'">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Khôi phục
                    </a>
                    <a class="btn btn-danger btn-sm" href="index.php?act=antin&ID_TinTuc='.$ID_TinTuc.'">
                        <i class="fas fa-trash">
                        </i>
                        Ẩn
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