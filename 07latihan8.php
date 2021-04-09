<HTML>
<HEAD>
<TITLE> Penggunaan Join </TITLE>
</HEAD>
<BODY>
<?php
$var = array('18', '11', '2010');
// Fungsi join() identik dengan fungsi implode().
$tanggal = join("/", $var);
echo "$tanggal";
?>
</BODY>
</HTML>