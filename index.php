<!doctype html>
<html class="no-js" lang="zxx">
<?php
//Khai báo sử dụng session
session_start();
 
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
 
 ?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Hệ Thống Quản Lý Đào Tạo</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo-img">
                                <a href="index.html">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a class="active" href="index.php">TRANG CHỦ</a></li>
                                       
                                        <li><a href="Gioithieu.php">GIỚI THIỆU </a></li>
                                        <li><a href="lienhe.php">LIÊN HỆ</a></li>
                                        


                                       
                                        
                                       
                                        <?php 
                                        if(isset($_SESSION['hv']))
                                        {
                                            echo" <li> <a href=\"XemDiemThi.php\">XEM ĐIỂM</a> </li>"; 
                                            echo" <li> <a href=\"DoiMK.php\">ĐỔI MẬT KHẨU</a> </li>"; 
                                            echo" <li> <a href=\"Thoat.php\">THOÁT</a> </li>"; 
                                        }
                                        else  {
                                        echo" <li> <a href=\"dangky.php\">ĐĂNG KÝ</a> </li>";
                                        echo" <li> <a href=\"Login.php\">ĐĂNG NHẬP</a> </li>";
                                        
                                        }
                                        
                                        ?>
                                       
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="log_chat_area d-flex align-items-center">
                               
                                <div class="live_chat_btn"><?php
                                
                                  echo"  <a href=\"#\">";
                                        
                                      echo"  <span style=\"font-size: 21px\"> ";
                                        if(isset($_SESSION['hv'])) echo "Xin chào, ".$_SESSION['hv']; echo" </span>";
                                        
                                        

                                  echo"  </a>"; ?>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- slider_area_start -->
    <div class="slider_area ">
        <div class="single_slider d-flex align-items-center justify-content-center slider_bg_1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-6 col-md-6">
                        <div class="illastrator_png">
                            <img src="img/banner/edu_ilastration.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6">
                        <div class="slider_info">
                            <h3>HỆ THỐNG <br>
                                QUẢN LÝ 
                                ĐÀO TẠO</h3>
                          
