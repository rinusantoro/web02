<?php
$con = mysqli_connect("localhost","unpam","Unp4m@2021","lat_dbase");
//$con = mysqli_connect("localhost","unpam","Unp4m@2021");
if (!$con)
{
die('Could not connect: ' . mysqli_error());
}
//mysqli_select_db($con,"lat_dbase");
mysqli_query($con,"UPDATE tbl_mhs SET Age = '36'
WHERE FirstName = 'Karina' AND LastName = 'Suwandi'");
mysqli_close($con);
?>