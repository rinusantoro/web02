<?php
$conn = mysqli_connect("localhost","root","");
$dbname = "lat_dbase";
$sql = "CREATE DATABASE $dbname";
$cek=mysqli_query($conn,$sql) or die("Couldn't Create Database: $dbname");  

if($cek){
  echo "Database $dbname berhasil dibuat";
}
?>