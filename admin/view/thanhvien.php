<!-- Main content -->
<section class="content">

<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Quản lí tài khoản</h3>

    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
        <i class="fas fa-minus"></i>
      </button>
      <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
        <i class="fas fa-times"></i>
      </button>
    </div>
  </div>
  <div class="card-body p-0">
    <table class="table table-striped projects">
        <thead>
            <tr>
                <!-- <th style="width: 1%">
                    #
                </th> -->
                <th style="width: 20%">
                </th>
                <th style="width: 10%">
                    ID Mua Gói
                </th>
                <th style="width: 10%">
                    ID User
                </th>
                <th style="width: 10%">
                    Ngày Mua
                </th>
                <th style="width: 10%">
                    Gói Mua
                </th>
                <!-- <th style="width: 20%">
                </th> -->
            </tr>
        </thead>
        <tbody>
            <tr>
            <?php 
    foreach ($listthanhvien as $thanhvien) {
        extract($thanhvien);
        echo '<tr>
                <td><input type="checkbox" name=""></td>
                <td>'.$ID_ThanhVien.'</td>
                <td>'.$ID_User.'</td>
                <td>'.$NgayGiaNhap.'</td>
                <td>'.$ID_GoiDangTin.'</td>
                <td class="project-actions text-right">
                    <a class="btn btn-danger btn-sm" href="#">
                        <i class="fas fa-trash">
                        </i>
                        Xóa
                    </a>
                    </td>
            </tr>';
    } 
?>
        </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>
<!-- /.card -->

</section>
<!-- /.content -->