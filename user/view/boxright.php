<div class="col-lg-4">
                    <div class="section-title pb-0">
                        <h4 class="title left-line">Tin Tức Nổi Bật</h4>
                    </div>
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
                     <!-- <div class="media-post-wrap-3 media">
                        <div class="thumb">
                            <img src="assets/img/blog/parliament-img.jpg" alt="img">
                        </div>
                        <div class="media-body">
                            <h6><a href="blog-category.html">Imagination is more important than knowledge buildup.</a></h6>
                            <div class="meta d-flex">
                                <div class="tag"><a href="#">Politics</a></div>
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
                                    July 12, 2021
                                </div>
                            </div>                                
                        </div>
                    </div> -->
                   <!-- <div class="media-post-wrap-3 media">
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
                            <img src="assets/img/blog/neon-light.jpg" alt="img">
                        </div>
                        <div class="media-body">
                            <h6><a href="blog-category.html">The golden rules of midlife fitness and things getting wrong.</a></h6>
                            <div class="meta d-flex">
                                <div class="tag"><a href="#">Politics</a></div>
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
                                    July 12, 2021
                                </div>
                            </div>                                
                        </div>
                    </div> -->
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
                </div>

               