<!doctype html>
<html>
<?php
//Khai báo sử dụng session
session_start();
 
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
 
 ?>

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="Content/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="Content/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="Content/assets/libs/css/style.css">
    <link rel="stylesheet" href="Content/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="Content/assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="Content/assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet"
        href="Content/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="Content/assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="Content/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>Hệ thống quản lý đào tạo</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="Dashboard.php">QUẢN LÝ ĐÀO TẠO</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <li class="nav-item" >
                   
                               
                        
                        <?php
                                  echo"  <a href=\"#\">";
                                        
                                      echo"  <span style=\"font-size: 15px\"> ";
                                        if(isset($_SESSION['ngqt'])) echo "Xin chào, ".$_SESSION['ngqt']; echo" </span>";

                                  echo"  </a>"; ?>
                             

                        
                        </li>

                        <!-- <li class="nav-item text-center">
                            <div id="custom-search" class="top-search-bar">
                                <h5>Quản trị viên</h5>
                            </div>
                        </li> -->

                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Admin</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                               Trang quản trị
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="#"><i class="fas fa-home"></i>ADMIN</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="TTHocVien.php"><i class="fa fa-list" aria-hidden="true"></i>Quản lý
                                    thông tin học viên</a>
                            </li>
                            
                            <li class="nav-item ">
                                <a class="nav-link" href="TTGiaoVien.php"><i class="fa fa-list" aria-hidden="true"></i>Quản lý
                                    thông tin giáo viên</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="QLLop.php"><i class="fa fa-list" aria-hidden="true"></i>Quản lý
                                    thông tin lớp</a>
                            </li>
                            
                            <li class="nav-item">
                                <a class="nav-link" href="QLDangKy.php"><i class="fa fa-fw fa-rocket"></i>Quản lý đăng ký
                                    </a>

                            </li>
                            
                            
                            <li class="nav-item">

                                <a class="nav-link" href="QLDiem.php"><i class="far fa-file"></i>Quản lý điểm
                                    </a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                                    data-target="#submenu-1-2" aria-controls="submenu-1-2"><i
                                        class="far fa-calendar-minus"></i>Quản lý thống kê</a>
                                <div id="submenu-1-2" class="collapse submenu">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="QLThongKe.php">Danh sách học viên được cấp giấy chứng nhận</a>
                                        </li>
                                        

                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="QLTaiKhoan.php"><i class="fa fa-fw fa-rocket"></i>Quản lý tài khoản</a>

                            </li>
                            <?php 
                                        if(isset($_SESSION['ngqt']))
                                        {
                                          
                                            echo" <li class=\"nav-item\"> <a class=\"nav-link\" href=\"Thoat.php\"> <i class=\"fas fa-home\"></i>THOÁT</a> </li>"; 
                                        }
                                        else  echo" <li> <a href=\"Login.php\">ĐĂNG NHẬP</a> </li>";
                                        
                                        ?>
                          
                      

                           

                            
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">
                    <!-- Noi dung -->

                    <div class="row mb-3"></div>
                    <div class="card">
                        <div class="card-header">
                            <div class="row float-left" style="font-size: 20px;">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a class="text-primary" href="Dashboard.php">TRUNG TÂM CNTT & TRUYỀN THÔNG TỈNH BÌNH DƯƠNG</a></li>                    
                                    </ol>
                                </nav>
                            </div>
                            

                            <!-- Search bar -->

                            <div class="navbar-nav col-3 float-right">                               
                                        </div>

                            <!-- End search bar -->

                        </div>
                        <!-- <div class="table table-reponsive"> -->
                        <div class="card-body" style="width:100%" >
                           <h1>Chào mừng đến với trang quản lý của Admin</h1>
                           
                        </div>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <!-- div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                             Copyright © 2019 Team 01. All rights reserved.
                        </div>
                    </div>
                    
                </div>
            </div> -->
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->

    <script src="Scripts/jquery-1.10.2.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/ui-lightness/jquery-ui.css" rel="stylesheet" />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
    <!-- jquery 3.3.1 -->
    <script src="Content/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="Content/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <!-- slimscroll js -->
    <script src="Content/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="Content/assets/libs/js/main-js.js"></script>
    <!-- chart chartist js -->
    <script src="Content/assets/vendor/charts/chartist-bundle/chartist.min.js"></script>
    <!-- sparkline js -->
    <script src="Content/assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <!-- morris js -->
    <script src="Content/assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <!-- chart c3 js -->
    <script src="Content/assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="Content/assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="Content/assets/vendor/charts/c3charts/C3chartjs.js"></script>

</body>

</html>