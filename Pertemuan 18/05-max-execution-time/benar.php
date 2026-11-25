<?php
// SOLUSI 1: tambah batas waktu lewat php.ini
//           max_execution_time = 9999   (lalu simpan & restart Apache)
//
// SOLUSI 2: tambah batas waktu lewat script (hanya berlaku untuk script ini)
set_time_limit(60);           // 60 detik, 0 = tanpa batas
echo "Batas waktu sekarang: " . ini_get('max_execution_time') . " detik<br>";

// SOLUSI 3: perbaiki algoritma agar efisien.
$mulai = microtime(true);
$total = 0;
for ($i = 1; $i <= 1000000; $i++) {
    $total += $i;
}
$selesai = microtime(true);

echo "Total 1..1.000.000 = " . $total . "<br>";
echo "Waktu proses: " . round($selesai - $mulai, 4) . " detik";
?>
