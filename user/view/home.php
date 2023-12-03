<div class="container">
        <div class="braking-news-area">
            <div class="row">
                <div class="col-lg-12">
                    <div class="braking-news-wrap">
                        <span>Tin tức nhanh</span>
                        <div class="marquee">
                            <p>Tin tức: Các bộ phim mới được kì vọng trong năm 2023.</p>
                            <div class="breaking-news-post-date">Ngày 16</div>
                        </div>
                    </div>
                </div> 
            </div>
        </div>
    </div>
    
    <!-- post-banner start -->
    <div class="post-banner-area pd-top-30">
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-6">
                    <div class="top-post-wrap">
                        <div class="thumb">
                            <img src="assets/img/blog/parliament-img-2.jpg" alt="img">
                        </div>
                        <div class="top-post-details top-post-details-2">
                            <a class="tag top-right tag-purple" href="#">Politics</a>
                            <h3><a href="blog-category.html">I find that the harder I work, the latest series luck to I seem to have.</a></h3>
                            <div class="meta mt-2">
                                <div class="user">
                                    <div class="thumb">
                                        <img src="assets/img/banner/user.jpg" alt="img">
                                    </div>
                                    <a href="#">Stiven Jackson</a>
                                </div>
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
						                Mar 16, 2022						
                                </div>
                                <div class="comment">
                                    1
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="top-post-wrap">
                        <div class="thumb">
                            <img src="assets/img/blog/5.png" alt="img">
                        </div>
                        <div class="top-post-details top-post-details-2">
                            <a class="tag top-right tag-yellow" href="#">Technology</a>
                            <h3><a href="blog-category.html">Try not to be a man of success rather become a man of value.</a></h3>
                            <div class="meta mt-2">
                                <div class="user">
                                    <div class="thumb">
                                        <img src="assets/img/banner/user.jpg" alt="img">
                                    </div>
                                    <a href="#">Stiven Jackson</a>
                                </div>
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
						                Mar 16, 2022						
                                </div>
                                <div class="comment">
                                    1
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
                <?php
                 $dstt = loadall_tintucuser();
                foreach($dstt as $tt){
                    extract($tt);
                    $hinh =  $img_path.$HinhAnhTin;
                    echo '<div class="col-lg-4 col-md-6">
                    <div class="top-post-wrap">
                        <div class="thumb">
                            <img src="'.$hinh.'" alt="img">
                        </div>
                        <div class="top-post-details top-post-details-2">
                            <a class="tag top-right tag-pest" href="#">Business</a>
                            <h4><a href="index.php?act=chitiettintuc&ID_TinTuc='.$ID_TinTuc.'">'.$TieuDeTin.'</a></h4>
                            <div class="meta mt-2">
                                <div class="user">
                                    <div class="thumb">
                                        <img src="assets/img/banner/user.jpg" alt="img">
                                    </div>
                                    <a href="#">'.$_SESSION['Username']['Username'].'</a>
                                </div>
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
						               '.$NgayDangTin.'						
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
                }
                ?>
                
                <!-- <div class="col-lg-4 col-md-6">
                    <div class="top-post-wrap">
                        <div class="thumb">
                            <img src="assets/img/blog/sky-view.jpg" alt="img">
                        </div>
                        <div class="top-post-details top-post-details-2">
                            <a class="tag top-right tag-green" href="#">Travel</a>
                            <h4><a href="blog-category.html">Bel-Air anchored by a multi level mansion property.</a></h4>
                            <div class="meta mt-2">
                                <div class="user">
                                    <div class="thumb">
                                        <img src="assets/img/banner/user.jpg" alt="img">
                                    </div>
                                    <a href="#">Stiven Jackson</a>
                                </div>
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
						                Mar 16, 2022						
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="top-post-wrap">
                        <div class="thumb">
                            <img src="assets/img/blog/playing-3.jpg" alt="img">
                        </div>
                        <div class="top-post-details top-post-details-2">
                            <a class="tag top-right tag-blue" href="#">Sports</a>
                            <h4><a href="blog-category.html">When hell freezes over, I’ll play hockey there too.</a></h4>
                            <div class="meta mt-2">
                                <div class="user">
                                    <div class="thumb">
                                        <img src="assets/img/banner/user.jpg" alt="img">
                                    </div>
                                    <a href="#">Stiven Jackson</a>
                                </div>
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
						                Mar 16, 2022						
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- post-banner end -->

    <div class="top-news-area pd-top-84 pd-bottom-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title pb-0">
                        <h4 class="title left-line">Phim Truyền Hình Việt Nam</h4>
                    </div>
                    <div class="row">
                        <?php
                        $dstt = loadall_tintucuser2();
                        foreach($dstt as $tt){
                            extract($tt);
                            $hinh =  $img_path.$HinhAnhTin;
                            echo '<div class="col-lg-6">
                            <div class="media-post-wrap">
                                <div class="thumb mb-4">
                                    <img src="'.$hinh.'" alt="img">
                                </div>
                                <div class="media-body ms-0">
                                    <a class="tag top-right tag-pest" href="#">Business</a>
                                    <h4><a href="index.php?act=chitiettintuc&ID_TinTuc='.$ID_TinTuc.'">'.$TieuDeTin.'</a></h4>
                                </div>
                                <div class="meta d-flex">
                                    <div class="author">
                                        <div class="thumb">
                                            <img src="assets/img/banner/user.jpg" alt="img">
                                        </div>
                                        <a href="#">'.$_SESSION['Username']['Username'].'</a>
                                    </div>
                                    <div class="date ms-auto">
                                        <i class="fa fa-clock-o"></i>
                                        '.$NgayDangTin.'						
                                    </div>
                                    <div class="comment ms-auto">
                                        0
                                    </div>
                                </div>
                            </div>
                        </div>';
                        }
                        
                        ?>
                        <!-- <div class="col-lg-6">
                            <div class="media-post-wrap">
                                <div class="thumb mb-4">
                                    <img src="assets/img/blog/planning.jpg" alt="img">
                                </div>
                                <div class="media-body ms-0">
                                    <a class="tag top-right tag-purple" href="#">Marketing</a>
                                    <h4><a href="blog-category.html">B2B cmos plan 2022 spending that rise, influencer marketing’s.</a></h4>
                                </div>
                                <div class="meta d-flex">
                                    <div class="author">
                                        <div class="thumb">
                                            <img src="assets/img/banner/user.jpg" alt="img">
                                        </div>
                                        <a href="#">Stiven Jackson</a>
                                    </div>
                                    <div class="date ms-auto">
                                        <i class="fa fa-clock-o"></i>
                                            Mar 16, 2022						
                                    </div>
                                    <div class="comment ms-auto">
                                        0
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="media-post-wrap">
                                <div class="thumb mb-4">
                                    <img src="assets/img/blog/rich-man.jpg" alt="img">
                                </div>
                                <div class="media-body ms-0">
                                    <a class="tag top-right tag-yellow" href="#">Technology</a>
                                    <h4><a href="blog-category.html">International breweries applicate from young entrepreneurs.</a></h4>
                                </div>
                                <div class="meta d-flex">
                                    <div class="author">
                                        <div class="thumb">
                                            <img src="assets/img/banner/user.jpg" alt="img">
                                        </div>
                                        <a href="#">Stiven Jackson</a>
                                    </div>
                                    <div class="date ms-auto">
                                        <i class="fa fa-clock-o"></i>
                                            Mar 16, 2022						
                                    </div>
                                    <div class="comment ms-auto">
                                        0
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="media-post-wrap">
                                <div class="thumb mb-4">
                                    <img src="assets/img/blog/advertisement.jpg" alt="img">
                                </div>
                                <div class="media-body ms-0">
                                    <a class="tag top-right tag-green" href="#">Travel</a>
                                    <h4><a href="blog-category.html">Elf programmatic advertising our trends going on 2022.</a></h4>
                                </div>
                                <div class="meta d-flex">
                                    <div class="author">
                                        <div class="thumb">
                                            <img src="assets/img/banner/user.jpg" alt="img">
                                        </div>
                                        <a href="#">Stiven Jackson</a>
                                    </div>
                                    <div class="date ms-auto">
                                        <i class="fa fa-clock-o"></i>
                                            Mar 16, 2022						
                                    </div>
                                    <div class="comment ms-auto">
                                        0
                                    </div>
                                </div>
                            </div>
                        </div>-->
                    </div> 
                </div>
            <?php include "boxright.php"?>
            </div>
        </div>
    </div>

    <div class="ad-area pd-bottom-40">
        <div class="container">
            <a class="w-100" href="#"><img src="assets/img/ad/kiante-ads.png" alt="img"></a>
        </div>
    </div>

    <div class="top-news-area pd-top-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="section-title pb-0">
                        <h4 class="title left-line">Phim Chiếu Rạp</h4>
                    </div>
                    <div class="media-post-wrap mg-bottom-40">
                        <div class="thumb mb-4">
                            <img class="w-100" src="assets/img/blog/country-parliament.jpg" alt="img">
                        </div>
                        <div class="media-body ms-0">
                            <a class="tag top-right tag-purple" href="#">Politics</a>
                            <h2><a href="blog-category.html">Julian Assange charged in US, court document for an accidentally reveals changing the technology.</a></h2>
                        </div>
                        <div class="meta d-flex">
                            <div class="author">
                                <div class="thumb">
                                    <img src="assets/img/banner/user.jpg" alt="img">
                                </div>
                                <a href="#">Stiven Jackson</a>
                            </div>
                            <div class="date">
                                <i class="fa fa-clock-o"></i>
                                    Mar 16, 2022						
                            </div>
                            <div class="comment">
                                0
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <?php
                            $dstt = loadall_tintucuser4();
                            foreach($dstt as $tt){
                                extract($tt);
                                $hinh =  $img_path.$HinhAnhTin;
                                echo '<div class="col-lg-6">
                                <div class="media-post-wrap-3 media">
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
                                </div>
                            </div>';

                            }
                        ?>
                        <!-- <div class="col-lg-6">
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
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="media-post-wrap-3 media">
                                <div class="thumb">
                                    <img src="assets/img/blog/richman.png" alt="img">
                                </div>
                                <div class="media-body">
                                    <h6><a href="blog-category.html">International breweries applicate from young entrepreneurs.</a></h6>
                                    <div class="meta d-flex">
                                        <div class="tag"><a href="#">Technology</a></div>
                                        <div class="date">
                                            <i class="fa fa-clock-o"></i>
                                            July 12, 2021
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="media-post-wrap-3 media">
                                <div class="thumb">
                                    <img src="assets/img/blog/business.png" alt="img">
                                </div>
                                <div class="media-body">
                                    <h6><a href="blog-category.html">In the news: small businesses for expect revenue growth in 2022.</a></h6>
                                    <div class="meta d-flex">
                                        <div class="tag"><a href="#">Business</a></div>
                                        <div class="date">
                                            <i class="fa fa-clock-o"></i>
                                            July 12, 2021
                                        </div>
                                    </div>                                
                                </div>
                            </div>
                        </div> -->
                    </div>
                    <div class="section-title pb-0 pd-top-80">
                        <h4 class="title left-line">Phim Hoa Ngữ - Hàn Quốc</h4>
                    </div>
                    <div class="video-area">
                        <div class="top-post-wrap">
                            <div class="thumb">
                                <img src="assets/img/blog/nature.jpg" alt="img" style="opacity: 1;">
                                <a class="video-play-btn" href="#" data-effect="mfp-zoom-in"><img src="assets/img/icon/play.png" alt="img"></a>
                            </div>
                            <div class="top-post-details">
                                <a class="tag top-right tag-green" href="#">Travel</a>
                                <h2><a href="blog-category.html">I find that the harder I work, the more luck I seem to have.</a></h2>
                                <div class="meta mt-2">
                                    <div class="user">
                                        <div class="thumb">
                                            <img src="assets/img/banner/user.jpg" alt="img" style="opacity: 1;">
                                        </div>
                                        <a href="#">Stiven Jackson</a>
                                    </div>
                                    <div class="date">
                                        <i class="fa fa-clock-o"></i>
                                            Mar 16, 2022						
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php
                                $dstt = loadall_tintucuser3();
                                foreach($dstt as $tt){
                                    extract($tt);
                                    $hinh =  $img_path.$HinhAnhTin;
                                    echo '<div class="col-lg-6">
                                    <div class="top-post-wrap mb-0">
                                        <div class="thumb">
                                            <img src="'.$hinh.'" alt="img" style="opacity: 1;">
                                            <a class="video-play-btn" href="#" data-effect="mfp-zoom-in"><img src="assets/img/icon/play.png" alt="img"></a>
                                        </div>
                                        <div class="top-post-details">
                                            <a class="tag top-right tag-purple" href="#">Politics</a>
                                            <h4><a href="index.php?act=chitiettintuc&ID_TinTuc='.$ID_TinTuc.'">'.$TieuDeTin.'</a></h4>
                                        </div>
                                    </div>
                                </div>';
                                }
                            ?>
                            <!-- <div class="col-lg-6">
                                <div class="top-post-wrap mb-0">
                                    <div class="thumb">
                                        <img src="assets/img/blog/footballer.jpg" alt="img" style="opacity: 1;">
                                        <a class="video-play-btn" href="#" data-effect="mfp-zoom-in"><img src="assets/img/icon/play.png" alt="img"></a>
                                    </div>
                                    <div class="top-post-details">
                                        <a class="tag top-right tag-blue" href="#">Sports</a>
                                        <h4><a href="blog-category.html">Madrid Hope To Beat Malaga.</a></h4>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-4">
                    <div class="section-title pb-0">
                        <h4 class="title left-line">Social Media</h4>
                    </div>
                    <ul class="social-wrap">
                        <li class="ms-0"><a href="#"><img src="assets/img/icon/facebook.svg" alt="img"></a></li>
                        <li class="me-0"><a href="#"><img src="assets/img/icon/twitter.svg" alt="img"></a></li>
                        <li class="ms-0"><a href="#"><img src="assets/img/icon/instagram.svg" alt="img"></a></li>
                        <li class="me-0"><a href="#"><img src="assets/img/icon/pinterestsvg.svg" alt="img"></a></li>
                    </ul>
                    <div class="section-title pb-0">
                        <h4 class="title left-line">Popular Posts</h4>
                    </div>
                    <div class="media-post-wrap-3 media">
                        <div class="thumb">
                            <img src="assets/img/blog/techboy.jpg" alt="img">
                        </div>
                        <div class="media-body">
                            <h6><a href="blog-category.html">Intel’s horseshoe bend concept is a look at the future of foldable.</a></h6>
                            <div class="meta d-flex">
                                <div class="tag"><a href="#">Technology</a></div>
                                <div class="date">
                                    <i class="fa fa-clock-o"></i>
                                    July 12, 2021
                                </div>
                            </div>                                
                        </div>
                    </div>
                    <div class="media-post-wrap-3 media">
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
                    </div>
                    <div class="widget widget_tags mt-5">
                        <div class="section-title pb-0">
                            <h4 class="title left-line widget-title">Tags</h4>
                        </div>
                        <div class="tagcloud">
                            <a href="#">Business</a>
                            <a href="#">Digital Marketing</a>
                            <a href="#">Lifestyle</a>
                            <a href="#">Sports</a>
                            <a href="#">Technology</a>
                            <a href="#">Travel</a>
                            <a href="#">Trendy</a>
                            <a href="#">World</a>
                        </div>
                    </div>
                    <div class="ad-area pd-top-90">
                        <a href="#">
                            <img src="assets/img/ad/add.png" alt="img">
                        </a>
                    </div>
                    <div class="widget widget_list mt-5">
                        <div class="section-title pb-0">
                            <h4 class="title left-line widget-title">Category list</h4>
                        </div>
                        <ul class="list-inner">
                            <li><a href="#">Business</a></li>
                            <li><a href="#">Marketing</a></li>
                            <li><a href="#">Motivation</a></li>
                            <li><a href="#">Politics</a></li>
                            <li><a href="#">Sports</a></li>
                            <li><a href="#">Technology</a></li>
                            <li><a href="#">Travel</a></li>
                        </ul>
                    </div>
                </div> -->
                <?php include "boxright1.php";?>
            </div>
        </div>
    </div>

    <div class="pd-top-70 pd-bottom-30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h4 class="title left-line">Tin Tức Mới</h4>
                    </div>
                </div>
                <?php
                    $dstt = loadall_tintucuser();
                    foreach($dstt as $tt){
                        extract($tt);
                        $hinh =  $img_path.$HinhAnhTin;
                        echo '<div class="col-lg-4 col-md-6">
                        <div class="media-post-wrap">
                            <div class="thumb mb-4">
                                <img src="'.$hinh.'" alt="img">
                            </div>
                            <div class="media-body ms-0">
                                <a class="tag top-right tag-yellow" href="#">Technology</a>
                                <h4><a href="index.php?act=chitiettintuc&ID_TinTuc='.$ID_TinTuc.'">'.$TieuDeTin.'</a></h4>
                            </div>
                            <div class="meta d-flex">
                                <div class="author">
                                    <div class="thumb">
                                        <img src="assets/img/banner/user.jpg" alt="img">
                                    </div>
                                    <a href="#">'.$_SESSION['Username']['Username'].'</a>
                                </div>
                                <div class="date ms-auto">
                                    <i class="fa fa-clock-o"></i>
                                    '.$NgayDangTin.'						
                                </div>
                                <div class="comment ms-auto">
                                    0
                                </div>
                            </div>
                        </div>
                    </div>';
                    }
                ?>
                <!-- <div class="col-lg-4 col-md-6">
                    <div class="media-post-wrap">
                        <div class="thumb mb-4">
                            <img src="assets/img/blog/playing-2.jpg" alt="img">
                        </div>
                        <div class="media-body ms-0">
                            <a class="tag top-right tag-blue" href="#">Sports</a>
                            <h4><a href="blog-category.html">The golden rules of midlife fitness and things getting wrong.</a></h4>
                        </div>
                        <div class="meta d-flex">
                            <div class="author">
                                <div class="thumb">
                                    <img src="assets/img/banner/user.jpg" alt="img">
                                </div>
                                <a href="#">Stiven Jackson</a>
                            </div>
                            <div class="date ms-auto">
                                <i class="fa fa-clock-o"></i>
                                    Mar 16, 2022						
                            </div>
                            <div class="comment ms-auto">
                                0
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="media-post-wrap">
                        <div class="thumb mb-4">
                            <img src="assets/img/blog/neon-light-1.jpg" alt="img">
                        </div>
                        <div class="media-body ms-0">
                            <a class="tag top-right tag-red" href="#">Motivation</a>
                            <h4><a href="blog-category.html">The golden rules of midlife fitness and things getting wrong.</a></h4>
                        </div>
                        <div class="meta d-flex">
                            <div class="author">
                                <div class="thumb">
                                    <img src="assets/img/banner/user.jpg" alt="img">
                                </div>
                                <a href="#">Stiven Jackson</a>
                            </div>
                            <div class="date ms-auto">
                                <i class="fa fa-clock-o"></i>
                                    Mar 16, 2022						
                            </div>
                            <div class="comment ms-auto">
                                0
                            </div>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="subscribe-area" style="background-image: url(assets/img/ad/Subscribe-Box.png);">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title p-0">
                        <h2>Theo dõi chúng tôi</h2>
                        <p>Đăng ký nhận Bản tin của chúng tôi và cập nhật thông tin</p>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="subscribe-inner">
                        <input type="text" placeholder="Nhập địa chỉ email">
                        <button>Gửi</button>
                    </div>
                </div>
            </div>
        </div>
    </div>