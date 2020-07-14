<?php
                                        
                                        include"ketnoi_csdl.php";
                                        $output = '';
                                      
                                    

                                        if(isset($_POST['btnExport'])){

                                            
                                                            
                                            $sql = "select kqua.*,TenLop,hocvien.*,TenCQ from coquan,kqua,lop,hocvien where hocvien.MaCQ=coquan.MaCQ and kqua.MaLop=lop.Malop and kqua.MaHV =hocvien.MaHV and DiemSo >= 5  and lop.MaLop like '39'";
                                               /* $sql = "select TenHV,TenCQ,NgaySinh,DiaChi,DiemSo from coquan,kqua,hocvien where hocvien.MaCQ=coquan.MaCQ and kqua.MaHV =hocvien.MaHV and DiemSo >= 5 ";*/
                                                $result = mysqli_query($conn, $sql);
                                                $num = mysqli_num_rows($result);
                                               
                                            if(mysqli_num_rows($result) > 0){
                                              
                                               
                                            
                                                $output .= '
                                                <table class= "table" bordered= "1">
                                                <tr>
                                               
                                              

                                                <th> Tên học viên </th>
                                                <th> Tên cơ quan </th>
                                                <th> Ngày sinh </th>
                                                <th> Địa chỉ </th>
                                                <th> Điểm số </th>

                                                </tr>

                                                ';
                                                while ($row = mysqli_fetch_array($result)) {
                                               
                                                    $output .= '
                                                    <tr>
                                                    
                                                    <td>'.$row["TenHV"].'</td>
                                                    <td>'.$row["TenCQ"].'</td>
                                                    <td>'.date("d-m-Y",strtotime($row['NgaySinh'])).'</td>
                                                    <td>'.$row["DiaChi"].'</td>
                                                    <td>'.$row["DiemSo"].'</td>
                        
                                                   
                                                   
                                                    </tr>

                                                    ';
                                                }
                                           
                                             
                                              
                                                $output .= '</table>';
                                                header('Content-Type: application/xls');
                                                header('Content-Disposition: attachment; filename=Export_DSHV.xls');
                                               
                                                echo $output;
                                                
                                                
                                               
                                                
                                                
                                                

                                                
                                            }

                                            
                                        }
                                      
                                        ?>
                                        