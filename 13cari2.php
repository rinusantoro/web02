<?php
echo
"<html>
<body>";
$koneksi=mysqli_connect("localhost","sonas","P@ssw0rd","lat_dbase");
//mysql_select_db("lat_dbase");
$cari=$_POST['nama'];
$cari2=$_POST['jurusan'];
$hasil=mysqli_query($koneksi,"select * from tbl_mhs where nama like
'%$cari%'or alamat like'%$cari2%'order by nama asc");
echo"<table>
<tr>
<th>NIM</th>
<th>nama</th>
<th>alamat</th>
<th>jurusan</th>
</tr>";
While($data=mysqli_fetch_array($hasil)){
echo"<tr>
<td>".$data['nama']."</td>
<td>".$data['nama']."</td>
<td>".$data['alamat']."</td>
<td>".$data['jurusan']."</td>
</tr>
</body>
</html>";
}
?>