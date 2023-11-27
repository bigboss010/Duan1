<?php
    function loadall_napcoins(){
        $sql="select * from nap_coins order by ID_NapCoins desc";
        $listdanhmuc=pdo_query($sql);
        return  $listdanhmuc;
    }
    function loadall_coins($ID_User){
        $sql="select Coins from nap_coins order by ID_User='$ID_User' desc";
        $Socoins=pdo_query($sql);
        return  $Socoins;
    }

    function tinhCoins($Coins,$ID_User) {
        $query = "UPDATE nap_coins SET Coins ='$Coins' WHERE ID_User = $ID_User";
        pdo_execute($query);
    }
?>