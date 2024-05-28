<?php
$halaman = 10;
$page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
$mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;

$koneksi=mysqli_connect("localhost","sonasa","P@ssw0rd","lat_dbase");
$hasil=mysqli_query($koneksi,"select * from tbl_mhs order by nim LIMIT $mulai, $halaman"); //menampilkan dari besarke kecil
$total = mysqli_num_rows($hasil);
$pages = ceil($total/$halaman); 

echo"<table>
<tr>
<th>No</th>
<th>NIM</th>
<th>Nama</th>
<th>Alamat</th>
<th>Jurusan</th>
</tr>";
While($data=mysqli_fetch_array($hasil)){
echo "<tr>
<td>".$no++."</td>
<td>".$data['nim']."</td>
<td>".$data['nama']."</td>
<td>".$data['alamat']."</td>
<td>".$data['jurusan']."</td>
</tr>
";
}
?>

<div class="">
  <?php for ($i=1; $i<=$pages ; $i++){ ?>
  <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>

<?php
}
?>

</div>
</body>
</html>