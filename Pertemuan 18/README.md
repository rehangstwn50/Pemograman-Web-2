# Praktikum Error Handling PHP (Pemrograman Web 2 - Pertemuan 18)

Praktik dari materi *Error Handling 3*. Setiap folder berisi `salah.php` (memunculkan error)
dan `benar.php` (solusinya).

## Cara menjalankan
1. Salin folder ini ke `htdocs` (XAMPP) atau `www` (Laragon/AppServ).
2. Jalankan Apache, buka `http://localhost/praktikum-error-handling-php/`.

## Daftar kasus
| No | Pesan error | Penyebab | Solusi |
|----|-------------|----------|--------|
| 1 | `Parse error: syntax error, unexpected T_ELSE` | Titik koma (`;`) hilang dan `else ($a < 0)` kurang `if` | Tambah `;` dan tulis `else if` |
| 2 | `Fatal error: Call to undefined function` | Function tidak ada / belum di-include | `include "function.php";`, cek `function_exists()` |
| 3 | `Parse error: unexpected $end` | Kurung kurawal `}` tidak ditutup / campur `<?` dan `<?php` | Lengkapi `}` dan konsisten memakai `<?php` |
| 4 | `Notice: Undefined variable / index` | Variabel atau `$_GET['x']` dipakai sebelum didefinisikan | Definisikan variabel, pakai `isset()` atau `??` |
| 5 | `Fatal error: Maximum execution time exceeded` | Script melebihi `max_execution_time` (30 dtk) | Ubah `max_execution_time` di php.ini / `set_time_limit()` |
| 6 | Upload file gagal | File melebihi `upload_max_filesize` / `post_max_size` | Ubah kedua parameter di php.ini (mis. `80M`) lalu restart Apache |

## Konfigurasi php.ini yang dipakai
```ini
error_reporting = E_ALL & ~E_NOTICE
max_execution_time = 9999
upload_max_filesize = 80M
post_max_size = 80M
```
Setelah php.ini diubah, **restart Apache**.

> Catatan: pada PHP 8 pesan "Notice: Undefined variable" berubah menjadi "Warning: Undefined variable",
> dan pesan parse error memakai kata `unexpected token`.
