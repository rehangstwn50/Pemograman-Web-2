<?php
// SOLUSI: pastikan host, username, dan password sudah benar.
// XAMPP/Laragon default: user "root", password kosong "".
// Format materi (lama)  : mysql_connect("namahost", "namauser", "passworduser");
// Format PHP 7/8 (mysqli): mysqli_connect("namahost", "namauser", "passworduser");
$host = "localhost";
$user = "root";
$pass = "";

// Tampilkan error sebagai exception agar bisa ditangani dengan try-catch
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $koneksi = mysqli_connect($host, $user, $pass);
    echo "Koneksi ke MySQL berhasil. Versi server: " . mysqli_get_server_info($koneksi);
} catch (mysqli_sql_exception $e) {
    echo "Koneksi gagal. Periksa username dan password MySQL.";
    error_log($e->getMessage());
}
?>
