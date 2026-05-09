<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysqli_error());
}
mysqli_select_db($con,"lat_dbase");
$input = mysqli_query($con,"INSERT INTO tbl_mhs (FirstName, LastName, Age)
VALUES ('Sonasa', 'Rinusantoro', '30')");

mysqli_query($con,"INSERT INTO tbl_mhs (FirstName, LastName, Age)
VALUES ('Abu', 'Bakar', '23')");

if($input){
    echo "Input data berhasil dibuat";
}

mysqli_close($con);
?>