<?php
    include "../model/pdo.php";
    include "../model/tintuc.php";
    include "../model/goidangtin.php";
    include "../model/taikhoan.php";
    include "../model/muahang.php";
    include "../model/danhmuctin.php";
    include "../model/binhluan.php";
    include "../model/coins.php";
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

            case 'suadm':
                if(isset($_GET['ID_DanhMuc'])&&($_GET['ID_DanhMuc']>0)){
                $dm=loadone_danhmuctin($_GET['ID_DanhMuc']);
                }
                $listdanhmuc=loadall_danhmuctin();
                include "view/updatedm.php";
                break;
                
                case 'updatedm':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $TenDanhMuc=$_POST['TenDanhMuc'];
                    $ID_DanhMuc=$_POST['ID_DanhMuc'];
                    update_danhmuc($ID_DanhMuc, $TenDanhMuc);
                    $thongbao="Cập nhật thành công!";
                }
                // $sql="select * from danh_muc_tin order by ID_DanhMuc desc";
                // $listdanhmuc= pdo_query($sql);
                $listdanhmuc=loadall_danhmuctin();
                include "view/danhmuctin.php";
                break;
            case 'adddm' :
                //kiểm tra xem người dùng có click vào nút add hay không
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $TenDanhMuc=$_POST['TenDanhMuc'];
                    insert_danhmuc($TenDanhMuc);
                    $thongbao="Thêm thành công!";
                }
                include "view/adddm.php";
                break;
            case 'xoadm':
                if (isset($_GET['ID_DanhMuc'])&&($_GET['ID_DanhMuc'])){
                    delete_danhmuc($_GET['ID_DanhMuc']);
                }    
                $listdanhmuc = loadall_danhmuctin();
                include "view/danhmuctin.php";
                break;
            case 'addgdt' :
                //kiểm tra xem người dùng có click vào nút add hay không
                if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                    $TenGoi = $_POST['TenGoi'];
                    $ChuKy = $_POST['ChuKy'];
                    $Gia = $_POST['Gia'];
                    $Mota = $_POST['Mota'];
                    insert_gdt($TenGoi, $ChuKy, $Gia, $Mota);
                    $thongbao="Thêm thành công!";
                }
                    include "view/addgdt.php";
                    break;
            case 'suagdt':
                    if(isset($_GET['ID_GoiDangTin'])&&($_GET['ID_GoiDangTin']>0)){
                    $gdt=loadone_goidangtin($_GET['ID_GoiDangTin']);
                    }
                    $listgdt = loadall_goidangtin();
                    include "view/updategdt.php";
                    break;
                    
            case 'updategdt':
                    if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                        $ID_GoiDangTin = $_POST['ID_GoiDangTin'];
                        $TenGoi = $_POST['TenGoi'];
                        $ChuKy = $_POST['ChuKy'];
                        $Gia = $_POST['Gia'];
                        $Mota = $_POST['Mota'];
                        update_gdt($ID_GoiDangTin, $TenGoi, $ChuKy, $Gia, $Mota);
                        $thongbao="Cập nhật thành công!";
                    }
                    $listgdt = loadall_goidangtin();
                    include "view/goidangtin.php";
                    break;
            case 'xoagdt':
                if (isset($_GET['ID_GoiDangTin'])&&($_GET['ID_GoiDangTin'])){
                    delete_gdt($_GET['ID_GoiDangTin']);
                }    
                $listgdt = loadall_goidangtin();
                include "view/goidangtin.php";
                break;

            case "duyettin":
                if (isset($_GET['ID_TinTuc'])) {
                    $ID_TinTuc = $_GET['ID_TinTuc'];
                    $result = duyetTin($ID_TinTuc);
                    echo $result;
                }
                include "view/tintuc.php";
                break;
            case "khoiphuctt":
                if (isset($_GET['ID_TinTuc'])) {
                    $ID_TinTuc = $_GET['ID_TinTuc'];
                    $result = khoiphucxoamem($ID_TinTuc);
                    echo $result;
                }
                include "view/tintuc.php";
                break;
            case "antin":
                if (isset($_GET['ID_TinTuc'])) {
                    $ID_TinTuc = $_GET['ID_TinTuc'];
                    $result = anTin($ID_TinTuc);
                    echo $result;
                }
                //$listbinhluan = loadall_binhluan();
                include "view/tintuc.php";
                break;
              

            case 'qltaikhoan':
                $listtaikhoan = loadall_taikhoan();
                include "view/taikhoan.php";
                break;
            case 'qlmuahang':
                $listmuahang = loadall_muahang();
                include "view/muahang.php";
                break;
            case 'qlnapcoins':
                $listnapcoins = loadall_napcoins();
                include "view/napcoins.php";
                break;
            case 'khoatk':
                    if (isset($_GET['ID_User'])&&($_GET['ID_User'])){
                        $ID_User = $_GET['ID_User'];
                        khoa_taikhoan( $ID_User);
                    }    
                    $listtaikhoan = loadall_taikhoan();
                    include "view/taikhoan.php";
                    break;
            case 'khoiphuctk':
                    if (isset($_GET['ID_User'])&&($_GET['ID_User'])){
                        $ID_User = $_GET['ID_User'];
                        khoiphuc_taikhoan($ID_User);
                    }    
                    $listtaikhoan = loadall_taikhoan();
                    include "view/taikhoan.php";
                    break; 
            case 'qlgdt':
                $listgdt = loadall_goidangtin();
                include "view/goidangtin.php";
                break;

            case 'qlbinhluan':
                //$listbinhluan = loadall_binhluan();
                include "view/binhluan.php";
                break;
            case "anbl":
                    if (isset($_GET['ID_BinhLuan'])) {
                        $ID_BinhLuan = $_GET['ID_BinhLuan'];
                        $result = anbl($ID_BinhLuan);
                        echo $result;
                    }
                    //$listbinhluan = loadall_binhluan();
                    include "view/binhluan.php";
                    break;
            case "hienbl":
                    if (isset($_GET['ID_BinhLuan'])) {
                        $ID_BinhLuan = $_GET['ID_BinhLuan'];
                        $result = hienbl($ID_BinhLuan);
                        echo $result;
                    }
                    //$listbinhluan = loadall_binhluan();
                    include "view/binhluan.php";
                    break;
            case "thongke":
                include "view/thongke.php";
                break;
           
    }   
    }else{
    include "view/content.php";
    }
    include "view/footer.php";
?>