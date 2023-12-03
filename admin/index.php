<?php
    include "../model/pdo.php";
    include "../model/tintuc.php";
    include "../model/goidangtin.php";
    include "../model/taikhoan.php";
    include "../model/muahang.php";
    include "../model/danhmuctin.php";
    include "../model/binhluan.php";
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
                    $thongbao="Cập nhật thành công";
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
                    $thongbao="Thêm thành công";
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

            case "duyettin":
                if (isset($_GET['ID_TinTuc'])) {
                    $ID_TinTuc = $_GET['ID_TinTuc'];
                    $result = duyetTin($ID_TinTuc);
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
            case 'qlthanhvien':
                $listthanhvien = loadall_thanhvien();
                include "view/thanhvien.php";
                break;
            case 'xoatk':
                    if (isset($_GET['ID_User'])&&($_GET['ID_User'])){
                        delete_taikhoan($_GET['ID_User']);
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
           
    }   
    }else{
    include "view/content.php";
    }
    include "view/footer.php";
?>