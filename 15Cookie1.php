<?php
$value = 'muhammad';
$value2 = 'Muhammad Hendrik';
setcookie("username", $value);
setcookie("namalengkap", $value2, time()+3600); /* expire in 1
hour */
echo "<h1>Ini halaman pengesetan cookie</h1>";
echo "<h2>Klik <a href='15Cookie2.php'>di sini</a> untuk
pemeriksaan cookies</h2>";
?>