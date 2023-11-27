<?php
    include "../model/pdo.php";
    include "../model/tintuc.php";
    include "../model/goidangtin.php";
    include "../model/taikhoan.php";
    include "../model/danhmuctin.php";
    include "view/header.php";
    include "view/boxleft.php"; 
    include "../global.php";
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
            case "qltintuc":
                // $dstt = loadall_tintucadmin();
                include "view/tintuc.php";
                break;

            case 'qldanhmuctin' :
                $listdanhmuc=loadall_danhmuctin();
                include "view/danhmuctin.php";
                break;

            case "duyettin":
                if (isset($_GET['ID_TinTuc'])) {
                    $ID_TinTuc = $_GET['ID_TinTuc'];
                    $result = duyetTin($ID_TinTuc);
                    echo $result;
                }
                include "view/tintuc.php";
                break;

            case 'qltaikhoan':
                $listtaikhoan = loadall_taikhoan();
                include "view/taikhoan.php";
                break;

            case 'qlgdt':
                $listgdt = loadall_goidangtin();
                include "view/goidangtin.php";
                break;

            case 'qltaikhoan':
                $listtaikhoan = loadall_taikhoan();
                include "view/taikhoan.php";
                break;
    
    }
    }else{
    include "view/content.php";
    }
    include "view/footer.php";
?>