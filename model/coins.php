<?php
    function loadall_napcoins(){
        $sql="select * from nap_coins order by ID_NapCoins desc";
        $listdanhmuc=pdo_query($sql);
        return  $listdanhmuc;
    }
    function loadall_coins($ID_User){
        $sql="select Coins from nap_coins WHERE ID_User='$ID_User' ";
        $Socoins=pdo_query($sql);
        return  $Socoins;
    }

    function tinhCoins($Coins,$ID_User) {
        $query = "UPDATE nap_coins SET Coins ='$Coins' WHERE ID_User = $ID_User";
        pdo_execute($query);
    }

    function updateCoinsNap($NewCoins,$NewSoTien,$ID_User) {
        $sqlcoins = "SELECT Coins FROM nap_coins WHERE ID_User = ?";
        $sqlsotien = "SELECT SoTien FROM nap_coins WHERE ID_User = ?";
        $oldCoins = pdo_query_one($sqlcoins, $ID_User);
        $oldSoTien = pdo_query_one($sqlsotien, $ID_User);
        if ($oldCoins && $oldSoTien) {
            // Nếu có dữ liệu trả về từ cả hai câu truy vấn
            $Coins = $oldCoins['Coins'] + $NewCoins;
            $SoTien = $oldSoTien['SoTien'] + $NewSoTien;
            $query = "UPDATE nap_coins SET Coins ='$Coins', SoTien = '$SoTien' WHERE ID_User = $ID_User";
            pdo_execute($query);
        } else {
            echo "Không tìm thấy dữ liệu cho ID_User $ID_User";
        }
        
    }

    function insert_NapCoins($MAXID_User){
        $sql="insert into nap_coins(ID_User) values('$MAXID_User')";
        pdo_execute($sql);
    }
?>