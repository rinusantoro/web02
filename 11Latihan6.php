<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"lat_dbase");
$hasil=mysqli_query($con, "select * from tbl_mhs");
While($data=mysqli_fetch_array($hasil))
{
echo "$data[FirstName] $data[LastName] $data[Age]<br>";
}
?>