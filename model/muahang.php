<?php
    function duyetMuaHang($ID_User, $ID_GoiDangTin, $NgayMua) {
        $sql="INSERT INTO `mua_hang` ( `ID_User`, `ID_GoiDangTin`, `NgayMua`) VALUES ( '$ID_User', '$ID_GoiDangTin', '$NgayMua')";
        pdo_execute($sql);
    }

    function loadall_muahang(){
        $sql="select * from mua_hang order by ID_MuaHang desc";
        $listmuahang=pdo_query($sql);
        return  $listmuahang;
    }

?>