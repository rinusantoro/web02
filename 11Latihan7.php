<?php
$con = mysqli_connect("localhost","unpam","Unp4m@2021");
mysqli_select_db($con,"lat_dbase");
$hasil=mysqli_query($con, "select * from tbl_mhs");
$hit=mysqli_num_rows($hasil);
echo "jumlah record $hit ";
?>