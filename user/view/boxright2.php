<div class="col-lg-4">
                    <div class="side-area">
                        <div class="widget widget_search">
                            <h5 class="widget-title">
                                Tìm kiếm
                            </h5>
                            <div class="subscribe-inner">
                                <input type="text">
                                <button class="btn">Tìm kiếm</button>
                            </div>
                        </div>
                        <div class="widget widget_list mt-5">
                            <div class="section-title pb-0">
                                <h4 class="widget-title">Danh mục tin tức</h4>
                                <ul class="list-inner">
                                    <?php
                                        foreach($dsdm as $dm){
                                            extract($dm);
                                            $linkdm="index.php?act=baiviet&ID_DanhMuc=".$ID_DanhMuc;
                                            echo '<li><a href="'.$linkdm.'">'.$TenDanhMuc.' </a></li>';
                                        }
                                    ?>
                                
                                </ul>
                        </div>
                        <div class="widget widget_list mt-5">
                            <div class="section-title pb-0">
                                <h4 class="title left-line">Tin Tức Nổi Bật</h4>
                            
                                <?php
                                    $dstt = loadall_tintucheaderhome();
                                    foreach($dstt as $tt){
                                        extract($tt);
                                        $hinh =  $img_path.$HinhAnhTin;
                                        echo '<div class="media-post-wrap-3 media">
                                        <div class="thumb">
                                            <img src="'.$hinh.'" width="98px" height="98px" alt="img">
                                        </div>
                                        <div class="media-body">
                                            <h6><a href="index.php?act=chitiettintuc&ID_TinTuc='.$ID_TinTuc.'">'.$TieuDeTin.'</a></h6>
                                            <div class="meta d-flex">
                                                <div class="tag"><a href="#">'.$TenDanhMuc.'</a></div>
                                                <div class="date">
                                                    <i class="fa fa-clock-o"></i>
                                                    '.$NgayDangTin.'
                                                </div>
                                            </div>                                
                                        </div>
                                    </div>';
                                    }
                                ?>
                                
                            </div>
                            <div class="post-list-small-wrapper">
                        <div class="section-title pb-0">
                            <h4 class="title">Tin Tức Trong Tuần</h4>
                        </div>
                        <div class="post-grid-slider owl-carousel">
                           <?php
                            $dstt = loadall_tintucuser();
                            foreach($dstt as $tt){
                                extract($tt);
                                $hinh =  $img_path.$HinhAnhTin;
                                echo ' <div class="item">
                                <div class="thumb">
                                    <img src="'.$hinh.'" alt="img">
                                </div>
                                <div class="details">
                                <a href="index.php?act=chitiettintuc&ID_TinTuc='.$ID_TinTuc.'"><p>'.$TieuDeTin.'</p></a>
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
                                </div>
                            </div>';
                            }
                           ?>
                           
                        </div>
                    </div>
                        
                            <div class="ad-area pt-3">
                            <a href="#">
                                <img src="assets/img/ad/add.png" alt="img">
                            </a>
                        </div>
                    </div>
                </div>