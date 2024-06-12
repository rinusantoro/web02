<?php
//memulai session
session_start();
//echo $_COOKIE["login"];

//cek session
if(!isset($_SESSION['login']))
{
header('location:./16login.php');
}
?>
<!DOCTYPEhtml>
<html>
<head>
<meta charset="utf-8">
<title>Home Remember Me</title>
</head>
<body>
<h5>Selamat datang di halaman utama website</h5>
<p><a href="./16logout.php">Logout</a></p>
</body>
</html>