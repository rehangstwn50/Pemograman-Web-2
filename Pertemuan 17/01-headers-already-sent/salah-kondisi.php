<?php
// Tidak muncul Warning, walaupun ada echo sebelum header().
// Alasan: perintah echo tidak pernah dijalankan karena $a bernilai positif.
$a = 10;
if ($a < 0) echo "Nilai A negatif";
else header("Location: test.php");
?>
