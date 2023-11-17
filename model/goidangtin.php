<?php
    function loadall_goidangtin(){
        $sql="select * from goi_dang_tin where 1 order by ID_GOIDANGTIN desc limit 0,9";
        $listgoidangtin=pdo_query($sql);
        return  $listgoidangtin;
    }
?>