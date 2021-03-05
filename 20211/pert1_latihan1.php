<?php
$A = 456 ; // variable global
function Test() {
$A = "test"; // variable local
echo"Nilai A dalam fungsi = $A \n";
}
Test();
echo"Nilai A luar fungsi = $A \n";
?>