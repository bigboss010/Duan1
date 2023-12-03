<?php
function loadall_danhmuctin(){
    $sql="select * from danh_muc_tin order by ID_DanhMuc desc";
    $listdanhmuc=pdo_query($sql);
    return  $listdanhmuc;
}
function load_ten_dm($ID_DanhMuc){
    if($ID_DanhMuc>0){
        $sql="select * from danh_muc_tin where ID_DanhMuc=".$ID_DanhMuc;
        $dm=pdo_query_one($sql);
        extract($dm);
        return $name;
    }else{
        return "";
    }
}
function insert_danhmuc($TenDanhMuc){
    $sql="insert into danh_muc_tin(TenDanhMuc) values('$TenDanhMuc')";
    pdo_execute($sql);
}
function delete_danhmuc($ID_DanhMuc){
    $sql="delete from danh_muc_tin where ID_DanhMuc=".$ID_DanhMuc;
    pdo_execute($sql);
}
function loadone_danhmuctin($ID_DanhMuc){
    $sql= "select* from danh_muc_tin where ID_DanhMuc =".$ID_DanhMuc;
    $dm=pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($ID_DanhMuc, $TenDanhMuc){
    $sql="update danh_muc_tin set TenDanhMuc='".$TenDanhMuc."' where ID_DanhMuc=".$ID_DanhMuc;
    // UPDATE `danh_muc_tin` SET `TenDanhMuc` = 'Phim chiếu rạp gggkl' WHERE `danh_muc_tin`.`ID_DanhMuc` = 4;
    pdo_execute($sql);
}