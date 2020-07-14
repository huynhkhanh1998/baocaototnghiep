<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
   <!--Made with love by Mutiullah Samim -->
   
	<!--Bootsrap 4 CDN-->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

	<!--Custom styles-->
	<link rel="stylesheet" type="text/css" href="Login.css">
</head>
<?php
//Khai báo sử dụng session
session_start();
 
//Khai báo utf-8 để hiển thị được tiếng việt
header('Content-Type: text/html; charset=UTF-8');
 
//Xử lý đăng nhập
if (isset($_POST['dangnhap'])) 
{
    //Kết nối tới database
    include('ketnoi_csdl.php');
     
    //Lấy dữ liệu nhập vào
    $username = addslashes($_POST['txtUsername']);
    $password = addslashes($_POST['txtPassword']);
     
    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!$username || !$password) {
		
		echo"<script>alert('Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu') </script>";
		echo"<script>window.location='login.php'</script>";
        exit;
    }
     
    
    //Kiểm tra tên đăng nhập có tồn tại không
    $query = mysqli_query($conn,"SELECT TenDangNhap , MatKhau,Quyen  FROM taikhoan WHERE TenDangNhap='$username'");
    if (mysqli_num_rows($query) == 0) {
		
		echo"<script>alert('Tên đăng nhập này không tồn tại') </script>";
		echo"<script>window.location='login.php'</script>";
        exit;
    }
     
    //Lấy mật khẩu trong database ra
    $row = mysqli_fetch_array($query);
     
    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($password  != ($row['MatKhau'])) {
		echo"<script>alert('Mật khẩu không đúng') </script>";
		echo"<script>window.location='login.php'</script>";
        exit;
	}
	
	 if ($row['Quyen']==1)
	 {
		  //Lưu tên đăng nhập
	 $_SESSION['ngqt'] = $username;
		echo"<script>window.location='Dashboard.php'</script>";
    
	 }
	 else if ($row['Quyen']==0)
	 {
		$_SESSION['hv'] = $username;
		echo"<script>window.location='index.php'</script>";
    
	 }
   
	 die(); 
}
?>
<body>
<div class="container">
	<div class="d-flex justify-content-center h-100">
		<div class="card">
			<div class="card-header">
				<h3>Đăng nhập hệ thống</h3>
				<div class="d-flex justify-content-end social_icon">

				</div>
			</div>
			<div class="card-body">
				<form action="login.php" method="post">
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text" style="background-color:#0D8DD8"><i class="fas fa-user"></i></span>
						</div>
						<input type="text" id="inputEmail" name="txtUsername" class="form-control" placeholder="tên đăng nhập">

					</div>
					<div class="input-group form-group">
						<div class="input-group-prepend">
							<span class="input-group-text" style="background-color:#0D8DD8"><i class="fas fa-key"></i></span>
						</div>
						<input type="password"  id="inputPassword" name="txtPassword"  class="form-control" placeholder="mật khẩu">
					</div>
					<div class="form-group form-check text-white">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Ghi nhớ?</label>
                      </div>
					<div class="form-group">
						<input type="submit" value="Đăng nhập" name="dangnhap" style="background-color:#0D8DD8" class="btn float-right login_btn text-white">
					</div>
				</form>
			</div>
			<div class="card-footer">

				<div class="d-flex justify-content-center">
                                        				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>