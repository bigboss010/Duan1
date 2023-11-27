
<div class="container">
        <div class="breadcrumb-area">
            <div class="row justify-content-center">
                <div class="col-md-12">
					<h1 class="theme-breacrumb-title">Nạp coins</h1><br>
                    <p>Hiện tại chỉ có thể nạp với mức tiền này!!!</p><br>
          <form onsubmit="return comfirm('Xác nhận đặt hàng')" target="_blank" enctype="application/x-www-form-urlencoded" action="thanhtoan.php" method="post">
           <div class="row2 mb10">
           <label>Số tiền muốn nạp:</label> <br>
            <input type="text" name="SoTien" value="10000">
            </div>
            <input type="hidden" name="ID_User" value="<?php echo $_SESSION['Username']['ID_User']?>">
            <div class="row2 mb10">
           <label>Coins:</label> <br>
            <input type="text" name="Coins" value="10000">
            </div><br>
            <button type="submit" name="cod">Thanh toán COD</button><br><br>
                <button type="submit" name="momo">Thanh toán MOMO</button><br><br>
                <button type="submit" name="redirect">Thanh toán VNPAY</button>
         <!-- <input  class="mr20" type="reset" value="Nhập Lại"> -->
           <?php
            if(isset($thanhcong) && ($thanhcong!="")){
              echo $thanhcong;
            }
           ?>
        </form>
            
				</div>
  </div><br>
 
         