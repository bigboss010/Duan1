
<?php
    if(is_array($dm)){
        extract($dm);
    }
?>
<div class="row2">
         <div class="row2 font_title">
          <h1>CẬP NHẬT LOẠI Danh Mục</h1>
         </div>
         <div class="row2 form_content ">
          <form action="index.php?act=updatedm" method="POST">
           <div class="row2 mb10 form_content_container">
           <label> Mã loại </label> <br>
            <input type="text" name="ID_DanhMuc" value="<?=$ID_DanhMuc?>" disabled>
           </div>
           <div class="row2 mb10">
            <label>Tên loại </label> <br>
            <input type="text" name="TenDanhMuc" value="<?=$TenDanhMuc?>">
           </div>
           <div class="row mb10 ">
           <input type="hidden" name="ID_DanhMuc" value="<?php if(isset($ID_DanhMuc)&&($ID_DanhMuc>0)) echo $ID_DanhMuc; ?>">
         <input class="mr20" type="submit" name="capnhat" value="CẬP NHẬT">
         <input  class="mr20" type="reset" value="NHẬP LẠI">

         <a href="index.php?act=listdm"><input  class="mr20" type="button" value="DANH SÁCH"></a>
           </div>
          </form>
         </div>
        </div>
                    
                    <?php
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>

                </form>
            </div>
        </div>
    </div>



