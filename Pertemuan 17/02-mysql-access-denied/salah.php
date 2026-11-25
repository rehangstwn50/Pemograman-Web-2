<?php
// WARNING: mysql_connect(): Access denied for user 'root'@'localhost' (using password: YES)
// Penyebab: username / password MySQL salah.
// Catatan: mysql_connect() sudah dihapus di PHP 7+, sehingga di PHP modern
// yang muncul adalah "Call to undefined function mysql_connect()".
// Skrip ini memakai mysqli dengan password sengaja salah agar errornya terlihat.
mysqli_report(MYSQLI_REPORT_OFF);
$koneksi = mysqli_connect("localhost", "root", "password_salah");
if (!$koneksi) {
    echo "Gagal: " . mysqli_connect_error();
}
?>
