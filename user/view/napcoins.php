

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
                    
          <form onsubmit="return comfirm('Xác nhận đặt hàng')" target="_blank" enctype="application/x-www-form-urlencoded" action="thanhtoan.php" method="post">
           <div class="row2 mb10">
           <label>Số tiền muốn nạp:</label> <br>
            <input type="text" name="SoTien" id="SoTien" placeholder="Mời nhập vào số tiền muốn nạp" oninput="nhapCoins()">
            </div>
            <input type="hidden" name="ID_User"  value="<?php echo $_SESSION['Username']['ID_User']?>">
            <div class="row2 mb10">
           <label>Coins:</label> <br>
            <input type="text" name="Coins" id="Coins" placeholder="0" readonly>
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
  <script>
    function nhapCoins() {
      var soTien = document.getElementById("SoTien").value;
      var doi = 10; // 10000 số tiền bằng 1000 coins
      var coins = soTien / doi;
      document.getElementById("Coins").value = coins;
    }
  </script>                
<?php  } ?>

 
         