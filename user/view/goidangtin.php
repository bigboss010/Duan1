<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .box_items {
    display: inline-block;
    width: 30%; /* Điều chỉnh chiều rộng của mỗi gói theo ý muốn */
    margin: 10px; /* Khoảng cách giữa các gói */
    padding: 15px;
    border: 1px solid #ccc;
    background-color: #f0f8ff; /* Màu xanh dương */
    transition: background-color 0.3s ease; /* Hiệu ứng màu nền khi hover */
}

.box_items:hover {
    background-color: #4682b4; /* Màu xanh dương khi hover */
}

.box_items_img {
    /* Thêm các thuộc tính CSS cho hình ảnh nếu cần */
}

.item_name {
    font-size: 18px;
    font-weight: bold;
    color: #333;
    text-decoration: none;
    display: block;
    margin-top: 10px;
}

.price {
    font-size: 14px;
    color: #666;
    margin-top: 5px;
}

.add {
    background-color: #4caf50; /* Màu nền nút */
    color: #fff; /* Màu chữ nút */
    padding: 8px 15px;
    cursor: pointer;
    display: inline-block;
    margin-top: 10px;
    text-align: center;
    transition: background-color 0.3s ease; /* Hiệu ứng màu nền khi hover */
}

.add:hover {
    background-color: #45a049; /* Màu nền nút khi hover */
}

    </style>
</head>
<body>
<?php
    $i=0;
    foreach ($dsgdt as $goi){
        extract($goi);
        
        if(($i==2)||($i==5)||($i==8)){
            $mr="";
        }else{
            $mr="mr";
        }
        echo '<div class="box_items '.$mr.'">
            <div class="box_items_img">  
        </div>
        <a class="item_name" href="#">'.$TenGoi.'</a>
        <p class="price">'.$ChuKy.'</p>
        <p class="price">$'.$Gia.'</p>
        <p class="price">'.$Mota.'</p>
        <div class="add"><a href="index.php?act=muagoi&ID_GoiDangTin='.$ID_GoiDangTin.'">Mua gói</a></div>
        </div>';
        $i+=1;
    }
?>

</body>
</html>