</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- about_area_start -->
    
    <!-- about_area_end -->

    <!-- popular_courses_start -->
    <div class="popular_courses">
        <div class="container">
            
            <div class="row">
                <div class="col-xl-12">
                    <div class="course_nav">
                        <nav>
                            <ul class="nav" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                        aria-controls="home" aria-selected="true">Tin Tức</a>
                                </li>
                                
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

        </div>
        <div class="all_courses">
            <div class="container">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="row">
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/1.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>20/3/2020</span>
                                                <h3><a href="ChiTietLopHocTHCBhtml.php">Lớp luyện thi cấp tốc tin học cơ bản  <br>
                                                        </a></h3>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/2.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>21/3/2020</span>
                                                <h3><a href="ChiTietTHNC.php">Lớp luyện thi cấp tốc tin học nâng cao</a></h3>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/4.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>22/03/2020</span>
                                                <h3><a href="#">Lớp thiết kế WebSite <br>
                                                        </a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                     <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/4.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>22/03/2020</span>
                                                <h3><a href="#">Lớp mạng máy tính <br>
                                                        </a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    
                                                   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <img src="img/courses/5.png" alt="">
                                            </div>
                                            <div class="courses_info">
                                                <span>23/03/2020</span>
                                                <h3><a href="#">Lớp lập trình WebSite <br>
                                                        </a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                       
                                                    </div>
                                                    <div class="prise">
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6">
                                        <div class="single_courses">
                                            <div class="thumb">
                                                <a href="#">
                                                    <img src="img/courses/6.png" alt="">
                                                </a>
                                            </div>
                                            <div class="courses_info">
                                                <span>24/03/2020</span>
                                                <h3><a href="#">Lớp quản trị mạng máy tính <br>
                                                        </a></h3>
                                                <div class="star_prise d-flex justify-content-between">
                                                    <div class="star">
                                                       
                                                    </div>
                                                    <div class="prise">
                                                        
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="more_courses text-center">
                                            <a href="#" class="boxed_btn_rev">DỊCH VỤ</a>
                                        </div>
                                    </div>
                                </div>
                    </div>
                    
 
                                    
                                    </div>
                                    
                         
                                  </div>
                                  </div>
    
    <div class="our_courses">
        <div class="container">
            
            <div class="row">
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon">
                            <i class="flaticon-art-and-design"></i>
                        </div>
                        <h3>Dịch vụ truyền thông</h3>
                        <p>
                            Tổ chức sự kiện, hội thảo <br> Cài đặt thiết bị truyền thông <br>
                            Số hóa, cập nhật dữ liệu                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon blue">
                            <i class="flaticon-business-and-finance"></i>
                        </div>
                        <h3>Dịch vụ Công nghệ thông tin</h3>
                        <p>
                            Cho thuê máy ảo, hosting <br> 
                            Đánh giá, đảm bảo an toàn thông tin
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon">
                            <i class="flaticon-premium"></i>
                        </div>
                        <h3>Phát triển hệ thống</h3>
                        <p>
                            Xây dựng, nâng cấp phần mềm <br> Cài đặt triển khai phần mềm <br>
                            Cài đặt cấu hình mạng
                        </p>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6">
                    <div class="single_course text-center">
                        <div class="icon gradient">
                            <i class="flaticon-crown"></i>
                        </div>
                        <h3>Tư vấn giải pháp</h3>
                        <p>
                            Tư vấn đấu thầu <br> Tư vấn giám sát thi công <br>
                            Tư vấn quản lý dự án
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    
    <!-- our_courses_end -->

    <!-- subscribe_newsletter_Start -->
   
    <!-- subscribe_newsletter_end -->

    <!-- our_latest_blog_start -->
   
    <!-- our_latest_blog_end -->


    <!-- footer -->
    <footer class="footer footer_bg_1">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-md-6 col-lg-4">
                        <div class="footer_widget">
                            <div class="footer_logo">
                                <a href="#">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                            <p >
                            Trung tâm Công nghệ thông tin và Truyền thông: <br>
                                Trung tâm là đơn vị sự nghiệp tự chủ một phần kinh phí, trực thuộc Sở Thông tin và Truyền thông tỉnh Bình Dương. Trung tâm có chức năng cung cấp các sản phẩm, dịch vụ trong lĩnh vực công nghệ thông tin và truyền thông.
                               
                            </p>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class="ti-facebook"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="ti-twitter-alt"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-youtube-play"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <div class="col-xl-2 offset-xl-1 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                  Tiện ích
                            </h3>
                             
                             
                                
                              <p>
                             <i class="fa fa-university"></i> Trung tâm CNTT & Truyền thông <br>
                              
                                <i class="fa fa-trophy"></i>  Văn bằng - Chứng chỉ
                            
                            <br>
                            <i class="fa fa-book"></i> Khóa học & dịch vụ
                                
                                 
                            </h3>
                            </p>
                               
                              
                            
                               
                           

                        </div>
                    </div>
                    <div class="col-xl-2 col-md-6 col-lg-2">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                              
                            </h3>
                            
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6 col-lg-3">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Địa chỉ
                            </h3>
                            <p>
                             <i class="fa fa-map-marker"></i>  36 Trịnh Hoài Đức - Phường Phú Lợi Tp.Thủ Dầu Một tỉnh Bình Dương <br>
                               
                                <i class="fa fa-mobile"></i> Phone:
                            (0274) 382 2518 
                            <br>
                            <i class="fa fa-envelope"></i> Email:
                                
                                 stttt@binhduong.gov.vn
                            </h3>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-12">
                        <p class="copy_right text-center">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved  <i class="fa fa-heart-o" aria-hidden="true"></i>  <a href="https://colorlib.com" target="_blank"></a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer -->


    <!-- form itself end-->
    
    
    <!-- form itself end -->

    <!-- form itself end-->
    
    <!-- form itself end -->


    <!-- JS here -->
    <script src="js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/isotope.pkgd.min.js"></script>
    <script src="js/ajax-form.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/jquery.counterup.min.js"></script>
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
</body>

</html>