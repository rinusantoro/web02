<html>
<head>
<title>pertemuan 2 latihan 3 </title>
</head>
<body>
<?php
  $hasil = 0;
  if(isset($_POST['hitung'])){
    $bil1 = $_POST['bil1'];
    $bil2 = $_POST['bil2'];
    $operasi = $_POST['operasi'];
    switch ($operasi) {
    case '+':
    $hasil = $bil1+$bil2;
    break;
    case '-':
    $hasil = $bil1-$bil2;
    break;
    case '*':
    $hasil = $bil1*$bil2;
    break;
    case '/':
    $hasil = $bil1/$bil2;
    break; 
    }
  }
?>
<center>
<table cellspacing="0" cellpadding="3">
<form method="POST">
<tr>
<td><font face="comic sans serif" size=5 color= "blue">Nilai I</font></td>
<td></td>
<td><font face="comic sans serif" size=5 color= "blue">Nilai II</font></td>
</tr>
<tr>
<div class="kalkulator">
<h2 class="judul">kalkulator</h2>
<td><input type="text" name="bil1"></td>
<td><select name="operasi" id="operasi" >
    <option value="-">-</option>
    <option value="+">+</option>
    <option value="/">/</option>
    <option value="*">*</option>
  </select></td>
  <td><input type="text" name="bil2"></td>
<td><input type="submit" name="hitung" value="hitung" class="tombol"></td>
</tr> 
</form>
</table> 
<?php 
  if(isset($_POST['hitung'])){
    echo "<h3>Hasil : $hasil</h3>"; 
  }
?>
</center>
</body>
</html> 