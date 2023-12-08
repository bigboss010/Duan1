<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
         #e{
          background-color: #FF9999;
        }
    </style>
</head>
<body>
  <div class="container">
        <div class="breadcrumb-area">
            <div class="row justify-content-center">
                <div class="col-md-12">
                <?php
if (!empty($tktintuc)) {
    // Hiển thị tiêu đề tìm kiếm một lần
    ?>
    <h1 class="theme-breacrumb-title">Tìm kiếm "<?= $kyw ?>"</h1><br>
    <div class="row">
                    <?php
                        // Vòng lặp để hiển thị chi tiết từng tin tức
                        foreach ($tktintuc as $tt) {
                            extract($tt);
                            $hinh =  $img_path . $HinhAnhTin;
                            echo '<div class="col-lg-4 col-md-6">
                                <div class="top-post-wrap">
                                    <div class="thumb">
                                        <img src="' . $hinh . '" alt="img">
                                    </div>
                                    <div class="top-post-details top-post-details-2">
                                        <a class="tag top-right tag-purple" href="#">' . $TenDanhMuc . '</a>
                                        <h4><a href="index.php?act=chitiettintuc&ID_TinTuc=' . $ID_TinTuc . '">' . $TieuDeTin . '</a></h4>
                                        <div class="meta mt-2">
                                            <div class="user">
                                                <div class="thumb">
                                                    <img src="upload/' . $AnhDaiDien . '" alt="img">
                                                </div>
                                                <a href="#">' . $Username . '</a>
                                            </div>
                                            <div class="date">
                                                <i class="fa fa-clock-o"></i>
                                                ' . $NgayDangTin . '						
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>';
                        }
                        ?>
                    </div>
                <?php
                } else {
                    ?>
                    <h1 class="theme-breacrumb-title">Không tìm thấy "<?= $kyw ?>"</h1><br>
                <?php
                }
                ?>

            
				        </div>
             </div><br>       
    
          </div>
    </div>
</body>
</html>



 
         