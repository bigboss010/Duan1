
<div class="blog-area pd-top-100 pd-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="media-post-wrap pd-bottom-80 mb-0">
                    <?php
        extract($tintuc);
        $hinh = $img_path.$HinhAnhTin;
        echo'
        <div class="  mb">
            <div class="box_title">
                <h5>'.$TieuDeTin.'</h5>
            </div>
            <div class="box_content">
                    <p>'.$NoiDungTin.'</p>
                    <p>Lượt xem: '.$LuotXem.'</p>
    
            </div>
        </div>
        ';
         ?>
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
                $(document).ready(function(){
                        $("#binhluan").load("user/view/binhluan.php", {ID_TinTuc: <?=$ID_TinTuc?>});
                });
        </script>
        <div class="row" id="binhluan">
        
        </div>
        <div class="col-lg-12">
                    <div class="section-title">
                        <h4 class="title left-line">Tin Tức Cùng Loại</h4>
            </div>
                        <div class="row">
                            <?php
                                $dstt = loadall_tintuccungloai($ID_TinTuc,$ID_DanhMuc);
                                foreach($dstt as $tt){
                                    extract($tt);
                                    $hinh =  $img_path.$HinhAnhTin;
                                    echo '<div class="col-lg-6">
                                    <div class="top-post-wrap mb-0">
                                        <div class="thumb">
                                            <img src="'.$hinh.'" alt="img" style="opacity: 1;">
                                            
                                        </div>
                                        <div class="top-post-details">
                                            <a class="tag top-right tag-purple" href="#">'.$TenDanhMuc.'</a>
                                            <h4><a href="index.php?act=chitiettintuc&ID_TinTuc='.$ID_TinTuc.'">'.$TieuDeTin.'</a></h4>
                                        </div>
                                    </div>
                                </div>';
                                }
                            ?>
                            <!-- <div class="col-lg-6">
                                <div class="top-post-wrap mb-0">
                                    <div class="thumb">
                                        <img src="assets/img/blog/footballer.jpg" alt="img" style="opacity: 1;">
                                        <a class="video-play-btn" href="#" data-effect="mfp-zoom-in"><img src="assets/img/icon/play.png" alt="img"></a>
                                    </div>
                                    <div class="top-post-details">
                                        <a class="tag top-right tag-blue" href="#">Sports</a>
                                        <h4><a href="blog-category.html">Madrid Hope To Beat Malaga.</a></h4>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                        
                        
                    </div><br>
                </div>
                
                </div>
                <?php include "boxright2.php";?>          
            </div>
            </div>
        </div>
    </div>
    <!-- blog-area end -->
    </div>
                            </div>