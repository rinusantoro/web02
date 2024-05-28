<?php
//koneksi database
include '14koneksi.php';
?>
<html>
<body>
<h2>Tabel1</h2>
<table style=>
<tr>
<th>kode</th>
<th>nama barang</th>
<th>jumlah</th>
</tr>
<?php
$tabel1=mysqli_query($koneksi,"select * from table_1");
While($dataku=mysqli_fetch_row($tabel1))
echo"<tr>
<td>$dataku[0]</td>
<td>$dataku[1]</td>
<td>$dataku[2]</td>
</tr>";
?>
</table>
<h2>Tabel2</h2>
<table style=>
<tr>
<th>kode</th>
<th>nama barang</th>
<th>jumlah</th>
</tr>


<?php
$tabel2=mysqli_query($koneksi,"select * from table_2");
While($data2=mysqli_fetch_row($tabel2))
echo"<tr>
<td>$data2[0]</td>
<td>$data2[1]</td>
<td>$data2[2]</td>
</tr>";
?>
</table>
<h2>kirim barang</h2>
<form action="14aksi_form.php" method="post">
<label>kode barang:</label>
<select name="kode">
<?php
$tabel1=mysqli_query($koneksi,"select * from table_2");
While($data1=mysqli_fetch_row($tabel1))
echo'<option value="'.$data1[0].'">'.$data1[0].'/'.$data1[1].'</option>';
?>
</select><br><br>
<label>jumlah:</label><input type="number"name="jumlah"><br><br>
<input type="submit" value="kirim">
</form>
</body>
</html>
