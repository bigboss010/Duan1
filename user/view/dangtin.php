
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
					<h1 class="theme-breacrumb-title">Thêm mới tin tức</h1>
          <form id="tinTucForm" action="index.php?act=dangtin&ID_GoiDangTin=<?php if (isset($_GET['ID_GoiDangTin'])) {
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
            <textarea name="NoiDungTin" id="NoiDungTin"></textarea>
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
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="ckeditor/ckeditor.js"></script>
    <script>
                        CKEDITOR.replace( 'NoiDungTin' );
            $(document).ready(function () {
            // Intercept form submission
            $('#tinTucForm').submit(function (e) {
                // Kiểm tra trường Tiêu đề tin
                if ($('input[name="TieuDeTin"]').val() === "") {
                    alert("Vui lòng nhập tiêu đề tin.");
                    e.preventDefault();
                    return false;
                }

                // Kiểm tra trường Danh mục tin
                if ($('select[name="ID_DanhMuc"]').val() === "") {
                    alert("Vui lòng chọn danh mục tin.");
                    e.preventDefault();
                    return false;
                }

                // Kiểm tra trường Hình ảnh
                if ($('input[name="HinhAnhTin"]').val() === "") {
                    alert("Vui lòng chọn hình ảnh tin.");
                    e.preventDefault();
                    return false;
                }

                // Kiểm tra trường Nội dung tin
                if (CKEDITOR.instances.NoiDungTin.getData() === "") {
                    alert("Vui lòng nhập nội dung tin.");
                    e.preventDefault();
                    return false;
                }

                // Thêm các kiểm tra cho các trường khác nếu cần

                // Nếu tất cả các kiểm tra đều đúng, cho phép submit form
                return true;
            });
        });
                </script>
				</div>
  </div>
 
         