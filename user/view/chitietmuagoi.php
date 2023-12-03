<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}
.mb{
    margin-bottom:30px;
}
.mb10{
    margin-bottom:10px;
}
.boxright{
   width:25%;
}
.boxleft{
    width:70%;
}
td {
    padding: 0 20px;
}
.box_title{
    display:flex;
 
    background: #EEEE;
    border-top-left-radius:5px;
    border-top-right-radius:5px;
    border-left:1px solid #333;
    border-right:1px solid #333;
    padding:10px;
    color:#333;
    height:30px;
    align-items:center;
   
}
.box_content{
    
    
    border-left:1px solid #ccc;
    border-right:1px solid #ccc;
    border-bottom:1px solid #ccc;
    border-bottom-left-radius:5px;
    border-bottom-right-radius:5px;
    min-height:200px;
    padding:20px;
}
.box_content2{
    padding:20px;
    background:#EEEE;
    border-left:1px solid #ccc;
    border-right:1px solid #ccc;
    border-bottom:1px solid #ccc;
    border-bottom-left-radius:5px;
    border-bottom-right-radius:5px;
    min-height:200px;
     
}
.right{
    float: right;
}
.center{
    text-align: center;
    margin: 0 auto; /* 0 top/bottom, auto left/right */
    display: block; /* Để margin auto hoạt động, phải sử dụng display: block */
}
    </style>
</head>
<body>
<main class="catalog  mb ">

<?php extract($goidangtin); ?>
<div class="boxleft">
    <div class="  mb">
        <div class="box_title">
            Thông tin gói đăng tin
        </div>
        <div class="box_content">
            <?php 
                echo "Tên gói: ".$TenGoi."<br>";
                echo "Chu kỳ: ".$ChuKy."<br>";
                echo "Giá: "."$$Gia"."<br>";
                echo "Mô tả: "."$Mota";
            ?>
        </div>
    </div>
</div>

<div class="boxright">
    <div class="mb">
    <?php
        echo ' <div class="box_title">Tổng cộng</div>
        <div class="box_content2 product_portfolio">'               
    ?>
    <?php extract($goidangtin); ?>
    <!-- <div class="  mb"> -->
        <!-- <div class="box_title"> -->
            <?php echo $TenGoi.' x '.$ChuKy; echo "<p class=right>$$Gia</p>";?>
            <hr>
            <?php echo "Tổng thanh toán";?><br>
            <?php echo "<p class=center>$$Gia</p>"; ?><br>
            <form action="index.php?act=xulycoins&ID_GoiDangTin=<?php echo $ID_GoiDangTin?>" method="post">
            <input type="hidden" name="ID_User" value="<?php echo $_SESSION['Username']['ID_User']?>">
            <input type="hidden" name="ID_GoiDangTin" value="<?php echo $ID_GoiDangTin?>">
            <a href="index.php?act=xulycoins&ID_GoiDangTin=<? echo $ID_GoiDangTin?>"><input type="submit" class="center" name="thanhtoan" value="Thanh toán Coins"></a></button>
            </form>
            
        </div>
    </div>
 </div>

<!-- <div class="boxleft">
    <div class="  mb">
        <div class="box_title">
            Phương thức thanh toán
        </div>
        <div class="box_content">
            <form onsubmit="return comfirm('Xác nhận đặt hàng')" target="_blank" enctype="application/x-www-form-urlencoded" action="thanhtoan.php" method="post">
                <button type="submit" name="cod">Thanh toán COD</button><br><br>
                <button type="submit" name="momo">Thanh toán MOMO</button><br><br>
                <button type="submit" name="redirect">Thanh toán VNPAY</button>
            </form>
            <?php 
                
            ?>
        </div>
    </div>
</div> -->
</main>

</body>
</html>

