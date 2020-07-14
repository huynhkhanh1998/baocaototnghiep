<?php
include "ketnoi_csdl.php";
if(isset($_GET['MaLop']) && isset( $_GET['MaGV'])&& isset( $_GET['MaPH']))
{
    $magv= $_GET['MaGV'];
	$malop=$_GET['MaLop'];
	$maph=$_GET['MaPH'];
    $sql= "delete from lop where MaLop=$malop and MaGV=$magv and MaPH=$maph";
    
    
	$rs=mysqli_query($conn,$sql);
    if($rs)
    {
    	
    	
    		
	    		echo "<script> alert('Xoá thành công'); window.location = 'QLLop.php'; </script>";
	    	
    	
    }
}


?>  