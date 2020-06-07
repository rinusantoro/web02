<?php
$con = mysqli_connect("localhost","root","");
if (!$con)
{
die('Could not connect: ' . mysqli_error());
}

$db = "artikel_db";

//Membuat database artikel_db
$sql_create_db = "CREATE DATABASE $db";
$query = mysqli_query($con,$sql_create_db);

if($query){
echo "Database  berhasil dibuat";
}

mysqli_select_db($con,$db);

//Membuat tabel artikels
$sql_insert = "CREATE TABLE artikels (
    articleID  int(10),
    judul  varchar(100),
    penulis  varchar(100),
    lead  varchar(255),
    content text,
    waktu date,
    PRIMARY KEY (articleID)
)";

$query_insert = mysqli_query($con,$sql_insert);

if($query_insert){
echo "Tabel  berhasil dibuat";
}

?>

