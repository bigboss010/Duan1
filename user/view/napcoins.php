<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <link rel="stylesheet" href="assets/css/style.css">
    <style>
      
      #e{
          background-color: #FF9999;
        }
        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

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
<?php if (!isset($_SESSION['Username'])) { ?>
  <div class="container">
        <div class="breadcrumb-area">
            <div class="row justify-content-center">
                <div class="col-md-12">
					<h1 class="theme-breacrumb-title">Vui lòng đăng nhập để sử dụng dịch vụ!!!</h1>
				</div>
            </div>
        </div>
    </div>
<?php } else { ?>
  <div class="container">
        <div class="breadcrumb-area">
            <div class="row justify-content-center">
                <div class="col-md-12">
					        <h1 class="theme-breacrumb-title">Nạp coins</h1><br>
                    
                            <form onsubmit="return confirm('Xác nhận nạp tiền')" target="_blank" enctype="application/x-www-form-urlencoded" action="thanhtoan.php" method="post" onsubmit="return validateForm()">
                                <div class="row2 mb10">
                                    <label>Số tiền muốn nạp:</label> <br>
                                    <input type="text" name="SoTien" id="SoTien" placeholder="Mời nhập vào số tiền muốn nạp" oninput="nhapCoins()" required>
                                </div>
                                <input type="hidden" name="ID_User" value="<?php echo $_SESSION['Username']['ID_User']?>">
                                <div class="row2 mb10">
                                    <label>Coins:</label>
                                    <input type="text" name="Coins" id="Coins" placeholder="0" readonly>
                                </div>
                                <button class="btn btn-danger btn-sm" type="submit" name="momo">Thanh toán MOMO</button>
                                <button class="btn btn-info btn-sm" type="submit" name="redirect">Thanh toán VNPAY</button>

                                <?php
                                if(isset($thanhcong) && ($thanhcong!="")){
                                    echo $thanhcong;
                                }
                                ?>
                            </form>
                        <script>
                          function nhapCoins() {
                            var soTien = document.getElementById("SoTien").value;
                            var doi = 10; // 10000 số tiền bằng 1000 coins
                            var coins = soTien / doi;
                            document.getElementById("Coins").value = coins;
                          }
                        </script>     
                        <script>
                            function validateForm() {
                                var soTien = document.getElementById('SoTien').value;

                                // Check if a valid amount is entered
                                if (isNaN(soTien) || soTien <= 0) {
                                    alert('Vui lòng nhập số tiền hợp lệ.');
                                    return false;
                                }

                                // Add any other validation logic as needed

                                return true;
                            }
                        </script>           
                          <?php  } ?>
            
				        </div>
             </div><br>       
    
          </div>
    </div>
</body>
</html>



 
         