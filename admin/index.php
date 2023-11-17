<?php
    include "view/header.php";
    include "view/boxleft.php"; 
    if(isset($_GET['act'])&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){

        }
    }else{
    include "view/content.php";
    }
    include "view/footer.php";
?>