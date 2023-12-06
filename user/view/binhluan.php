<?php
    include "../../model/pdo.php";
    include "../../model/binhluan.php";
    session_start();
    if(!isset($_SESSION['Username'])){
        echo '<div class="mb">
        <div class="box_title">BÌNH LUẬN</div>
        <div class="box_content2">
            <ul>
                
                Vui lòng đăng nhập để bình luận!
                   
                      
            </ul>
        </div>
        <div class="boxfooter binhluanform">
            <form action="" method="POST">
                <input type="hidden" name="ID_TinTuc" value="<?=$ID_TinTuc?>">
                <input type="text" id="" name="NDBinhLuan">
                <input type="submit" id="" name="guibinhluan" value="Gửi bình luận">
            </form>
        </div>

</div>';
    }else{
    $ID_TinTuc = $_REQUEST['ID_TinTuc'];
    $dsbl = loadall_binhluanuser($ID_TinTuc);
    ?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="../../css.style.css"> -->
    <style>
        .mb{
            width: 100%;
        }

        .boxfooter{
            margin: 10px;
        }
    </style>
</head>
<body>
    
<div class="mb">
        <div class="box_title">BÌNH LUẬN</div>
        <div class="box_content2">
          <table class="table table-border projects">
                <th style="width: 3%">
                </th>
                <th style="width: 3%">
                </th>
                <th style="width: 4%">
                </th>
                
                <?php
                 foreach($dsbl as $bl){
                    extract($bl);
                    echo '<tr>
                    <td>'.$Username.':</td>
                    <td>'.$NDBinhLuan.'</td>
                    
                    </tr>
                   ';
                 }  
                      ?>
           </table>
        </div>
        <div class="boxfooter binhluanform">
            <form action="<?=$_SERVER['PHP_SELF'];?>" method="POST">
                <input type="hidden" name="ID_TinTuc" value="<?=$ID_TinTuc?>">
                <input type="text" id="" name="NDBinhLuan">
                <input type="submit" id="" name="guibinhluan" value="Gửi bình luận">
            </form>
        </div>

        <?php
            if(isset($_POST['guibinhluan']) && ($_POST['guibinhluan'])){
                $NDBinhLuan = $_POST['NDBinhLuan'];
                $ID_TinTuc = $_POST['ID_TinTuc'];
                $ID_User = $_SESSION['Username']['ID_User'];
                $NgayBinhLuan =date("Y-m-d H:i:s");
                insert_binhluan($NDBinhLuan,$ID_User,$ID_TinTuc,$NgayBinhLuan);
                header("Location: ".$_SERVER['HTTP_REFERER']);
            }
        ?>
</div>

</body>
</html>
   <?php } ?>
    


