<?php
// SOLUSI 1: definisikan variabel sebelum dipakai.
$a = 10;
if ($a > 0)
{
    echo "A lebih dari 0<br>";
}

// SOLUSI 2: cek index array dengan isset() sebelum dipakai.
if (isset($_GET['test']) && $_GET['test'] == 0)
{
    echo "test sama dengan 0<br>";
}
else
{
    echo "Parameter 'test' belum dikirim. Coba: benar.php?test=0<br>";
}

// SOLUSI 3 (alternatif): null coalescing operator ??
$test = $_GET['test'] ?? 0;
echo "Nilai test = " . $test . "<br>";

// SOLUSI 4 (sesuai materi): atur error_reporting agar NOTICE tidak ditampilkan.
// Di php.ini : error_reporting = E_ALL & ~E_NOTICE   lalu restart Apache.
// Atau lewat script:
error_reporting(E_ALL & ~E_NOTICE);
?>
