<?php
    function duyetThanhVien($ID_User, $ID_GoiDangTin) {
        $sql="INSERT INTO `thanh_vien` ( `ID_User`, `ID_GoiDangTin`) VALUES ( '$ID_User', '$ID_GoiDangTin')";
        pdo_execute($sql);
    }

    function loadall_thanhvien(){
        $sql="select * from thanhvien order by ID_ThanhVien desc";
        $listthanhvien=pdo_query($sql);
        return  $listthanhvien;
    }

?>