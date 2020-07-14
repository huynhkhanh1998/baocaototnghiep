<?php
include "ketnoi_csdl.php";
if(isset($_GET['MaTK']))
{
	$matk= $_GET['MaTK'];
	$sql= "delete from taikhoan where MaTK=$matk";
	$rs=mysqli_query($conn,$sql);
    if($rs)
    {
    	
    	
    	
    	
    		
    		
	    
	    	
	    		echo "<script> alert('Xoá thành công'); window.location = 'QLTaiKhoan.php'; </script>";
	    	
    	
    }
}
?>  