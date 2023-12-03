<div class="container">
        <div class="breadcrumb-area">
            <div class="row justify-content-center">
                <div class="col-md-12">
					<h1 class="theme-breacrumb-title">Cảm ơn bạn đã sử dụng dịch vụ</h1>
                    <?php
                        if(isset($_GET['ID_GoiDangTin'])){
                            echo '=>><button><a href="index.php?act=dangtin&ID_GoiDangTin='.$ID_GoiDangTin.'">Đăng bài ngay</a></button>';
                        }else{
                            echo "";
                        }
                    ?>
				</div>
            </div>
        </div>
    </div>