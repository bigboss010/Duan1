<?php
    include "model/pdo.php";
    include "model/goidangtin.php";
    include "model/tintuc.php";
    include "model/taikhoan.php";
    include "user/view/header.php";
    include "global.php";
    $dsdm = loadall_danhmuc();
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
            case "goidangtin":
                $dsgdt = loadall_goidangtin();
                include "user/view/goidangtin.php";
                break;
        
            case "baiviet":
                $dstt = loadall_tintuc();
                // $tendm= load_ten_dm($ID_DanhMuc);
                include "user/view/dsbaiviet.php";
                break;

            case "blog":
                include "user/view/blog.php";
                break;

            case "blog-category":
                include "user/view/blog-category.php";
                break;

            case "blog-detail":
                include "user/view/blog-detail.php";
                break;

            case "lienhe":
                include "user/view/lienhe.php";
                break;

            case "about":
                include "user/view/about.php";
                break;

            // case "dangky":
            //     include "user/login/dangky.php";
            //     break;

            // case "dangnhap": 
            //     break;

            case "dangxuat":
                dangxuat();
                include "user/view/home.php";
                break;

            case "quenmk":
                if (isset($_POST['guiemail'])) {
                    $Email = $_POST['Email'];
                    $sendMailMess = sendMail($Email);
                }
                include "user/login/quenmk.php";
                break;
        }
    }else{
    include "user/view/home.php";
    }
    include "user/view/footer.php";
?>