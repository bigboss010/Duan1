<div class="container">
        <div class="breadcrumb-area">
            <div class="row justify-content-center">
                <div class="col-md-12">
					<h1 class="theme-breacrumb-title">Phim chiếu rạp</h1>
				</div>
            </div>
        </div>
    </div>
    
    <!-- blog-area start -->
    <div class="blog-area pd-top-100 pd-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="media-post-wrap pd-bottom-80 mb-0">
                        <?php
                         $i=0;
                         foreach ($dstt as $tt){
                             extract($tt);
                             $hinh =  $img_path.$HinhAnhTin;
                             echo '
                             <div class="thumb mb-4">
                             <img class="w-100" src="'.$hinh.'" alt="img">
                         </div>
                         <div class="media-body pt-1 ms-0">
                             <a class="tag top-right tag-purple" href="#">'.$TenDanhMuc.'</a>
                             <h1><a href="index.php?act=chitiettintuc&ID_TinTuc='.$ID_TinTuc.'">'.$TieuDeTin.'</a></h1>
                         </div>
                         <div class="meta d-flex">
                             <div class="author">
                                 <div class="thumb">
                                     <img src="upload/'.$AnhDaiDien.'" alt="img">
                                 </div>
                                 <a href="#">'.$Username.'</a>
                             </div>
                             <div class="date">
                                 <i class="fa fa-clock-o"></i>
                                     '.$NgayDangTin.'						
                             </div>
                         </div>
                         <a class="btn btn-main mt-3" href="index.php?act=chitiettintuc&ID_TinTuc='.$ID_TinTuc.'">Xem chi tiết</a><br>
                                ';
                             }
                        ?>
                    </div><br>
                </div>
                <?php include "boxright2.php";?>
            </div>
        </div>
    </div>
    <!-- blog-area end -->