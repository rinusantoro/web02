<html>
<head><title>Contoh Penggunaan UDF</title></head>
<body>

<!-- Form Input -->
<form action="" method="POST">
Masukkan Bilangan Pertama:<br>
<input type="text" name="A" size="10"><br>

Masukkan Bilangan Kedua:<br>
<input type="text" name="B" size="10"><br><br>

<input type="submit" value="Hitung">
</form>

<?php
// Cek apakah form sudah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $a = $_POST['A'];
    $b = $_POST['B'];

    // Validasi input numerik
    if (!is_numeric($a) || !is_numeric($b)) {
        echo "Input harus berupa angka!";
        exit;
    }

    // Fungsi
    function jumlah($A, $B) {
        return $A + $B;
    }

    function kurang($A, $B) {
        return $A - $B;
    }

    function kali($A, $B) {
        return $A * $B;
    }

    function bagi($A, $B) {
        if ($B == 0) {
            return "Tidak bisa dibagi dengan nol";
        }
        return $A / $B;
    }

    echo "<br>";
    echo "Bilangan Pertama : $a <br>";
    echo "Bilangan Kedua   : $b <br><br>";

    echo "Hasil Penjumlahan:<br>";
    printf("%d + %d = %d<br><br>", $a, $b, jumlah($a, $b));

    echo "Hasil Pengurangan:<br>";
    printf("%d - %d = %d<br><br>", $a, $b, kurang($a, $b));

    echo "Hasil Perkalian:<br>";
    printf("%d * %d = %d<br><br>", $a, $b, kali($a, $b));

    echo "Hasil Pembagian:<br>";
    $hasilBagi = bagi($a, $b);
    if (is_numeric($hasilBagi)) {
        printf("%d / %d = %s<br><br>", $a, $b, $hasilBagi);
    } else {
        echo $hasilBagi;
    }
}
?>

</body>
</html>