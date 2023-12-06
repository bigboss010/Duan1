
<main class="catalo g  mb ">
    <div class="boxleft">
        <?php
        extract($tintuc);
        $hinh = $img_path.$HinhAnhTin;
        echo'
        <div class="  mb">
            <div class="box_title">
                '.$TieuDeTin.'
            </div>
            <div class="box_content">
                    <img src="'.$hinh.'";
                    <p>'.$NoiDungTin.'</p>
                    <p>Lượt xem: '.$LuotXem.'</p>
    
            </div>
        </div>
        ';
         ?>
    </div>
</main>
<!-- <div class="boxright"> -->

<!-- </div> -->
