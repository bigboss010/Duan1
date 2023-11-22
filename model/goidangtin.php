<?php
    function loadall_goidangtin(){
        $sql="select * from goi_dang_tin where 1 order by ID_GOIDANGTIN desc limit 0,9";
        $listgoidangtin=pdo_query($sql);
        return  $listgoidangtin;
    }

 
    // function muaGoi($ID_GoiDangTin, $ID_User) {
    //     // Lấy thông tin gói đăng tin từ cơ sở dữ liệu
    //     $goiDangTin = getThongTinGoiDangTin($ID_GoiDangTin);

    //     // Thực hiện quá trình mua gói, ví dụ: cập nhật thông tin người dùng
    //     // ...

        
    //     return "Mua gói đăng tin thành công!";
    // }


?>