<?php
include "ketnoi_csdl.php";
if(isset($_GET['MaHV']) && isset( $_GET['MaLop']))
{
    $mahv= $_GET['MaHV'];
    $malop=$_GET['MaLop'];
    $sql= "delete from kqua where MaHV=$mahv and MaLop=$malop";
    
    
	$rs=mysqli_query($conn,$sql);
    if($rs)
    {
    	
    	
    		
	    		echo "<script> alert('Xoá thành công'); window.location='QLDiem.php?tk=Tìm+kiếm&malop=$malop'; </script>";
	    	
    	
    }
}


?>  