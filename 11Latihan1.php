<?php
// hostname or ip of server
$servername='localhost';
// username and password
$dbusername='unpam';
$dbpassword='Unp4m@2021';
$link=mysqli_connect ("$servername","$dbusername","$dbpassword")
or die ( " Tidak berhasil konek ke database ");
if ($link)
{
echo "ok....koneksi berhasil!";
}
?>