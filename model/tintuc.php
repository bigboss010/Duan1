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
    function anTin($ID_TinTuc) {
        $query = "UPDATE tin_tuc SET TrangThai = 0 WHERE ID_TinTuc = $ID_TinTuc";
        pdo_execute($query);
    }
    
    function insert_tintuc($TieuDeTin, $NoiDungTin, $hinh,$ID_DanhMuc,$ID_User,$ID_GoiDangTin,$NgayDangTin){
        $sql="insert into tin_tuc(TieuDeTin,NoiDungTin,HinhAnhTin,ID_DanhMuc,ID_User,ID_GoiDangTin,NgayDangTin) values('$TieuDeTin', '$NoiDungTin', '$hinh', '$ID_DanhMuc', '$ID_User', '$ID_GoiDangTin', '$NgayDangTin')";
        pdo_execute($sql);
    }

    function loadone_tintuc($ID_TinTuc){
        $sql = "select * from tin_tuc where ID_TinTuc = $ID_TinTuc";
        $result = pdo_query_one($sql);
        return $result;
    }

    function loadall_tintuccanhan($ID_User){
        $sql="select * from tin_tuc where ID_User ='$ID_User' order by ID_TinTuc desc limit 0,9";
        $listtintuc=pdo_query($sql);
        return  $listtintuc;
    }

?>