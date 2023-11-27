<?php
    function loadall_tintucadmin(){
        $sql="select * from tin_tuc where 1 order by ID_TinTuc desc limit 0,9";
        $listtintuc=pdo_query($sql);
        return  $listtintuc;
    }

    function loadall_tintucuser(){
        $sql="select * from tin_tuc where TrangThai = 1 order by ID_TinTuc desc limit 0,9";
        $listtintuc=pdo_query($sql);
        return  $listtintuc;
    }
    function loadall_tintucuser2(){
        $sql="select * from tin_tuc where TrangThai = 1 AND ID_DanhMuc = 2 order by ID_TinTuc desc limit 0,9";
        $listtintuc=pdo_query($sql);
        return  $listtintuc;
    }
    function loadall_tintucuser3(){
        $sql="select * from tin_tuc where TrangThai = 1 AND ID_DanhMuc = 3 order by ID_TinTuc desc limit 0,9";
        $listtintuc=pdo_query($sql);
        return  $listtintuc;
    }
    function loadall_tintucuser4(){
        $sql="select * from tin_tuc where TrangThai = 1 AND ID_DanhMuc = 4 order by ID_TinTuc desc limit 0,9";
        $listtintuc=pdo_query($sql);
        return  $listtintuc;
    }

    function duyetTin($ID_TinTuc) {
        $query = "UPDATE tin_tuc SET TrangThai = 1 WHERE ID_TinTuc = $ID_TinTuc";
        pdo_execute($query);
    }
    
    function insert_tintuc($TieuDeTin, $NoiDungTin, $hinh,$ID_DanhMuc,$ID_User,$ID_GoiDangTin){
        $sql="insert into tin_tuc(TieuDeTin,NoiDungTin,HinhAnhTin,ID_DanhMuc,ID_User,ID_GoiDangTin) values('$TieuDeTin', '$NoiDungTin', '$hinh', '$ID_DanhMuc', '$ID_User', '$ID_GoiDangTin')";
        pdo_execute($sql);
    }

?>