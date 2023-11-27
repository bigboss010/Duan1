<?php
    include "model/pdo.php";
    include "model/goidangtin.php";
    include "model/tintuc.php";
    include "model/danhmuctin.php";
    include "model/taikhoan.php";
    include "model/thanhvien.php";
    include "model/coins.php";
    include "user/view/header.php";
    include "global.php";
    $dsdm = loadall_danhmuctin();
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){
            case "goidangtin":
                $dsgdt = loadall_goidangtin();
                include "user/view/goidangtin.php";
                break;
            case "goidangtincuatoi":
                    $dsgdtct = loadall_goidangtincuatoi();
                    include "user/view/goidangtincuatoi.php";
                break;
            case "muagoi":
                if(isset($_GET['ID_GoiDangTin']) && $_GET['ID_GoiDangTin'] > 0){
                    $goidangtin = loadone_goidangtin($_GET['ID_GoiDangTin']);
                    // $sanphamcl = load_sanpham_cungloai($_GET['idsp'], $sanpham['iddm']);
                    // $binhluan = loadall_binhluan($_GET['idsp']);
                    include "user/view/muagoi.php";
                }else{
                    include "user/view/goidangtin.php";            
                }
                break;
            case "chitietmuagoi":
                if(isset($_GET['ID_GoiDangTin']) && $_GET['ID_GoiDangTin'] > 0){
                    $goidangtin = loadone_goidangtin($_GET['ID_GoiDangTin']);
                    include "user/view/chitietmuagoi.php";
                }else{
                    include "user/view/muagoi.php";            
                }
                break;
            // case "thanhtoan":
            //     include "user/view/thanhtoan.php";
            //     break;
            case "thanhtoantc":
                if(isset($_POST['ID_GoiDangTin']) && $_POST['ID_GoiDangTin'] > 0){
                    $goidangtin = loadone_goidangtin($_POST['ID_GoiDangTin']);
                    if(isset($_POST['thanhtoan'])&&($_POST['thanhtoan'])){
                        if (isset($_POST['ID_User'])) {
                            $ID_User = $_POST['ID_User'];
                            $ID_GoiDangTin = $_POST['ID_GoiDangTin'];
                            $socoins = loadall_coins($ID_User);
                            $MuaGoi = duyetMuaGoi($ID_GoiDangTin);
                            $result = duyetThanhVien($ID_User, $ID_GoiDangTin);
                            echo $result, $MuaGoi;
                            extract($goidangtin);
                            foreach($socoins as $coins){
                                extract($coins);
                                if($Coins>=$Gia){
                                    $Coins=$Coins-$Gia;
                                    tinhCoins($Coins,$ID_User);
                                }else{
                                    echo "Số coins hiện tại của bạn không đủ!!!";
                                }
                            }
                        }
                    }
                }
                include "user/view/thanhtoantc.php";
                break;
            case "dangtin":
                if(isset($_POST['themmoi']) && ($_POST['themmoi'])){
                    $ID_GoiDangTin = $_POST['ID_GoiDangTin'];
                    $ID_DanhMuc = $_POST['ID_DanhMuc'];
                    $ID_User = $_POST['ID_User'];
                    $TieuDeTin = $_POST['TieuDeTin'];
                    $NoiDungTin = $_POST['NoiDungTin'];
                    $hinh = $_FILES['HinhAnhTin']['name'];
                    $target_dir = "upload/";
                    $target_file = $target_dir.basename($_FILES['HinhAnhTin']['name']);
                    if(move_uploaded_file($_FILES['HinhAnhTin']['tmp_name'], $target_file)){
                        // echo "Upload ảnh thành công!";
                    }else{
                        echo "Upload ảnh không thành công!";
                    }
                    insert_tintuc($TieuDeTin,$NoiDungTin,$hinh,$ID_DanhMuc,$ID_User,$ID_GoiDangTin);
                    $thanhcong = "Thêm thành công!";
                    }
                $listdanhmuctin = loadall_danhmuctin();
                include "user/view/dangtin.php";
                break;  
            case "baiviet":
                $dstt = loadall_tintucuser();
                // $tendm= load_ten_dm($ID_DanhMuc);
                include "user/view/dsbaiviet.php";
                break;

            case "phimchieurap":
                $dstt = loadall_tintucuser4();
                include "user/view/phimcr.php";
                break;

            case "phimthvn":
                $dstt = loadall_tintucuser2();
                include "user/view/phimthvn.php";
                break;

            case "phimhqtq":
                $dstt = loadall_tintucuser3();
                include "user/view/phimhqtq.php";
                break;

            case "napcoins":
                include "user/view/napcoins.php";
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