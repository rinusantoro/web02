<?php

# sembunyikan semua pesan error bawaan PHP
error_reporting(0);

/**
 * Fungsi untuk menangai error.
 * 
 * Fungsi ini wajib memiliki 4 paramter dan nama parameter bisa bebas.
 */
function tanganiError ($level, $message, $file, $line) {
  echo "<div style='padding: 2rem; background: rgba(200, 0, 0, 0.5); color: white'>";
  echo    "<b>Terjadi Error</b>";
  echo    "<p>[{$level}] {$message} - {$file}:{$line}</p>";
  echo "</div>";
}

set_error_handler('tanganiError');

# variabel $tes tidak ada
echo $tes;

?>