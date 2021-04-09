<HTML>
<HEAD>
<TITLE> Penggunaan Split </TITLE>
</HEAD>
<BODY>
<?php
$tanggal = "17-05-2010";
//Split This function was DEPRECATED in PHP 5.3.0, and REMOVED in PHP 7.0.0.
//Alternatives to this function include: explode
list($hari, $bulan, $tahun) = explode("-", $tanggal);

echo "Hari = $hari";
echo "<br />";
echo "Bulan = $bulan";
echo "<br />";
echo "Tahun = $tahun";
?>
</BODY>
</HTML>