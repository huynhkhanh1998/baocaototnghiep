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
                                <a href="index.php">
                                    <img src="img/logo.png" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li> <a class="active"  href="index.php">TRANG CHỦ</a></li>
                                      
                                         <li><a href="Gioithieu.php">GIỚI THIỆU</a></li>
                                         
                                       
                                        
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
                                <a href="#test-form" class="login popup-with-form">
                                    <i class=""></i>
                                    <span></span>
                                </a>
                                <div class="live_chat_btn"><?php
                                  echo"  <a href=\"#\">";
                                        
                                      echo"  <span style=\"font-size: 21px\"> ";
                                        if(isset($_SESSION['hv'])) echo "Xin chào, ".$_SESSION['hv']; echo" </span>";

                                  echo"  </a>"; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
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
                          
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider_area_end -->

    <!-- about_area_start -->
    
    <!-- about_area_end -->

    <!-- popular_courses_start -->
   <div class="container">
<div class="col-md-12">
  </div>
<div class="col-md-12">
    <iframe frameborder="0" height="450" width="1080"src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3916.707446186053!2d106.67330845053782!3d10.985440558265998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3174d1206d5cfc75%3A0x2879637a6881d4e7!2zVHJ1bmcgdMOibSBDw7RuZyBuZ2jDqsyjIFRow7RuZyBUaW4gJiBUcnV54buBbiBUaMO0bmcgVOG7iW5oIELDrG5oIETGsMahbmc!5e0!3m2!1svi!2s!4v1585704842901!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>


<div class="col-md-12">
    <form  method="post" action="lienhe.php" >
      <div><p><span style="font-size: 21px">Cảm ơn Quý Khách đã quan tâm tới dịch vụ của chúng tôi.</span> <span style="font-size: 21px">Quý Khách vui lòng liên hệ trực tiếp hoặc liên hệ qua form bến dưới. Xin cảm ơn!</span></p>
      </div>

      <div class="row">
     
          <div class="col-md-6 col-sm-12 col-xs-12">
          
          <?php
                                            include"ketnoi_csdl.php";
                                            if(isset($_POST['gui']))
                                            {
                                                
                                                $hoten=$_POST['hoten'];
                                                $diachi= $_POST['diachi'];
                                                $tieude= $_POST['tieude'];
                                                $email=$_POST['email'];
                                                $noidung=$_POST['noidung'];
                                                
                                                if($hoten == "")
                                                {
                                                    echo"<script>alert('Vui lòng nhập họ tên') </script>";

                                                }
                                               
                                                else 
                                                {
                                                    $sql = "INSERT INTO lienhe(HoTen, Email,DiaChi,TieuDe,NoiDung)
                                                    VALUES('$hoten','$email','$diachi','$tieude','$noidung')";

                                                    if(mysqli_query($conn, $sql))
                                                    { 
                                                    echo"<script>alert('Gửi thành công') </script>";
                                                        echo"<script>window.location='lienhe.php'</script>";
                                                            }
                                                            else
                                                            { 
                                                                
                                                                
                                                                echo"<script>alert('Gửi thất bại') </script>";  
                                                            }  echo"<script>window.location='lienhe.php'</script>";
                                                            
                                                    }

                                                    }
                                                    ?>
         
 
              <div class="form-group">
                  <label style="font-size: 21px" for="name">Họ và Tên <span  class="per">(*)</span></label>
                  <input id="name" type="text" name="hoten" class="icon1 form-control" value="" title="Vui lòng nhập họ tên liên lạc">
              </div>
              
              <div class="form-group">
                  <label style="font-size: 21px" for="phone">Email <span  class="per">(*)</span></label>
                  <input id="phone" type="tel" name="email" class="icon3 form-control" value="" title="Vui lòng nhập điện thoại liên lạc">
              </div>
              <div class="form-group">
                  <label style="font-size: 21px" for="address">Địa chi  <span  class="per">(*)</span></label>
                  <input id="address" type="text" name="diachi" class="icon4 form-control" value="" title="Vui lòng nhập địa chỉ">
              </div>
          </div>
          <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="form-group">
                  <label style="font-size: 21px" for="subject">Tiêu đề <span  class="per">(*)</span></label>
                  <input class="icon4 form-control" value="" id="subject" name="tieude" title="Vui lòng nhập tiêu đề liên lạc">
              </div>
              <div class="form-group">
                  <label style="font-size: 21px" for="content">Nội dung liên lạc <span  class="per">(*)</span></label>
                  <textarea id="content" class="icon5 form-control" name="noidung"></textarea>
              </div>
              <div class="row liter"> 
                  <div class="col-md-6 col-sm-12 col-xs-12">
                      <div class="form-group">
                          <div class="col-right">
                              <button  type="submit" name ="gui" value="Gửi"><span style="font-size: 21px">Gửi</span></button>
                              <button  type="reset" value="Làm lại"><span style="font-size: 21px">Làm lại</span></button>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
        </div>
      </form>
    </div>
</div>
</div>
 </div>                  </div>
            </div>
                   
                   
                                
                   
                    
                    
                    
                                   
                                           
                                    
                    
    <!-- popular_courses_end-->


    <!-- testimonial_area_start -->
    
    <!-- testimonial_area_end -->

    <!-- our_courses_start -->
    
          
               
              
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
                            <p>
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