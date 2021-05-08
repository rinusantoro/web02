<?php
$con = mysqli_connect("localhost","unpam","Unp4m@2021");
mysqli_select_db($con,"lat_dbase");
$hasil=mysqli_query($con, "select * from tbl_mhs");
While($data=mysqli_fetch_array($hasil))
{
echo "$data[FirstName] $data[LastName] $data[Age]<br>";
}
?>