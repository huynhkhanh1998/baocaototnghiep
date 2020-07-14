<?php
 include "ketnoi_csdl.php";
if(isset($_GET['id']) && isset($_GET['diem'] ) && isset($_GET['MaLop'])) {

    $id= $_GET['id'];
    $diemso=$_GET['diem'];
                   
    $malop=$_GET['MaLop'];
    if( (float) $diemso >=5)
    {
        $trangthai= 'Đạt';
    }
    else 
       $trangthai= 'Không đạt';

    $sql = "update kqua set MaHV=\"$id\",MaLop=\"$malop\",DiemSo=\"$diemso\",TrangThai=\"$trangthai\" where MaHV=$id and MaLop=$malop ";  



if(mysqli_query($conn, $sql)){}

else
echo "Không thể thêm dữ liệu vào bảng kqua: ". mysqli_error($conn);
echo"<script>history.back()</script>";
                  
                    

                          

                            }



?>