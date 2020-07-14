<?php
include "ketnoi_csdl.php";
if(isset($_GET['MaHV']) && isset( $_GET['MaCQ']))
{
    $mahv= $_GET['MaHV'];
    $macq=$_GET['MaCQ'];
    $sql= "delete from hocvien where MaHV=$mahv and MaCQ=$macq";
    
    
	$rs=mysqli_query($conn,$sql);
    if($rs)
    {
    	
    	
    		
	    		echo "<script> alert('Xoá thành công'); window.location = 'TTHocVien.php'; </script>";
	    	
    	
    }
}


?>  