<?php
    include "model/pdo.php";
    include "model/goidangtin.php";
    include "user/view/header.php";
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
            case "goidangtin":
                $dsgdt = loadall_goidangtin();
                include "user/view/goidangtin.php";
                break;
            case "baiviet":
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
        }
    }else{
    include "user/view/home.php";
    }
    include "user/view/footer.php";
?>