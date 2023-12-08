<?php 
    function loadall_binhluan(){
        $sql = "
        SELECT binh_luan.ID_BinhLuan, binh_luan.NDBinhLuan, tai_khoan.Username ,binh_luan.NgayBinhLuan,
         tin_tuc.TieuDeTin, tin_tuc.ID_TinTuc, binh_luan.TrangThai
        FROM `binh_luan`
            LEFT JOIN tai_khoan ON binh_luan.ID_User = tai_khoan.ID_User 
            LEFT JOIN tin_tuc ON binh_luan.ID_TinTuc = tin_tuc.ID_TinTuc 
            WHERE 1;
        ";
        $result =  pdo_query($sql);
        return $result;
    }
    function loadall_binhluanuser($ID_TinTuc){
        $sql = "
        SELECT binh_luan.ID_BinhLuan, binh_luan.ID_TinTuc, binh_luan.NDBinhLuan, tai_khoan.Username ,binh_luan.NgayBinhLuan,
         tin_tuc.TieuDeTin, binh_luan.TrangThai
        FROM `binh_luan`
            LEFT JOIN tai_khoan ON binh_luan.ID_User = tai_khoan.ID_User 
            LEFT JOIN tin_tuc ON binh_luan.ID_TinTuc = tin_tuc.ID_TinTuc 
            WHERE binh_luan.TrangThai = 0 and binh_luan.ID_TinTuc ='$ID_TinTuc';
        ";
        $result =  pdo_query($sql);
        return $result;
    }
    function anbl($ID_BinhLuan) {
        $query = "UPDATE binh_luan SET TrangThai = 1 WHERE ID_BinhLuan = $ID_BinhLuan";
        pdo_execute($query);
    }
    function hienbl($ID_BinhLuan) {
        $query = "UPDATE binh_luan SET TrangThai = 0 WHERE ID_BinhLuan = $ID_BinhLuan";
        pdo_execute($query);
    }

    function insert_binhluan($NDBinhLuan,$ID_User,$ID_TinTuc,$NgayBinhLuan){
        $sql="insert into binh_luan(ID_User,ID_TinTuc,NDBinhLuan,NgayBinhLuan) values('$ID_User', '$ID_TinTuc', '$NDBinhLuan', '$NgayBinhLuan')";
        pdo_execute($sql);
    }
    ?>