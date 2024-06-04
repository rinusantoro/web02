<?php
//static variabel
$user='sonasa';
$pass=md5('sonasa');
//memulai session
session_start();
//cek login
if(isset($_COOKIE['login']))
{
if($_COOKIE['login']==$user)
{
//jika valid,set session login
$_SESSION['login']=TRUE;
header('location:./16home.php');
exit();
}
}
?>
<!DOCTYPEhtml>
<html>
<head>
<meta charset="utf-8">
<title>Login Remember Me</title>
</head>
<body>
<form action="16aksi.php" method="post">
<p><label for="username">Username:</label><input type="text" name = "username" id="username"/></p>
<p><label for="password">Password:</label><input type="password" name = "password" id="password"/></p>
<p><label for="remember"><input type="checkbox" name="remember" value="true" id="remember"/>Remember Me</label></p>
<p>
<button type="submit"name="login">Login</button>
<button type="reset"name="reset">Reset</button>
</p>
</form>
</body>
</html>