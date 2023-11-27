<?php
    function loadall_goidangtin(){
        $sql="select * from goi_dang_tin where 1 order by ID_GOIDANGTIN desc limit 0,9";
        $listgoidangtin=pdo_query($sql);
        return  $listgoidangtin;
    }
    function loadall_goidangtincuatoi(){
        $sql="select * from goi_dang_tin where MuaGoi = 1 order by ID_GOIDANGTIN desc limit 0,9";
        $listgoidangtincuatoi=pdo_query($sql);
        return  $listgoidangtincuatoi;
    }

    function duyetMuaGoi($ID_GoiDangTin) {
        $query = "UPDATE goi_dang_tin SET MuaGoi = 1 WHERE ID_GoiDangTin = $ID_GoiDangTin";
        pdo_execute($query);
    }
   
    function muaGoi($ID_GoiDangTin, $ID_User) {
        // Lấy thông tin gói đăng tin từ cơ sở dữ liệu
        $goiDangTin = getThongTinGoiDangTin($ID_GoiDangTin);

        // Thực hiện quá trình mua gói, ví dụ: cập nhật thông tin người dùng
        // ...
    }

    function loadone_goidangtin($ID_GoiDangTin){
        $sql = "select * from goi_dang_tin where ID_GoiDangTin = $ID_GoiDangTin";
        $result = pdo_query_one($sql);
        return $result;
    }

    
?>