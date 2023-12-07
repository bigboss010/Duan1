
     <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Quản lí danh mục</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Trang Chủ</a></li>
              <li class="breadcrumb-item active">Quản lí danh mục</li>
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
                <th style="width: 5%">
                </th>
                <th style="width: 10%">
                    ID Danh Mục
                </th>
                <th style="width: 15%">
                    Tên Danh Mục
                </th>
                <th style="width: 15%">
                    Chức năng
                </th>
                <th style="width: 10%"> 
                </th>
                <th style="width: 10%"> 
                </th>
               
            </tr>
        </thead>
        <tbody>
            <!-- <tr> -->
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    echo '<tr>
                            <td></td>
                            <td>'.$ID_DanhMuc.'</td>
                            <td>'.$TenDanhMuc.'</td>
                            <td class="project-actions text-right">
                            <a class="btn btn-primary btn-sm" href="index.php?act=adddm">
                                <i class="fas fa-folder">
                                </i>
                                Xem
                            </a>
                            <a class="btn btn-info btn-sm" href="index.php?act=adddm">
                            <i class="fas fa-pencil-alt">
                            </i>
                                Thêm
                            </a>
                            <a class="btn btn-info btn-sm" href="index.php?act=suadm&ID_DanhMuc='.$ID_DanhMuc.'">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Sửa 
                            </a>
                            <a class="btn btn-danger btn-sm" href="index.php?act=xoadm&ID_DanhMuc='.$ID_DanhMuc.'">
                                <i class="fas fa-trash">
                                </i>
                                Xóa
                            </a>
                            </td>
                            <td></td>
                            <td></td>
                        </tr>';
                    }
                ?>
                
            </tr> 
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