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
<div class="boxleft">
<?php 
if(!empty($goidangtin)){
extract($goidangtin); 
?>
    <div class="  mb">
        <div class="box_title">
            <?php echo $TenGoi; ?>
        </div>
        <div class="box_content">
            <?php 
                echo "<p>$ChuKy</p>";
                echo "<p>$$Gia</p>";
                echo "<p>$Mota</p>";
            ?>
        </div>
    </div>

 <div class="boxright">
    <div class="mb">
    <?php
        echo ' <div class="box_title">Tổng cộng</div>
        <div class="box_content2 product_portfolio">'               
    ?>
    <?php extract($goidangtin); ?>
            <?php echo $TenGoi.' x '.$ChuKy; echo "<p class=right>$$Gia</p>";?>
            <hr>
            <?php echo "Tổng thanh toán";?><br>
            <?php echo "<p class=center>$$Gia</p>"; ?><br>
            <button class="center"><a href="index.php?act=chitietmuagoi&ID_GoiDangTin=<?php echo $ID_GoiDangTin?>">Đi đến thanh toán</a></button>
            <?php 
}else{ echo "Đã có lỗi trong quá trình xử lý!!!";}
            ?>
    </div>
 </div>

 
 </div>
 </div>
</main>

</body>
</html>

