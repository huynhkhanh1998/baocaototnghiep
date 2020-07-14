<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quanlydaotao";
$conn = mysqli_connect($servername,$username,$password,$dbname);
mysqli_set_charset($conn,'UTF8');
if(!$conn){
   die('Kết nối thất bại:'.mysqli_connect_error());
}
?>