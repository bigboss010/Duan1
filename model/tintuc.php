<?php
    function loadall_tintuc(){
        $sql="select * from tin_tuc where 1 order by ID_TinTuc desc limit 0,9";
        $listtintuc=pdo_query($sql);
        return  $listtintuc;
    }

    function loadall_binhluan($idsp){
        $sql = "
            SELECT binhluan.id, binhluan.noidung, taikhoan.user, binhluan.ngaybinhluan FROM `binhluan` 
            LEFT JOIN taikhoan ON binhluan.iduser = taikhoan.id
            LEFT JOIN sanpham ON binhluan.idpro = sanpham.id
            WHERE sanpham.id = $idsp;
        ";
        $result =  pdo_query($sql);
        return $result;
    }

    
    function duyetTin($ID_TinTuc) {
        $query = "UPDATE tin_tuc SET TrangThai = 1 WHERE ID_TinTuc = $ID_TinTuc";
        pdo_execute($query);
    }
    

?>