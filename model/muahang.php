<?php
    function duyetMuaHang($ID_User, $ID_GoiDangTin, $NgayMua) {
        $sql="INSERT INTO `mua_hang` ( `ID_User`, `ID_GoiDangTin`, `NgayMua`) VALUES ( '$ID_User', '$ID_GoiDangTin', '$NgayMua')";
        pdo_execute($sql);
    }

    function loadall_muahang(){
        $sql="SELECT mua_hang.*, tk.Username, gdt.TenGoi, gdt.Gia
        from mua_hang 
        LEFT JOIN tai_khoan tk ON mua_hang.ID_User = tk.ID_User
        LEFT JOIN goi_dang_tin gdt ON mua_hang.ID_GoiDangTin = gdt.ID_GoiDangTin
        order by mua_hang.ID_MuaHang desc";
        $listmuahang=pdo_query($sql);
        return  $listmuahang;
    }

?>