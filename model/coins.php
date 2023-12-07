<?php
    function loadall_napcoins(){
        $sql = "SELECT nap_coins.*, tai_khoan.Username
            FROM nap_coins
            JOIN tai_khoan ON nap_coins.ID_User = tai_khoan.ID_User
            ORDER BY nap_coins.ID_NapCoins DESC";

        $listnapcoins=pdo_query($sql);
        return  $listnapcoins;
    }
    function loadall_coins($ID_User){
        $sql="select Coins from tai_khoan WHERE ID_User='$ID_User' ";
        $Socoins=pdo_query($sql);
        return  $Socoins;
    }
    function loadall_lscoins($ID_User){
        $sql="select * from nap_coins WHERE ID_User='$ID_User' ";
        $Socoins=pdo_query($sql);
        return  $Socoins;
    }

    function tinhCoins($Coins,$ID_User) {
        $query = "UPDATE tai_khoan SET Coins ='$Coins' WHERE ID_User = $ID_User";
        pdo_execute($query);
    }

    function insertNapCoins($CoinsNhan,$SoTien,$ID_User,$NgayNap,$PTTT) {
        if($CoinsNhan == 0 && $SoTien == 0){
            $TrangThai = "Giao dịch thất bại!";
        }else{
            $TrangThai = "Giao dịch thành công";
        }
        $query = "insert into nap_coins  (CoinsNhan,SoTien,NgayNap,PTTT,ID_User,TrangThai) values('$CoinsNhan', '$SoTien', '$NgayNap', '$PTTT', '$ID_User', '$TrangThai')";
        pdo_execute($query);  
    }
    function updateCoins($CoinsNhan,$ID_User) {
        $sqlcoins = "SELECT Coins FROM tai_khoan WHERE ID_User = ?";
        $oldCoins = pdo_query_one($sqlcoins, $ID_User);
        if ($oldCoins) {
            // Nếu có dữ liệu trả về từ cả hai câu truy vấn
            $Coins = $oldCoins['Coins'] + $CoinsNhan;
            $query = "UPDATE tai_khoan SET Coins = '$Coins' WHERE ID_User = ?";
            pdo_execute($query, $ID_User);
        } else {
            echo "Không tìm thấy dữ liệu cho ID_User $ID_User";
        }
        
    }
?>