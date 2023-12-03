<!DOCTYPE html>
<html lang="zxx">

<!-- Mirrored from wowtheme7.com/tf/kiante/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Nov 2023 10:15:43 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Kiante - News Magazine Modern Html Template</title>

    <!-- favicon -->
    <link rel="icon" href="demo-landing/img/favicon.png">
    
    <!-- Stylesheet -->
    <link rel="stylesheet" href="assets/css/vendor.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link rel="stylesheet" href="assets/css/css.css">
    <script src="https://www.gstatic.com/charts/loader.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
</head>
<body>

    <!-- preloader area start -->
    <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>
    <!-- search popup area start -->
    <div class="search-popup" id="search-popup">
        <form action="https://wowtheme7.com/tf/kiante/home.html" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- //. search Popup -->
    <div class="body-overlay" id="body-overlay"></div>

    <header id="theme-header-one" class="header-style-one">	
		<div class="top-header-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 col-sm-6">
                        <?php 
                        if (!isset($_SESSION['Username'])){
                            echo '<button><a href="user/login/dangnhap.php" ><i >Vui Lòng Đăng Nhập!</i></a></button>';
                         }else{
                             echo '<button><a href="index.php?act=trangcanhan" ><i >Trang Cá Nhân</i></a></button>';
                         }
                        echo "<br>";
                        if (isset($_SESSION['Username'])) {
                            $ID_User = $_SESSION['Username']['ID_User'];
                            $socoins = loadall_coins($ID_User);
                            if(!empty($socoins)){
                                foreach($socoins as $coins){
                                    extract($coins);
                                    echo "Số coins hiện có: $".$Coins;
                                }
                            }else {
                                echo "Số coins hiện có: $0";
                            }
                            } else { echo "Số coins hiện có: $0"; }
                        
                        ?>
                    </div>
                    <div class="col-md-6 col-sm-6 text-end">
                           
                            <?php if (!isset($_SESSION['Username'])) { ?>
                                <button><a href="user/login/dangnhap.php" ><i >Đăng nhập</i></a></button>
                                <button><a href="user/login/dangky.php" ><i >Đăng ký</i></a></button>
                            <?php } else { ?>
                                <p>Hello <?=$_SESSION['Username']['Username']?></p>
                                <?php
                                    if($_SESSION['Username']['Role'] == 1){
                                        $linkadmin = "admin/index.php";
                                        // $linkuser = "index.php?act=dangtin&ID_GoiDangTin=$ID_GoiDangTin";
                                       echo "<button><a href='".$linkadmin."'>Đến Admin</a></button>";
                                    }else{
                                        // echo "<button><a href='".$linkuser."'>Đăng Bài</a></button>";
                                    }
                                ?>
                                
                                <button><a href="user/login/dangxuat.php">Đăng xuất</a></button>
                            <?php  } ?>
                        <!-- <div class="htop_social">
                            <a href="#" class="social-list__link"><i class="fa fa-facebook-f"></i></a>
                            <a href="#" class="social-list__link"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="social-list__link"><i class="fa fa-instagram"></i></a>
                            <a href="#" class="social-list__link"><i class="fa fa-youtube-play"></i></a> 
                        </div> -->
                    </div>
                </div>
            </div>	
        </div>
    </header>

    <!-- navbar start -->
    <div class="navbar-area">
        <nav class="navbar navbar-expand-lg">
            <div class="container nav-container">
                <a class="main-logo" href="index.php"><img src="assets/img/anh.jpg" alt="img"></a>
                <div class="responsive-mobile-menu">
                    <div class="logo d-lg-none d-block">
                        <a class="main-logo" href="home.html"><img src="assets/img/logo.png" alt="img"></a>
                    </div>
                    <button class="menu toggle-btn d-block d-lg-none" data-target="#miralax_main_menu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-left"></span>
                        <span class="icon-right"></span>
                    </button>
                </div>
                <div class="nav-right-part nav-right-part-mobile">
                    <a class="search header-search" href="#"><i class="fa fa-search"></i></a>
                </div>
                <div class="collapse navbar-collapse" id="miralax_main_menu">
                    <ul class="navbar-nav menu-open">
                        <li>
                            <a href="index.php">Trang chủ</a>
                            <!-- <ul class="sub-menu">
                                <li><a href="home.html">Home 01</a></li>
                                <li><a href="index-2.html">Home 02</a></li>
                                <li><a href="index-3.html">Home 03</a></li>
                                <li><a href="index-4.html">Home 04</a></li>
                            </ul> -->
                        </li>
                        <li><a href="index.php?act=baiviet">Tất cả tin tức</a></li>
                        <!-- <li><a href="blog-category.html">Politics</a></li>
                        <li><a href="blog-category.html">Tech</a></li> -->
                        <li class="menu-item-has-children current-menu-item">
                            <a href="#">Danh mục tin tức</a>
                            <ul class="sub-menu">
                                <li><a href="index.php?act=phimchieurap">Phim chiếu rạp</a></li>
                                <li><a href="index.php?act=phimthvn">Phim truyền hình Việt Nam</a></li>
                                <li><a href="index.php?act=phimhqtq">Phim Hoa Ngữ - Hàn Quốc</a></li>
                            </ul>
                        </li>
                        <!-- <li><a href="index.php?act=about">Phim Hoa Ngữ - Hàn Quốc</a></li> -->
                        <li class="menu-item-has-children current-menu-item">
                        <a href="#">Gói đăng tin</a>
                        <ul class="sub-menu">
                        <li><a href="index.php?act=goidangtin">Mua gói đăng tin</a></li>
                        <li><a href="index.php?act=goidangtincuatoi">Gói đăng tin của tôi</a></li>
                        </ul>
                        </li>
                        <li><a href="index.php?act=napcoins">Nạp Coins</a></li>
                        <li><a href="index.php?act=lienhe">Liên hệ</a></li>
                    </ul>
                </div>
                <div class="nav-right-part nav-right-part-desktop">
                    <a class="search header-search" href="#"><i class="fa fa-search"></i></a>
                </div>
            </div>
        </nav>
    </div>
    <!-- navbar end -->