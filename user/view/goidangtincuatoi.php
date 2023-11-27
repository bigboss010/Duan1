<div class="container">
        <div class="breadcrumb-area">
            <div class="row justify-content-center">
                <div class="col-md-12">
					<h1 class="theme-breacrumb-title">Gói đăng tin của tôi</h1>
                    <?php
    $i=0;
    foreach ($dsgdtct as $goi){
        extract($goi);
        
        if(($i==2)||($i==5)||($i==8)){
            $mr="";
        }else{
            $mr="mr";
        }
        if (isset($_SESSION['Username'])) {
            echo '<div class="box_items ' . $mr . '">
                    <div class="box_items_img">  
                    </div>
                    <a class="item_name" href="#">' . $TenGoi . '</a>
                    <p class="price">' . $ChuKy . '</p>
                    <p class="price">$' . $Gia . '</p>
                    <p class="price">' . $Mota . '</p>
                    <div class="add"><a href="index.php?act=dangtin&ID_GoiDangTin='.$ID_GoiDangTin.'&ID_User='.$_SESSION['Username']['ID_User'].'">Đăng bài ngay</a></div>
                  </div>';
                  $i+=1; 
        } else {
            echo '<div class="box_items ' . $mr . '">
                    <div class="box_items_img">  
                    </div>
                    <a class="item_name" href="#">' . $TenGoi . '</a>
                    <p class="price">' . $ChuKy . '</p>
                    <p class="price">$' . $Gia . '</p>
                    <p class="price">' . $Mota . '</p>
                    <p>Vui lòng đăng nhập để sử dụng dịch vụ!!!</p>
                  </div>';
                  $i+=1; 
        }
        
        
        
    }
?>
            
				</div>
            </div>
        </div>
    </div>