<?php
            $i=0;
            foreach ($dsgdt as $goi){
                extract($goi);
                
                if(($i==2)||($i==5)||($i==8)){
                    $mr="";
                }else{
                    $mr="mr";
                }
                echo '<div class="box_items '.$mr.'">
                    <div class="box_items_img">
                    
                </div>
                <a class="item_name" href="#">'.$TenGoi.'</a>
                <p class="price">'.$ChuKy.'</p>
                <p class="price">$'.$Gia.'</p>
                <p class="price">'.$Mota.'</p>
                <div class="add" href="">Mua gói</div>
            </div>';
                    $i+=1;
                }
            ?>
