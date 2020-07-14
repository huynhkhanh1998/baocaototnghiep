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
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                               Trang Quản trị
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
                                        <li class="breadcrumb-item"><a class="text-primary" href="Dashboard.php">Admin</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Thông tin lớp</li>
                                    </ol>
                                </nav>
                            </div>
                            <div class="row float-right bg-success mr-3 mt-2">
                                <button class="btn btn-success" data-toggle="modal" data-target="#addModal"><i
                                        class="fa fa-plus"></i> Thêm</button>

                                <!-- Modal thêm -->

                                <div class="modal fade" id="addModal" tabindex="-1" role="dialog"

                                    aria-labelledby="addModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h2 class="modal-title" id="addModalLabel">Thông tin lớp</h3>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                            </div>
                                            <?php
                                            include"ketnoi_csdl.php";
                                            if(isset($_POST['them']))
                                            {
                                                $malop= $_POST['malop'];
                                                $tenlop=$_POST['tenlop'];
                                                $sohv= $_POST['sohv'];
                                               
                                                $thoigianhoc=$_POST['thoigianhoc'];
                                                $str=explode("-",$_POST['thoigianhoc']);
                                                $thoigianhoc=$str[2]."-".$str[1]."-".$str[0]."-";
                                                $magv= $_POST['magv'];
                                                $maph= $_POST['maph'];
                                                
                                                


                                               
                                                if($tenlop == "")
                                                {
                                                    echo"<script>alert('Vui lòng nhập tên lớp') </script>";

                                                }
                                                else if($sohv == "")
                                                {
                                                    echo"<script>alert('Vui lòng nhập số học viên') </script>";

                                                }
                                                else if($thoigianhoc == "")
                                                {
                                                    echo"<script>alert('Vui lòng nhập ngày khai giảng') </script>";

                                                }
                                                else 
                                                {
                                                    $sql = "INSERT INTO lop(TenLop,SoHVTT,ThoiGianHoc,MaGV,MaPH)
                                                    VALUES('$tenlop','$sohv','$thoigianhoc','$magv','$maph')";
                                                if(mysqli_query($conn, $sql))
                                                { 
                                                   echo"<script>alert('Thêm thành công') </script>";
                                                    echo"<script>window.location='QLLop.php'</script>";
                                                        }
                                                        else
                                                        { 
                                                            echo "Không thể thêm dữ liệu vào bảng user: ". mysqli_error($conn);   
                                                            /*echo"<script>alert('Thêm thất bại') </script>";  */
                                                         }  /*echo"<script>window.location='TTHocVien.php'</script>";*/
                                                         
                                                }

                                            }
                                             ?>
                                            <div class="modal-body">
                                                <form  action="QLLop.php" method="post">
                                                    <div class="form-group">
                                                        <label class="col-form-label font-weight-bold">Mã lớp<span class="text-danger">
                                                         (*)</span></label>
                                                        <input type="text" name ="malop" readonly  class="form-control">
                                                    </div>
                                                    
                                                    
                                                    <div class="form-group">
                                                        <label class="col-form-label font-weight-bold">Tên lớp</label>
                                                        <input type="text" name ="tenlop" class="form-control">
                                                    </div>
                                                    
                                                     <div class="form-group">
                                                        <label class="col-form-label font-weight-bold">Số học viên</label>
                                                        <input type="text" name ="sohv" class="form-control">
                                                    </div>
                                                  
                                                    
                                                    <div class="form-group">
                                                        <label class="col-form-label font-weight-bold">Ngày khai giảng</label>
                                                        <input type="text" name ="thoigianhoc" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-form-label font-weight-bold">Mã giáo viên</label>
                                                        <select class="form-control" name="magv">
                                                        <?php
                                                         $s="select * from giaovien";
                                                         $re=mysqli_query($conn, $s);  
                                                         if(mysqli_num_rows($re) > 0){  
                                                         while($r = mysqli_fetch_array($re)){
                                                          
                                                               echo " <option value=\"".$r['MaGV']."\">".$r['MaGV']." - ".$r['TenGV']."</option>  ";
                                                         }
                                                        }
                                                                ?> 
                                                                                        
                                                                                                         
                                                        </select>
                                                    </div>
                                                   
                                                   
                                                    <div class="form-group">
                                                        <label class="col-form-label font-weight-bold">Mã phòng học</label>
                                                        <select class="form-control" name="maph">
                                                        <?php
                                                         $x="select * from phonghoc";
                                                         $ra=mysqli_query($conn, $x);  
                                                         if(mysqli_num_rows($ra) > 0){  
                                                         while($l = mysqli_fetch_array($ra)){
                                                          
                                                               echo " <option value=\"".$l['MaPH']."\">".$l['MaPH']." - ".$l['TenPH']."</option>  ";
                                                         }
                                                        }
                                                                ?>  
                                                                                        
                                                                                                         
                                                        </select>
                                                    </div>
                                                    <div class="modal-footer">
                                                <button type="button" class="btn btn-danger"
                                                    data-dismiss="modal">Đóng</button>
                                                <button type="submit" name="them" class="btn btn-success">Thêm</button>
                                            </div>
                                                    
                                                    
                                                    
                                                   
                                                     
                                                      
                                                </form>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>

                                <!-- End modal thêm -->

                            </div>

                            <!-- Search bar -->

                            <div class="navbar-nav col-3 float-right">                               
                            <form class="form-inline active-purple-4">
                             <input class="form-control form-control-sm mr-3 w-75" type="text" id="tukhoa" name ="tukhoa" placeholder="Bạn muốn tìm gì ?..."
                              aria-label="Search">
                                <button   class="fa fa-search" > </button>
                            </form>                                                                  
                            </div>

                            <!-- End search bar -->

                        </div>
                        <!-- <div class="table table-reponsive"> -->
                        <div class="card-body">
                            <div class="row table-responsive mx-auto" style="font-size: 14px">
                                <table class="table table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">STT</th>
                                            
                                            <th scope="col">Tên lớp</th>
                                            <th scope="col">Tên giáo viên</th>
                                            <th scope="col">Phòng học</th>
                                            <th scope="col">Số học viên</th>
                                            <th scope="col">Ngày khai giảng</th>
                                            <th scope="col">Thao tác</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php

                                        if(isset( $_GET["tukhoa"]))
                                        {
                                            $tukhoa=$_GET["tukhoa"];
                                            $sql = "SELECT lop.*,TenPH,TenGV FROM lop,phonghoc,giaovien where lop.MaPH = phonghoc.MaPH and lop.MaGV = giaovien.MaGV and lop.TenLop  like  N'%$tukhoa%'"; 

                                        }
                                        else
                                        {
                                            $sql = "SELECT lop.*,TenPH,TenGV FROM lop,phonghoc,giaovien where lop.MaPH = phonghoc.MaPH and lop.MaGV = giaovien.MaGV ";

                                        }
                                    
                            
                            $retval=mysqli_query($conn, $sql);  
  
                            if(mysqli_num_rows($retval) > 0){  
                                 $i=1;
                             while($row = mysqli_fetch_array($retval)){  
                              echo "
 
                                        <tr>
                                            <th scope=\"row\">".$i++."</th>
                                            <td>".$row['TenLop']."</td>
                                            <td>".$row['TenGV']."</td>
                                            <td>".$row['TenPH']."</td>
                                            <td>".$row['SoHVTT']."</td>
                                            <td>".date("d-m-Y",strtotime($row['ThoiGianHoc']))."</td>
                                            
                                          
                                           
                                            
                                           
                                       
                                           
                                            
                                                                                     
                                            <td>
                                            <span data-toggle=\"modal\" data-target=\"#editModal\">
                                            <a href=\"SuaLop.php?MaLop=".$row['MaLop']."&MaGV=".$row['MaGV']."&MaPH=".$row['MaPH']."\" class=\"text-success\" data-toggle=\"tooltip\"
                                                data-placement=\"left\" data-html=\"true\" title=\"Sửa\"><i
                                                    class=\"fa fa-edit fa-lg\"></i></a>
                                        </span>
                                                

                                                
                                                
                                                
                                        <span>
                                        <a href=\"javascript:xacnhanxoa('XoaLop.php?MaLop=".$row['MaLop']."&MaGV=".$row['MaGV']."&MaPH=".$row['MaPH']."')\" class=\"text-danger ml-3\" title=\"Xóa\"><i
                                                class=\"fa fa-trash-alt fa-lg\"></i></a>
                                    </span>

                                                

                                              
                                            </td>
                                        </tr>"; }}
                                        ?>
                                        
                                    </tbody>
                                </table>
                                <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog"
                                                    aria-labelledby="deleteModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h2 class="modal-title" id="deleteModalLabel">Xóa lớp
                                                                    </h3>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                            </div>

                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger float-left"
                                                                    data-dismiss="modal">Hủy</button>
                                                                <button type="button" class="btn btn-dark">Xóa</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                <div class="modal fade" id="editModal" tabindex="-1" role="dialog"
                                                    aria-labelledby="editModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h2 class="modal-title" id="editModalLabel">Sửa TT Lớp
                                                                    </h3>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                            </div>
                                                            <div class="modal-body">
                                                              <form>
                                                    <div class="form-group">
                                                        <label class="col-form-label font-weight-bold">Mã lớp<span class="text-danger"> 
                                                        (*)</span></label>
                                                        <input type="text" class="form-control">
                                                    </div>
                                                    
                                                    
                                                    <div class="form-group">
                                                        <label class="col-form-label font-weight-bold">Tên lớp</label>
                                                        <select class="form-control">
                                                                <option></option>                                      
                                                        </select>
                                                    </div>
                                                     <div class="form-group">
                                                        <label class="col-form-label font-weight-bold">Tên phòng học</label>
                                                        <select class="form-control">
                                                                <option></option>                                      
                                                        </select>
                                                    </div>
                                                     <div class="form-group">
                                                        <label class="col-form-label font-weight-bold">Số học viên</label>
                                                        <select class="form-control">
                                                                <option></option>                                      
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="col-form-label font-weight-bold">Thời gian học</label>
                                                        <select class="form-control">
                                                                <option></option>                                      
                                                        </select>
                                                    </div>
                                                    
                                                     <div class="form-group">
                                                        <label class="col-form-label font-weight-bold">Thứ học</label>
                                                        <select class="form-control">
                                                                <option></option>                                      
                                                        </select>
                                                    </div>
                                                     
                                                    
                                                    
                                                    
                                                    
                                                   
                                                     
                                                      
                                                </form>
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-danger"
                                                                    data-dismiss="modal">Đóng</button>
                                                                <button type="button"
                                                                    class="btn btn-success">Cập nhật</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                            </div>
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
    <script src="Content/assets/vendor/charts/morris-bundle/morris.js"></script>
    <!-- chart c3 js -->
    <script src="Content/assets/vendor/charts/c3charts/c3.min.js"></script>
    <script src="Content/assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="Content/assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="Content/assets/libs/js/dashboard-ecommerce.js"></script>

</body>
<script>
function xacnhanxoa(str)
{
    s = confirm('Bạn chắc chắn muốn xóa?');
    if(s!="0")
    {
        window.location=str;
    }
}
</script>

</html>
