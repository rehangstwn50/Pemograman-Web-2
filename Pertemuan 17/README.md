# Contoh Error Handling PHP 2 (Pemrograman Web 2 - Pertemuan 17)

Media contoh kode dari materi *Error Handling 2* (tidak ada studi kasus, jadi berupa contoh script).

## Cara menjalankan
1. Salin folder ke `htdocs` (XAMPP) atau `www` (Laragon).
2. Jalankan Apache + MySQL, buka `http://localhost/praktikum-error-handling-2-php/`.

## Daftar kasus
| No | Pesan error | Penyebab | Solusi |
|----|-------------|----------|--------|
| 1 | `Warning: Cannot modify header information - headers already sent` | Ada `echo`/HTML sebelum `header("Location: ...")` | Hapus output sebelum `header()`, cek file yang di-include, tambah `exit;`, atau `ob_start()` |
| 2 | `Warning: mysql_connect(): Access denied for user 'root'@'localhost'` | Username/password MySQL salah | Perbaiki kredensial; di PHP 7/8 pakai `mysqli_connect()` |
| 3 | `Parse error: syntax error, unexpected T_STRING, expecting T_OLD_FUNCTION ...` | Script OOP dijalankan di PHP di bawah versi 5 | Upgrade versi PHP |

> Catatan: `mysql_connect()` pada materi sudah dihapus sejak PHP 7, sehingga contoh memakai `mysqli`.
