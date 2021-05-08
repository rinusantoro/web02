<?php
$con = mysqli_connect("localhost","unpam","Unp4m@2021");
if (!$con)
{
die('Could not connect: ' . mysqli_error());
}
mysqli_select_db($con,"lat_dbase");
$input = mysqli_query($con,"INSERT INTO tbl_mhs (FirstName, LastName, Age)
VALUES ('NAKKI', 'ALIEF', '23'),('NOFIAN','AFRIZAL','23')");

//mysqli_query($con,"INSERT INTO tbl_mhs (FirstName, LastName, Age)
//VALUES ('Glenn', 'Gandari', '32')");

if($input){
    echo "Input data berhasil dibuat";
}

mysqli_close($con);
?>