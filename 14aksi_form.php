<?php
//koneksi dengan basisdata
include'14koneksi.php';
//menampung data yang dikirim oleh form
echo $kode=$_POST['kode'];
echo $jumlah=$_POST['jumlah'];
//menginput data ke database
mysqli_query($koneksi,"call update_datatable('$kode','$jumlah')");
//mengalihkan halaman kembali keindex.php
header("location:14form.php");
?>