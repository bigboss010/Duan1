
     <!-- Content Wrapper. Contains page content -->
     <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Quản lí nạp coins</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Trang Chủ</a></li>
              <li class="breadcrumb-item active">Quản lí nạp coins</li>
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
                    ID Nạp Coins
                </th>
                <th style="width: 10%">
                    ID User
                </th>
                <th style="width: 10%"> 
                    Số Tiền Nạp
                </th>
                <th style="width: 10%">
                    Coins Nhận
                </th>
                <th style="width: 10%">
                    PTTT
                </th>
                <!-- <th style="width: 20%">
                </th> -->
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php 
    foreach ($listnapcoins as $napcoins) {
        extract($napcoins);
        echo '<tr>
                <td></td>
                <td>'.$ID_NapCoins.'</td>
                <td>'.$ID_User.'</td>
                <td>'.$SoTien.'</td>
                <td>'.$Coins.'</td>
                <td>'.$PTTT.'</td>
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