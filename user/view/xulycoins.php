<?php
    if(isset($_POST['thanhtoan'])&&($_POST['thanhtoan'])){
        if (isset($_POST['ID_User'])) {
            $ID_User = $_POST['ID_User'];
            $ID_GoiDangTin = $_POST['ID_GoiDangTin'];
            $socoins = loadall_coins($ID_User);
            $goidangtin = loadone_goidangtin($ID_GoiDangTin);
            extract($goidangtin);
            if(is_array($socoins) && !empty($socoins)){
                foreach($socoins as $coins){
                    extract($coins);
                    if($Coins>=$Gia){
                        $Coins=$Coins-$Gia;
                        $coinsUpdate = tinhCoins($Coins,$ID_User);       
                        $MuaGoi = duyetMuaGoi($ID_GoiDangTin);
                        $result = duyetThanhVien($ID_User, $ID_GoiDangTin);
                        include "thanhtoantc.php";  
                    }else{
                        echo '<div class="container">
                        <div class="breadcrumb-area">
                            <div class="row justify-content-center">
                                <div class="col-md-12">
                                    <h1 class="theme-breacrumb-title">Số coins hiện tại của bạn không đủ!!!</h1>
                                </div>
                            </div>
                        </div>
                    </div>';
                    }
                }
            }else{
                echo '<div class="container">
                <div class="breadcrumb-area">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <h1 class="theme-breacrumb-title">Số coins hiện tại của bạn không đủ!!!</h1>
                        </div>
                    </div>
                </div>
            </div>';
            }
        }
    }
?>