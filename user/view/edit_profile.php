<?php
    if(is_array($taikhoan)){
        extract($taikhoan);
    }
    if(!is_file($AnhDaiDien)){
        $AnhDaiDien = "<img src='upload/".$AnhDaiDien."' width='100px' height='100px'>";
    }else{
        $AnhDaiDien = "Lỗi!";
    }
?>
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
    </style>
<div class="container">
        <div class="breadcrumb-area">
            <div class="row justify-content-center">
                <div class="col-md-12">
					<h1 class="theme-breacrumb-title">Chỉnh sửa thông tin cá nhân</h1>
         <form action="index.php?act=updatetrangcn" method="POST" enctype="multipart/form-data">
            <div class="row2 mb10">
                <label>Tên tài khoản:</label> <br>
                <input type="text" name="Username" value="<?=$Username?>">
                </div>
            <div class="row2 mb10">
                <label>Mật khẩu:</label> <br>
                <input type="text" name="Password" value="<?=$Password?>">
            </div>
            <div class="row2 mb10">
                <label>Email: </label> <br>
                <input type="text" name="Email" value="<?=$Email?>">
            </div>
            <div class="row2 mb10">
                <label>Số điện thoại:</label> <br>
                <input type="text" name="Tel" value="<?=$Tel?>">
            </div>
            <div class="row2 mb10">
                <label>Ảnh đại diện:</label> <br>
                <input type="file" name="AnhDaiDien">
                <?php echo $AnhDaiDien;?>
            </div>
                <input class="mr20" name="capnhat" type="submit" value="Cập Nhật">
                <input  class="mr20" type="reset" value="Nhập Lại">
            </div>
                <?php
                if(isset($thanhcong) && ($thanhcong!="")){
                echo $thanhcong;
                }
                ?>
         </form>
            
		</div>
</div>
 
         