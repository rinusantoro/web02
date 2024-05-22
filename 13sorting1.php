<?php
$koneksi=mysqli_connect("localhost","sonasa","P@ssw0rd","lat_dbase");
$hasil=mysqli_query($koneksi,"select * from tbl_mhs order by nim asc"); //menampilkan dari besarke kecil
echo"<table>
<tr>
<th>NIM</th>
<th>Nama</th>
<th>Alamat</th>
<th>Jurusan</th>
</tr>";
While($data=mysqli_fetch_array($hasil)){
echo "<tr>
<td>".$data['nim']."</td>
<td>".$data['nama']."</td>
<td>".$data['alamat']."</td>
<td>".$data['jurusan']."</td>
</tr>
</body>
</html>";
}
?>