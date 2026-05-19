<?php 
//cek button 
if ($_POST['Submit'] == "Submit") { 
$id_mahasiswa = $_POST['id_mahasiswa']; 
$nama = $_POST['nama']; 
$jurusan = $_POST['jurusan']; 
$alamat = $_POST['alamat']; 
$telepon = $_POST['telepon']; 
//validasi data data kosong
if (empty($_POST['id_mahasiswa'])||empty($_POST['nama'])||empty($_POST['alamat'])||empty($_POST['telepon'])) { 
?> 
<script language="JavaScript"> 
alert('Data Harap Dilengkapi!'); 
document.location='download-script-form-input-data.php'; 
</script> 
<?php 
}
else { 
include "13_koneksi.php"; 
//cek NIM di database 
$sql = "SELECT id_mahasiswa FROM mahasiswa WHERE id_mahasiswa='$_POST[id_mahasiswa]'";
$cek=mysqli_num_rows (mysqli_query($connection,$sql)); 
if ($cek > 0) { 
?> 
<script language="JavaScript"> 
alert('NIM sudah dipakai!, silahkan ganti NIM yang lain'); 
document.location='download-script-form-input-data.php'; 
</script> 
<?php 
}
//Masukan data ke Table 
$input ="INSERT INTO mahasiswa (id_mahasiswa,nama,jurusan,alamat,telepon) VALUES ('$id_mahasiswa','$nama','$jurusan','$alamat','$telepon')"; 
$query_input =mysqli_query($connection,$input); 
if ($query_input) { 
//Jika Sukses 
?> 
<script language="JavaScript"> 
alert('Input Data Mahasiswa Berhasil'); 
document.location='download-script-form-input-data.php'; 
</script>
<?php 
} 
else { 
//Jika Gagal 
echo "Input Data Mahasiswa Gagal!, Silahkan diulangi!"; 
} 
//Tutup koneksi engine MySQL 
mysql_close($Open); 
} 
} 
?>
