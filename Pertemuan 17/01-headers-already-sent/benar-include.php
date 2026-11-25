<?php
// SOLUSI 2: jika meng-include script sebelum header(), pastikan file yang
// di-include tidak berisi echo / HTML. File koneksi.php di bawah hanya
// berisi logika (tanpa output), jadi aman.
include "koneksi.php";

header("Location: test.php");
exit;
?>
