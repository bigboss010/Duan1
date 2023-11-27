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
        return $TenDanhMuc;
    }else{
        return "";
    }
}
// function insert_danhmuc($tenloai){
//     $sql="insert into danh_muc_tin(name) values('$tenloai')";
//     pdo_execute($sql);
// }
// function delete_danhmuc($id){
//     $sql="delete from danh_muc_tin where id=".$id;
//     pdo_execute($sql);
// }
// function loadone_danhmuc($id){
//     $sql= "select* from danh_muc_tin where id =".$id;
//     $dm=pdo_query_one($sql);
//     return $dm;
// }
// function update_danhmuc($id, $tenloai){
//     $sql="update danh_muc_tin set name=' ".$tenloai." 'where id =".$id;
//     pdo_execute($sql);
// }