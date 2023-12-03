<!-- Main content -->
<style>
    .card-title{ 
        text-align: center;
        width: 100%;
    }
</style>
<section class="content">

<!-- Default box -->
<div class="card">
  <div class="card-header">
    <h1  class="card-title"></h1>

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
    <table class="table table-border projects">
        <thead>
            <tr>
                <!-- <th style="width: 1%">
                    #
                </th> -->
                <th style="width: 20%">
                </th>
                <th style="width: 10%">
                    ID Tin Tức
                </th>
                <th style="width: 10%">
                    Tên thành viên
                </th>
                <th style="width: 10%">
                    Tên tin tức
                </th>
                <th style="width: 10%">
                    Ảnh
                </th>
                <th style="width: 10%">
                    Trạng thái
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
                    $hinh =  $img_path.$HinhAnhTin;
                    echo '
                    <tr>
                    <td></td>
                    <td>'.$ID_TinTuc.'</td>    
                    <td><a>Phạm Quốc Khanh</a></td>    
                    <td>'.$TieuDeTin.'</td>
                    <td><img class="w-100" src="'.$hinh.'" height="100px" alt=""></td>
                    <td><p >'.$TrangThai.'</p></td>
                    <td class="project-actions text-right">
                    <a class="btn btn-primary btn-sm" href="#">
                        <i class="fas fa-folder">
                        </i>
                        Xem
                    </a>
                    <a class="btn btn-info btn-sm" href="index.php?act=duyettin&ID_TinTuc='.$ID_TinTuc.'">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Duyệt
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
  <!-- /.card-body -->
</div>
<!-- /.card -->

</section>
<!-- /.content -->