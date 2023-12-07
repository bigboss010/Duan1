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
        .content{
          margin-left: 440px
        }
    </style>
   <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Thêm Mới Danh Mục</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="index.php">Trang Chủ</a></li>
              <li class="breadcrumb-item active">Thêm Mới Danh Mục</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
        <form action="index.php?act=adddm" method="POST">
           <div class="row2 mb10 form_content_container">
              <div class="row2 mb10">
                <label> ID Danh Mục:</label> <br>
                  <input type="text" name="ID_DanhMuc" placeholder="ID_DanhMuc là tự động" disabled>
            </div>
           </div>
           <div class="row2 mb10">
            <label>Tên Danh Mục:</label> <br>
            <input type="text" name="TenDanhMuc" placeholder="Nhập vào tên danh mục">
           </div>
           <div class="row mb10 ">
         <input class="mr20" type="submit" name="themmoi" value="THÊM MỚI">
         <input  class="mr20" type="reset" value="NHẬP LẠI">

         <a href="index.php?act=qldanhmuctin"><input  class="mr20" type="button" value="DANH SÁCH"></a>
           </div>
           <?php
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    ?>
          </form>
       </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->


  
