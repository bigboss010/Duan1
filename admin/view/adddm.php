 <div class="card-primary">
 <div class="row2">
         <div class="row2 font_title">
          <h1>Thêm Mới Danh Mục</h1>
         </div>
         <div class="row2 form_content ">
          <form action="#" method="POST">
           <div class="row2 mb10 form_content_container">
           <label> Mã loại </label> <br>
            <input type="text" name="ID_DanhMuc" placeholder="Mã loại tự động" disabled>
           </div>
           <div class="row2 mb10">
            <label>Tên loại </label> <br>
            <input type="text" name="TenDanhMuc" placeholder="Nhập vào tên">
           </div>
           <div class="row mb10 ">
         <input class="mr20" type="submit" name="themmoi" value="THÊM MỚI">
         <input  class="mr20" type="reset" value="NHẬP LẠI">

         <a href="index.php?act=qldanhmuctin"><input  class="mr20" type="button" value="DANH SÁCH"></a>
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
  </div>