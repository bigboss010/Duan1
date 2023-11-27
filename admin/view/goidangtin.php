<!-- Main content -->
<section class="content">

<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Quản lí tin tức</h3>

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
                <!-- <th style="width: 20%">
                </th> -->
            </tr>
        </thead>
        <tbody>
                <?php
                foreach ($listgdt as $gdt){
                    extract($gdt);
                    echo '<tr>
                    <td> #</td>
                    <td>'.$ID_GoiDangTin.'</td>        
                    <td>'.$TenGoi.'</td>
                    <td>'.$ChuKy.'</td>
                    <td>'.$Gia.'</td>
                    <td>'.$Mota.'</td>
                    <td><p >'.$MuaGoi.'</p></td>
                    <td class="project-actions text-right">
                    <a class="btn btn-primary btn-sm" href="#">
                        <i class="fas fa-folder">
                        </i>
                        View
                    </a>
                    <a class="btn btn-info btn-sm" href="#">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Update
                    </a>
                    <a class="btn btn-danger btn-sm" href="#">
                        <i class="fas fa-trash">
                        </i>
                        Delete
                    </a>
                    </td>
                     </tr> ';
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