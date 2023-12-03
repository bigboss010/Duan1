
<!-- Main content -->
<section class="content">

<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Quản lí bình luận</h3>

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
                                <td><input type="checkbox" name=""></td>
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
  <!-- /.card-body -->
</div>
<!-- /.card -->

</section>
<!-- /.content -->