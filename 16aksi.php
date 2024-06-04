<?php
//static variabel
$user='admin';
$pass=md5('admin');
//memulai session
session_start();
//tampung data dari form
$username=$_POST['username'];
$password=$_POST['password'];
//cek login
if($username==$user && MD5($password)==$pass)
{
//set session
$_SESSION['login']=TRUE;
//cek remember me
if(isset($_POST['remember']))
{
//set waktu saat ini
$time=time();
//set cookie
setcookie('login',$user,$time+3600);
}
//redirect ke halaman utama
header('location:./16home.php');
exit();
}else{
header('location:./16login.php');
}
?>