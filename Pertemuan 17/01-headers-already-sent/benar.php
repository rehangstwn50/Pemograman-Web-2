<?php
// SOLUSI 1: tidak ada echo / HTML apapun sebelum header("Location: ...").
// Pastikan juga tidak ada spasi atau baris kosong sebelum tag <?php pembuka.
header("Location: test.php");
exit; // hentikan script setelah redirect
?>
