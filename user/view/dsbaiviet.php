<div class="container">
        <div class="breadcrumb-area">
            <div class="row justify-content-center">
                <div class="col-md-12">
					<h1 class="theme-breacrumb-title">Giới thiệu</h1>
				</div>
            </div>
        </div>
    </div>
    
    <!-- blog-area start -->
    <div class="blog-area pd-top-100 pd-bottom-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="media-post-wrap pd-bottom-80 mb-0">
                        <?php
                         $i=0;
                         foreach ($dstt as $tt){
                             extract($tt);
                             $hinh =  $img_path.$HinhAnhTin;
                             echo '
                                 <div class="box_items_img">
                                 <img class="w-100" src="'.$hinh.'" height="500px" alt="">
                             </div>
                             <h1><a href="#">'.$TieuDeTin.'</a></h1>
                             <p >'.$NoiDungTin.'</p>
                             <p >'.$NgayDangTin.'</p>
                             <p >Lượt xem '.$LuotXem.'</p>
                             <a class="btn btn-main mt-3" href="#">Read More</a>
                                ';
                             }
                        // <div class="thumb mb-4">
                        //     <img class="w-100" src="assets/img/blog/obama-1.jpg" alt="img">
                        // </div>
                        // <div class="media-body pt-1 ms-0">
                        //     <a class="tag top-right tag-purple" href="#">Politics</a>
                        //     <h1><a href="blog-details.html">Obama avoids crowds outside Edinburgh charity dinner.</a></h1>
                        // </div>
                        // <div class="meta d-flex">
                        //     <div class="author">
                        //         <div class="thumb">
                        //             <img src="assets/img/banner/user.jpg" alt="img">
                        //         </div>
                        //         <a href="#">Stiven Jackson</a>
                        //     </div>
                        //     <div class="date">
                        //         <i class="fa fa-clock-o"></i>
                        //             Mar 16, 2022						
                        //     </div>
                        // </div>
                        // <p class="mb-3">When working remotely and having to manage your own time, it is not uncommon for breaks to be overlooked. A new survey by the online scheduling platform Doodle confirms the US workforce’s collective neglect of breaks. 72% of US employees admit to feeling</p>
                        // <a class="btn btn-main mt-3" href="#">Read More</a>
                        ?>
                    </div>

                    <!-- <div class="media-post-wrap pd-bottom-40 mb-0">
                        <div class="thumb mb-4">
                            <img class="w-100" src="assets/img/blog/paper-thumb-1.jpg" alt="img">
                        </div>
                        <div class="media-body pt-1 ms-0">
                            <a class="tag top-right tag-purple" href="#">Politics</a>
                            <h1><a href="blog-details.html">Apollo astronauts harmed by a the deep space radiation.</a></h1>
                        </div>
                        <div class="meta d-flex">
                            <div class="author">
                                <div class="thumb">
                                    <img src="assets/img/banner/user.jpg" alt="img">
                                </div>
                                <a href="#">Stiven Jackson</a>
                            </div>
                            <div class="date">
                                <i class="fa fa-clock-o"></i>
                                    Mar 16, 2022						
                            </div>
                        </div>
                        <p class="mb-3">When working remotely and having to manage your own time, it is not uncommon for breaks to be overlooked. A new survey by the online scheduling platform Doodle confirms the US workforce’s collective neglect of breaks. 72% of US employees admit to feeling</p>
                        <a class="btn btn-main mt-3" href="#">Read More</a>
                    </div>
                    <div class="media-post-wrap pd-bottom-40 mb-0">
                        <div class="thumb mb-4">
                            <img class="w-100" src="assets/img/blog/protest.jpg" alt="img">
                        </div>
                        <div class="media-body pt-1 ms-0">
                            <a class="tag top-right tag-purple" href="#">Politics</a>
                            <h1><a href="blog-details.html">Huge glacier collapses in Arge.</a></h1>
                        </div>
                        <div class="meta d-flex">
                            <div class="author">
                                <div class="thumb">
                                    <img src="assets/img/banner/user.jpg" alt="img">
                                </div>
                                <a href="#">Stiven Jackson</a>
                            </div>
                            <div class="date">
                                <i class="fa fa-clock-o"></i>
                                    Mar 16, 2022						
                            </div>
                        </div>
                        <p class="mb-3">When working remotely and having to manage your own time, it is not uncommon for breaks to be overlooked. A new survey by the online scheduling platform Doodle confirms the US workforce’s collective neglect of breaks. 72% of US employees admit to feeling</p>
                        <a class="btn btn-main mt-3" href="#">Read More</a>
                    </div>
                    <div class="media-post-wrap pd-bottom-40 mb-0">
                        <div class="thumb mb-4">
                            <img class="w-100" src="assets/img/blog/country-parliament.jpg" alt="img">
                        </div>
                        <div class="media-body pt-1 ms-0">
                            <a class="tag top-right tag-purple" href="#">Politics</a>
                            <h1><a href="blog-details.html">Julian Assange charged in US, court document for an accidentally reveals changing the technology.</a></h1>
                        </div>
                        <div class="meta d-flex">
                            <div class="author">
                                <div class="thumb">
                                    <img src="assets/img/banner/user.jpg" alt="img">
                                </div>
                                <a href="#">Stiven Jackson</a>
                            </div>
                            <div class="date">
                                <i class="fa fa-clock-o"></i>
                                    Mar 16, 2022						
                            </div>
                        </div>
                        <p class="mb-3">When working remotely and having to manage your own time, it is not uncommon for breaks to be overlooked. A new survey by the online scheduling platform Doodle confirms the US workforce’s collective neglect of breaks. 72% of US employees admit to feeling</p>
                        <a class="btn btn-main mt-3" href="#">Read More</a>
                    </div>
                    <div class="pagination-area text-center">
                        <nav aria-label="Page navigation example">
                            <ul class="pagination">
                              <li class="page-item"><a class="page-link active" href="#">1</a></li>
                              <li class="page-item"><a class="page-link" href="#">2</a></li>
                              <li class="page-item"><a class="page-link" href="#"><i class="fa fa-long-arrow-right"></i></a></li>
                            </ul>
                        </nav>
                    </div> -->
                </div>
                <?php include "boxright2.php";?>
            </div>
        </div>
    </div>
    <!-- blog-area end -->