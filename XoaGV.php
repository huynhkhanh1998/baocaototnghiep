<?php
include "ketnoi_csdl.php";
if(isset($_GET['MaGV']))
{
	$magv= $_GET['MaGV'];
	$sql= "delete from giaovien where MaGV=$magv";
	$rs=mysqli_query($conn,$sql);
    if($rs)
    {
    	
    	
    	
    	
    		
    		
	    
	    	
	    		echo "<script> alert('Xoá thành công'); window.location = 'TTGiaoVien.php'; </script>";
	    	
    	
    }
}
?>  