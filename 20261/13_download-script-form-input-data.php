
<?php
include "13_koneksi.php"; 
$sql = "SELECT * FROM mahasiswa";
$hasil=mysqli_query($connection,$sql);

echo("
<h2>List Mahasiswa</h2>
<br><UL>
");
while ($row=mysqli_fetch_array($hasil))
{
echo("
<LI>$row[1] &nbsp;$row[2] &nbsp; $row[3] &nbsp; $row[4]
&nbsp;</LI><br>");
}echo("</table>");


?>
