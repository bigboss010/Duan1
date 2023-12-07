
     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Quản lí lịch sử mua gói</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Trang Chủ</a></li>
              <li class="breadcrumb-item active">Quản lí lịch sử mua gói</li>
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
                <th style="width: 3%">
                </th>
                <th style="width: 10%">
                    ID Mua Gói
                </th>
                <th style="width: 10%">
                    Người Mua
                </th>
                <th style="width: 10%">
                    Gói Mua
                </th>
                <th style="width: 10%">
                    Giá Gói
                </th>
                <th style="width: 10%">
                    Ngày Mua
                </th>
                <th style="width: 10%">
                    
                </th>
                <!-- <th style="width: 20%">
                </th> -->
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php 
    foreach ($listmuahang as $muahang) {
        extract($muahang);
        echo '<tr>
                <td></td>
                <td>'.$ID_MuaHang.'</td>
                <td>'.$Username.'</td>
                <td>'.$TenGoi.'</td>
                <td>$'.$Gia.'</td>
                <td>'.$NgayMua.'</td>
                <td></td>
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