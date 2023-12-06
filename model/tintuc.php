<?php
    function loadall_tintucadmin(){
        $sql="SELECT 
        dm.TenDanhMuc,
        tt.ID_TinTuc,
        tt.TieuDeTin,
        tt.NgayDangTin,
        tt.HinhAnhTin,
        tt.NoiDungTin,
        tt.LuotXem,
        tt.TrangThai,
        tt.XoaMem,
        tk.Username,
        tk.AnhDaiDien
    FROM tin_tuc tt
    JOIN danh_muc_tin dm ON tt.ID_DanhMuc = dm.ID_DanhMuc
    JOIN tai_khoan tk ON tt.ID_User = tk.ID_User where 1 order by ID_TinTuc desc limit 0,9";
        $listtintuc=pdo_query($sql);
        return  $listtintuc;
    }

    function loadall_tintucuser(){
        $sql="SELECT 
        dm.TenDanhMuc,
        tt.ID_TinTuc,
        tt.TieuDeTin,
        tt.NgayDangTin,
        tt.HinhAnhTin,
        tt.NoiDungTin,
        tt.LuotXem,
        tk.Username,
        tk.AnhDaiDien
    FROM tin_tuc tt
    JOIN danh_muc_tin dm ON tt.ID_DanhMuc = dm.ID_DanhMuc
    JOIN tai_khoan tk ON tt.ID_User = tk.ID_User where TrangThai = 'Đã duyệt' order by ID_TinTuc desc limit 0,9";
        $listtintuc=pdo_query($sql);
        return  $listtintuc;
    }
    function loadall_tintucuser2(){
        $sql="SELECT 
        dm.ID_DanhMuc,
        dm.TenDanhMuc,
        tt.ID_TinTuc,
        tt.TieuDeTin,
        tt.NgayDangTin,
        tt.HinhAnhTin,
        tt.NoiDungTin,
        tt.LuotXem,
        tk.Username,
        tk.AnhDaiDien
    FROM tin_tuc tt
    JOIN danh_muc_tin dm ON tt.ID_DanhMuc = dm.ID_DanhMuc
    JOIN tai_khoan tk ON tt.ID_User = tk.ID_User where TrangThai = 'Đã duyệt' AND tt.ID_DanhMuc = 2 order by ID_TinTuc desc limit 0,9";
        $listtintuc=pdo_query($sql);
        return  $listtintuc;
    }
    function loadall_tintucuser3(){
        $sql="SELECT 
        dm.ID_DanhMuc,
        dm.TenDanhMuc,
        tt.ID_TinTuc,
        tt.TieuDeTin,
        tt.NgayDangTin,
        tt.HinhAnhTin,
        tt.NoiDungTin,
        tt.LuotXem,
        tk.Username,
        tk.AnhDaiDien
    FROM tin_tuc tt
    JOIN danh_muc_tin dm ON tt.ID_DanhMuc = dm.ID_DanhMuc
    JOIN tai_khoan tk ON tt.ID_User = tk.ID_User where TrangThai = 'Đã duyệt' AND tt.ID_DanhMuc = 3 order by ID_TinTuc desc limit 0,9";
        $listtintuc=pdo_query($sql);
        return  $listtintuc;
    }
    function loadall_tintucuser3maxluotxem() {
        $sql = "SELECT 
            dm.ID_DanhMuc,
            dm.TenDanhMuc,
            tt.ID_TinTuc,
            tt.TieuDeTin,
            tt.NgayDangTin,
            tt.HinhAnhTin,
            tt.NoiDungTin,
            tt.LuotXem,
            tk.Username,
            tk.AnhDaiDien
        FROM tin_tuc tt
        JOIN danh_muc_tin dm ON tt.ID_DanhMuc = dm.ID_DanhMuc
        JOIN tai_khoan tk ON tt.ID_User = tk.ID_User 
        WHERE TrangThai = 'Đã duyệt' AND tt.ID_DanhMuc = 3 
        ORDER BY tt.LuotXem DESC 
        LIMIT 1";
    
        $listtintuc = pdo_query($sql);
        return $listtintuc;
    }
    
    function loadall_tintucuser4(){
        $sql="SELECT 
        dm.ID_DanhMuc,
        dm.TenDanhMuc,
        tt.ID_TinTuc,
        tt.TieuDeTin,
        tt.NgayDangTin,
        tt.HinhAnhTin,
        tt.NoiDungTin,
        tt.LuotXem,
        tk.Username,
        tk.AnhDaiDien
    FROM tin_tuc tt
    JOIN danh_muc_tin dm ON tt.ID_DanhMuc = dm.ID_DanhMuc
    JOIN tai_khoan tk ON tt.ID_User = tk.ID_User where TrangThai = 'Đã duyệt' AND tt.ID_DanhMuc = 4 order by ID_TinTuc desc limit 0,9";
        $listtintuc=pdo_query($sql);
        return  $listtintuc;
    }
    function loadall_tintucuser4maxluotxem() {
        $sql = "SELECT 
            dm.ID_DanhMuc,
            dm.TenDanhMuc,
            tt.ID_TinTuc,
            tt.TieuDeTin,
            tt.NgayDangTin,
            tt.HinhAnhTin,
            tt.NoiDungTin,
            tt.LuotXem,
            tk.Username,
            tk.AnhDaiDien
        FROM tin_tuc tt
        JOIN danh_muc_tin dm ON tt.ID_DanhMuc = dm.ID_DanhMuc
        JOIN tai_khoan tk ON tt.ID_User = tk.ID_User 
        WHERE TrangThai = 'Đã duyệt' AND tt.ID_DanhMuc = 4 
        ORDER BY tt.LuotXem DESC 
        LIMIT 1";
    
        $listtintuc = pdo_query($sql);
        return $listtintuc;
    }

    function duyetTin($ID_TinTuc) {
        $query = "UPDATE tin_tuc SET TrangThai = 'Đã duyệt' WHERE ID_TinTuc = $ID_TinTuc";
        pdo_execute($query);
    }
    function anTin($ID_TinTuc) {
        $query = "UPDATE tin_tuc SET TrangThai = 'Chờ duyệt' WHERE ID_TinTuc = $ID_TinTuc";
        pdo_execute($query);
    }
    
    function insert_tintuc($TieuDeTin, $NoiDungTin, $hinh,$ID_DanhMuc,$ID_User,$ID_GoiDangTin,$NgayDangTin,$TrangThai,$XoaMem){
        $sql="insert into tin_tuc(TieuDeTin,NoiDungTin,HinhAnhTin,ID_DanhMuc,ID_User,ID_GoiDangTin,NgayDangTin,TrangThai,XoaMem) values('$TieuDeTin', '$NoiDungTin', '$hinh', '$ID_DanhMuc', '$ID_User', '$ID_GoiDangTin', '$NgayDangTin', '$TrangThai', '$XoaMem')";
        pdo_execute($sql);
    }

    function loadone_tintuc($ID_TinTuc){
        $sql = "select * from tin_tuc where ID_TinTuc = $ID_TinTuc";
        $result = pdo_query_one($sql);
        return $result;
    }

    function loadall_tintuccanhan($ID_User){
        $sql="SELECT 
        dm.ID_DanhMuc,
        dm.TenDanhMuc,
        tt.ID_TinTuc,
        tt.TieuDeTin,
        tt.NgayDangTin,
        tt.HinhAnhTin,
        tt.NoiDungTin,
        tt.LuotXem,
        tt.TrangThai,
        tk.Username,
        tk.AnhDaiDien
    FROM tin_tuc tt
    JOIN danh_muc_tin dm ON tt.ID_DanhMuc = dm.ID_DanhMuc
    JOIN tai_khoan tk ON tt.ID_User = tk.ID_User where tk.ID_User ='$ID_User' AND XoaMem = 'Chưa xóa'
    order by ID_TinTuc 
    desc limit 0,9";
        $listtintuc=pdo_query($sql);
        return  $listtintuc;
    }

    function loadall_tintuccungloai($ID_TinTuc,$ID_DanhMuc){
        $sql="SELECT 
        dm.ID_DanhMuc,
        dm.TenDanhMuc,
        tt.ID_TinTuc,
        tt.TieuDeTin,
        tt.NgayDangTin,
        tt.HinhAnhTin,
        tt.NoiDungTin,
        tt.LuotXem,
        tt.TrangThai,
        tk.Username,
        tk.AnhDaiDien
    FROM tin_tuc tt
    JOIN danh_muc_tin dm ON tt.ID_DanhMuc = dm.ID_DanhMuc
    JOIN tai_khoan tk ON tt.ID_User = tk.ID_User where tt.ID_DanhMuc ='$ID_DanhMuc' AND ID_TinTuc <>'$ID_TinTuc'
    order by ID_TinTuc 
    desc limit 0,9";
        $listtintuc=pdo_query($sql);
        return  $listtintuc;
    }

    function update_tintuc($ID_TinTuc, $ID_DanhMuc, $TieuDeTin, $NoiDungTin, $HinhAnhTin,$NgayDangTin){
        if($HinhAnhTin!="")
            $sql="update tin_tuc set ID_DanhMuc='".$ID_DanhMuc."', TieuDeTin='".$TieuDeTin."', NoiDungTin='".$NoiDungTin."',  NgayDangTin='".$NgayDangTin."', HinhAnhTin='".$HinhAnhTin."' where ID_TinTuc =".$ID_TinTuc;
        else
            $sql="update tin_tuc set ID_DanhMuc='".$ID_DanhMuc."', TieuDeTin='".$TieuDeTin."', NoiDungTin='".$NoiDungTin."', NgayDangTin='".$NgayDangTin."' where ID_TinTuc =".$ID_TinTuc;
        pdo_execute($sql);
    }

    function xoatinmem($ID_TinTuc) {
        $query = "UPDATE tin_tuc SET XoaMem = 'Đã xóa' WHERE ID_TinTuc = $ID_TinTuc";
        pdo_execute($query);
    }

    function khoiphucxoamem($ID_TinTuc) {
        $query = "UPDATE tin_tuc SET XoaMem = 'Chưa xóa' WHERE ID_TinTuc = $ID_TinTuc";
        pdo_execute($query);
    }

    function loadall_tintucheaderhome(){
        $sql="SELECT 
            dm.TenDanhMuc,
            tt.ID_TinTuc,
            tt.TieuDeTin,
            tt.NgayDangTin,
            tt.HinhAnhTin,
            tt.NoiDungTin,
            tt.LuotXem,
            tk.Username,
            tk.AnhDaiDien
        FROM tin_tuc tt
        JOIN danh_muc_tin dm ON tt.ID_DanhMuc = dm.ID_DanhMuc
        JOIN tai_khoan tk ON tt.ID_User = tk.ID_User 
        WHERE TrangThai = 'Đã duyệt' 
        ORDER BY ID_TinTuc DESC LIMIT 0,6";  // Updated LIMIT to fetch 6 rows
        $listtintuc=pdo_query($sql);
        return $listtintuc;
    }
    

?>