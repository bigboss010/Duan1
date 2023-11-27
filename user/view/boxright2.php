<div class="col-lg-4">
                    <div class="side-area">
                        <div class="widget widget_search">
                            <h5 class="widget-title">
                                Tìm kiếm
                            </h5>
                            <div class="subscribe-inner">
                                <input type="text">
                                <button class="btn">Tìm kiếm</button>
                            </div>
                        </div>
                        <div class="widget widget_list mt-5">
                            <h4 class="widget-title">Danh mục tin tức</h4>
                            <ul class="list-inner">
                            <?php
                                foreach($dsdm as $dm){
                                    extract($dm);
                                    $linkdm="index.php?act=baiviet&ID_DanhMuc=".$ID_DanhMuc;
                                    echo '<li><a href="'.$linkdm.'">'.$TenDanhMuc.' </a></li>';
                                }
                            ?>
                                <!-- <li><a href="#">Business</a></li>
                                <li><a href="#">Marketing</a></li>
                                <li><a href="#">Motivation</a></li>
                                <li><a href="#">Politics</a></li>
                                <li><a href="#">Sports</a></li>
                                <li><a href="#">Technology</a></li>
                                <li><a href="#">Travel</a></li> -->
                            </ul>
                        </div>
                        <div class="ad-area pt-3">
                            <a href="#">
                                <img src="assets/img/ad/add.png" alt="img">
                            </a>
                        </div>
                    </div>
                </div>