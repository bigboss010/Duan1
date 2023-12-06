<?php
    if(isset($tintuc)){
        extract($tintuc);
    }
    if(!is_file($HinhAnhTin)){
        $HinhAnhTin = "<img src='upload/".$HinhAnhTin."' width='100px' height='100px'>";
    }else{
        $HinhAnhTin = "Lỗi!";
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
					<h1 class="theme-breacrumb-title">Chỉnh sửa bài đăng</h1>
         <form action="index.php?act=updatetintuc" method="POST" enctype="multipart/form-data">
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
           <input type="hidden" name="ID_TinTuc" value="<?php echo $ID_TinTuc;?>">
            <div class="row2 mb10">
                <label>Tiêu đề tin:</label> <br>
                <input type="text" name="TieuDeTin" value="<?=$TieuDeTin?>">
            </div>
            <div class="row2 mb10">
                <label>Hình ảnh tin:</label> <br>
                <input type="file" name="HinhAnhTin">
                <?php echo $HinhAnhTin;?>
            </div>
            <div class="row2 mb10">
            <label>Nội dung tin:</label> <br>
            <textarea name="NoiDungTin" id="NoiDungTin" value="<?=$NoiDungTin?>"></textarea>
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
         <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="ckeditor/ckeditor.js"></script>
    <script>
                        CKEDITOR.replace( 'NoiDungTin' );
                </script>
		</div>
</div>
 
         