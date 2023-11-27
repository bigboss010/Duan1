
<div class="container">
        <div class="breadcrumb-area">
            <div class="row justify-content-center">
                <div class="col-md-12">
					<h1 class="theme-breacrumb-title">Thêm mới tin tức</h1>
          <form action="index.php?act=dangtin&ID_GoiDangTin=<?php if (isset($_GET['ID_GoiDangTin'])) {
            $ID_GoiDangTin = ($_GET['ID_GoiDangTin']);
            echo $ID_GoiDangTin;
            }?>" method="POST" enctype="multipart/form-data">
          <div class="row2 mb10 form_content_container">
           <label> Danh mục tin</label><br>
           <select name="ID_DanhMuc" id="">
           <?php 
                        foreach($listdanhmuctin as $danhmuctin){
                            extract($danhmuctin);
                            echo '<option value="'.$ID_DanhMuc.'">'.$TenDanhMuc.'</option>';
                        }
                    ?>
           </select><br>
           </div>
           <input type="hidden" name="ID_GoiDangTin" value="<?php if (isset($_GET['ID_GoiDangTin'])) {
            $ID_GoiDangTin = ($_GET['ID_GoiDangTin']);
            echo $ID_GoiDangTin;
            }?>"><br>
           <div class="row2 mb10">
           <label> Tiêu đề tin</label> <br>
            <input type="text" name="TieuDeTin" placeholder="Nhập vào tiêu đề tin">
            </div>
           <div class="row2 mb10">
            <input type="hidden" name="ID_User" value="<?php echo $_SESSION['Username']['ID_User']?>">
           </div>
           <div class="row2 mb10">
            <label>Hình ảnh </label> <br>
            <input type="file" name="HinhAnhTin">
           </div>
           <div class="row2 mb10">
            <label>NoiDungTin </label> <br>
            <textarea name="NoiDungTin" id="" cols="30" rows="10"></textarea>
           </div>
         <input class="mr20" name="themmoi" type="submit" value="Thêm mới">
         <input  class="mr20" type="reset" value="Nhập Lại">

         <a href="index.php?act=baiviet"><input  class="mr20" type="button" value="Hiển thị tin tức"></a>
           </div>
           <?php
            if(isset($thanhcong) && ($thanhcong!="")){
              echo $thanhcong;
            }
           ?>
        </form>
            
				</div>
  </div>
 
         