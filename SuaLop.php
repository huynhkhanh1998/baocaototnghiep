<!doctype html>
<html>

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
<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
    <title> Hệ thống quản lý đào tạo</title>
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
                        <li class="nav-item">
                        <a class="nav-link active" href="index.php"><i class="fas fa-home"></i>Xin chào duykhanh1, Thoat</a>
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
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Quản trị
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="#"><i class="fas fa-home"></i>Dashboard</a>
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
                                                

                                                <!-- Modal sửa -->
                                                <div class="card">
                        <div class="card-header">
                            <div class="row float-left" style="font-size: 30px;">
                                <nav aria-label="breadcrumb">
                                
                                    <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a class="text-primary" href="Dashboard.php">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Cập nhật thông tin lớp </li>
                                        
                                    </ol>
                                </nav>
                            </div>
                            <?php
                            include "ketnoi_csdl.php";
                            if(isset($_GET['MaLop']) && isset($_GET['MaGV'])&& isset($_GET['MaPH'])){
                            $id=$_GET['MaLop'];
                            $gv=$_GET['MaGV'];
                            $ph=$_GET['MaPH'];

                            $sql = "select * from lop where MaLop=$id and MaGV=$gv and MaPH=$ph";  
                            $query = mysqli_query($conn,$sql);
                            $row = mysqli_fetch_array($query);
                            $malop= $row['MaLop'];
                            $tenlop=$row['TenLop'];
                                               
                            
                            $sohv= $row['SoHVTT'];
                            $thoigianhoc= $row['ThoiGianHoc'];
                           
                            $maph= $row['MaPH'];
                            $magv=$row['MaGV'];
                            
                            }
                            if(isset($_POST['luu']))
                            {
                                
                                $malop= $_POST['malop'];
                                $tenlop=$_POST['tenlop'];
                                               
                              
                             
                                 $sohv= $_POST['sohv'];
                                 $thoigianhoc=$_POST['thoigianhoc'];
                                $str=explode("-",$_POST['thoigianhoc']);
                                $thoigianhoc=$str[2]."-".$str[1]."-".$str[0]."-";
                               
                                $maph= $_POST['maph'];
                                 $magv= $_POST['magv'];

                            $sql = "update lop set MaLop=\"$malop\",TenLop=\"$tenlop\",SoHVTT=\"$sohv\",ThoiGianHoc=\"$thoigianhoc\",MaGV=\"$magv\",MaPH=\"$maph\"  where MaLop=$malop";  
                          /* $sql1="update phonghoc set TenPH=\"$tenph\" where MaPH=\"$maph\"" ;*/
                   
                            if(mysqli_query($conn, $sql))
                    { 
                        echo"<script>alert('Cập nhật thành công') </script>";
                        echo"<script>window.location='QLLop.php'</script>";
                        
                    } 
                   /* if(mysqli_query($conn, $sql1))
                    { 
                        echo"<script>alert('Cập nhật thành công') </script>";
                        echo"<script>window.location='QLLop.php'</script>";
                        
                    } */
                    else
                    {
                        
                        echo"<script>alert('Cập nhật thất bại') </script>";
                        echo"<script>window.location='QLLop.php'</script>";
                    }
                    

                        
mysqli_close($conn);  

                            }
                            
                           
                            ?>

                                         <form  action="SuaLop.php" method="post">           
                                         <div class="form-group" style="width: 30%">

                                                        <label class="col-form-label font-weight-bold">Mã lớp</label>
                                                        <input  type="text"  name="malop" readonly   value ="<?=$malop?>" class="form-control">
                                                    </div>
                                
                                                    
                                                    <div class="form-group" style="width: 30%">
                                                        <label class="col-form-label font-weight-bold">Tên lớp</label>
                                                        <input type="text" name ="tenlop"  value ="<?=$tenlop?>" class="form-control">
                                                    </div>
                                                     
                                                     <div class="form-group" style="width: 30%">
                                                        <label class="col-form-label font-weight-bold">Số học viên</label>
                                                        <input type="text" name ="sohv"  value ="<?=$sohv?>" class="form-control">
                                                    </div>
                                                    
                                                   
                                                    <div class="form-group"style="width: 30%">
                                                        <label class="col-form-label font-weight-bold">Ngày khai giảng</label>
                                                        <input type="text" name ="thoigianhoc"  value ="<?=$thoigianhoc?>" class="form-control">
                                                    </div>
                                                   
                                                    
                                                    
                                                      
                                                    
                                                    
                                                   
                                                    <div class="form-group"style="width: 30%">
                                                        <label class="col-form-label font-weight-bold">Mã phòng học</label>
                                                        <select class="form-control"  name="maph">
                                                        <?php
                                                          if(isset($_GET['MaPH'])){
                                                            $id=$_GET['MaPH'];
                                                          }
                                                         $x="select * from phonghoc";
                                                         $ra=mysqli_query($conn, $x);  
                                                         if(mysqli_num_rows($ra) > 0){  
                                                         while($l = mysqli_fetch_array($ra)){
                                                            echo " <option ";
                                                            if($l['MaPH']==$id) echo "selected=''";
                                                          
                                                               echo " value=\"".$l['MaPH']."\">".$l['MaPH']." - ".$l['TenPH']."</option>  ";
                                                         }
                                                        }
                                                                ?>                                       
                                                        </select>
                                                    </div>
                                                    <div class="form-group"style="width: 30%">
                                                        <label class="col-form-label font-weight-bold">Mã giáo viên</label>
                                                        <select class="form-control"  name="magv">
                                                        <?php
                                                         if(isset($_GET['MaGV'])){
                                                            $id=$_GET['MaGV'];
                                                         }
                                                         $s="select * from giaovien";
                                                         $re=mysqli_query($conn, $s);  
                                                         if(mysqli_num_rows($re) > 0){  
                                                         while($r = mysqli_fetch_array($re)){
                                                          
                                                               echo " <option ";
                                                               if($r['MaGV']==$id) echo "selected=''";
                                                               echo" value=\"".$r['MaGV']."\">".$r['MaGV']." - ".$r['TenGV']."</option>  ";
                                                         }
                                                        }
                                                                ?>                                            
                                                        </select>
                                                    </div>
                                                    <div style ="margin-left: 2px">
                                                
                                                    
                                                    <a class="btn btn-danger" href="QLLop.php">Đóng</a>
                                                <button type="submit" name="luu" class="btn btn-success">Lưu Lại</button>
                                            </div>
                                                    
                                                    
                                                    
                                                   
                                                     
                                                      
                                                </form>
                                                            </div> 
                                                            
                                                    </div>
                                                </div>

                                               
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
    <script src="Content/assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="Content/assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="Content/assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="Content/assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="Content/assets/libs/js/dashboard-ecommerce.js"></script>

</body>

</html>
