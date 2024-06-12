<?php
$value = 'joko';
$value2 = 'joko susilo';
setcookie("username",$value);
setcookie("namalengkap",$value2,time()+3600);/*expire in 1 hour*/
echo"<h1>Halaman Ubah cookie</h1>";
echo"<h2>Klik<a href='16Lihat_Cookie.php'>disini</a>untuk lihat cookie</h2>";
?>