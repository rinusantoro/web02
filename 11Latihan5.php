<?php
$con = mysqli_connect("localhost","root","","lat_dbase");
if (!$con)
{
die('Could not connect: ' . mysqli_error());
}
// mysql_select_db("lat_dbase");
// fungsi mysql_db_query sudah tidak digunakan lagi di php 7 
$hasil = mysqli_query($con,"select * from tbl_mhs");
While($data=mysqli_fetch_row($hasil))
{
echo "$data[0] $data[1] $data[2]<br>";
}
?>