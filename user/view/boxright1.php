<div class="col-lg-4">
                    <div class="section-title pb-0">
                        <h4 class="title left-line">Truyền Thông Xã Hội</h4>
                    </div>
                    <ul class="social-wrap">
                        <li class="ms-0"><a href="#"><img src="assets/img/icon/facebook.svg" alt="img"></a></li>
                        <li class="me-0"><a href="#"><img src="assets/img/icon/twitter.svg" alt="img"></a></li>
                        <li class="ms-0"><a href="#"><img src="assets/img/icon/instagram.svg" alt="img"></a></li>
                        <li class="me-0"><a href="#"><img src="assets/img/icon/pinterestsvg.svg" alt="img"></a></li>
                    </ul>
                    <div class="section-title pb-0">
                        <h4 class="title left-line">Tin Tức Phổ Biến</h4>
                    </div>
                    <?php
                        $dstt = loadall_tintucuser();
                        foreach($dstt as $tt){
                            extract($tt);
                            $hinh =  $img_path.$HinhAnhTin;
                            echo '<div class="media-post-wrap-3 media">
                            <div class="thumb">
                                <img src="'.$hinh.'" alt="img">
                            </div>
                            <div class="media-body">
                                <h6><a href="index.php?act=chitiettintuc&ID_TinTuc='.$ID_TinTuc.'">'.$TieuDeTin.'</a></h6>
                                <div class="meta d-flex">
                                    <div class="tag"><a href="#">Technology</a></div>
                                    <div class="date">
                                        <i class="fa fa-clock-o"></i>
                                        '.$NgayDangTin.'
                                    </div>
                                </div>                                
                            </div>
                        </div>';
                        }
                    ?>
                    <!-- <div class="media-post-wrap-3 media">
                        <div class="thumb">
                            <img src="assets/img/blog/obama.jpg" alt="img">
                        </div>
                        <div class="media-body">
                            <h6><a href="blog-category.html">Obama avoids crowds outside Edinburgh charity dinner.</a></h6>
                            <div class="meta d-flex">
                                <div class="tag"><a href="#">Politics</a></div>
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
                                    July 12, 2021
                                </div>
                            </div>                                
                        </div>
                    </div>
                    <div class="media-post-wrap-3 media">
                        <div class="thumb">
                            <img src="assets/img/blog/paper-thumb.jpg" alt="img">
                        </div>
                        <div class="media-body">
                            <h6><a href="blog-category.html">Apollo astronauts harmed by a the deep space radiation.</a></h6>
                            <div class="meta d-flex">
                                <div class="tag"><a href="#">Politics</a></div>
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
                                    July 12, 2021
                                </div>
                            </div>                                
                        </div>
                    </div>
                    <div class="media-post-wrap-3 media">
                        <div class="thumb">
                            <img src="assets/img/blog/social-cut.png" alt="img">
                        </div>
                        <div class="media-body">
                            <h6><a href="blog-category.html">The golden rules of midlife fitness and things getting wrong.</a></h6>
                            <div class="meta d-flex">
                                <div class="tag"><a href="#">Technology</a></div>
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
                                    July 12, 2021
                                </div>
                            </div>                                
                        </div> 
                    </div>-->
                    <div class="widget widget_tags mt-5">
                        <div class="section-title pb-0">
                            <h4 class="title left-line widget-title">Từ Khóa</h4>
                        </div>
                        <div class="tagcloud">
                            <?php
                                foreach($dsdm as $dm){
                                    extract($dm);
                                    $linkdm="index.php?act=baiviet&ID_DanhMuc=".$ID_DanhMuc;
                                    echo '<a href="'.$linkdm.'">'.$TenDanhMuc.'</a>';
                                }
                            ?>
                            <!-- <a href="#">Business</a>
                            <a href="#">Digital Marketing</a>
                            <a href="#">Lifestyle</a>
                            <a href="#">Sports</a>
                            <a href="#">Technology</a>
                            <a href="#">Travel</a>
                            <a href="#">Trendy</a>
                            <a href="#">World</a> -->
                        </div>
                    </div>
                    <div class="ad-area pd-top-90">
                        <a href="#">
                            <img src="assets/img/ad/add.png" alt="img">
                        </a>
                    </div>
                    <div class="widget widget_list mt-5">
                        <div class="section-title pb-0">
                            <h4 class="title left-line widget-title">Danh Mục Tin Tức</h4>
                        </div>
                        <ul class="list-inner">
                            <?php
                                foreach($dsdm as $dm){
                                    extract($dm);
                                    $linkdm="index.php?act=baiviet&ID_DanhMuc=".$ID_DanhMuc;
                                    echo '<li><a href="'.$linkdm.'">'.$TenDanhMuc.' </a></li>';
                                }
                            ?>
                            <!-- <li><a href="#">Business</a></li>
                            <li><a href="#">Marketing</a></li>
                            <li><a href="#">Motivation</a></li>
                            <li><a href="#">Politics</a></li>
                            <li><a href="#">Sports</a></li>
                            <li><a href="#">Technology</a></li>
                            <li><a href="#">Travel</a></li> -->
                        </ul>
                    </div>
                </div>