<?php
//kết nối CSDL
$conn = mysqli_connect("localhost","root", "", "csdl_dangnhap");
if(mysqli_connect_error())
   {
	echo "Không thể kết nối đến MySQL: ". mysqli_connect_error();
	}
?>