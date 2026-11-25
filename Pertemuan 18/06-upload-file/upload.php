<?php
// Penyebab gagal upload: ukuran file melebihi upload_max_filesize / post_max_size di php.ini.
// SOLUSI: ubah di php.ini lalu restart Apache, contoh batas 80 MB:
//         upload_max_filesize = 80M
//         post_max_size = 80M
// Di bawah ini kita menangani error upload dengan pesan yang jelas.

if (!isset($_FILES['berkas'])) {
    die("Tidak ada file yang dikirim (kemungkinan melebihi post_max_size = "
        . ini_get('post_max_size') . ").");
}

$file = $_FILES['berkas'];

switch ($file['error']) {
    case UPLOAD_ERR_OK:
        $tujuan = __DIR__ . "/uploads/" . basename($file['name']);
        if (move_uploaded_file($file['tmp_name'], $tujuan)) {
            echo "Upload berhasil: " . htmlspecialchars($file['name']);
        } else {
            echo "Gagal memindahkan file. Cek folder uploads/.";
        }
        break;
    case UPLOAD_ERR_INI_SIZE:
        echo "Ukuran file melebihi upload_max_filesize (" . ini_get('upload_max_filesize') . ") di php.ini.";
        break;
    case UPLOAD_ERR_FORM_SIZE:
        echo "Ukuran file melebihi MAX_FILE_SIZE pada form.";
        break;
    case UPLOAD_ERR_PARTIAL:
        echo "File hanya terunggah sebagian.";
        break;
    case UPLOAD_ERR_NO_FILE:
        echo "Tidak ada file yang dipilih.";
        break;
    default:
        echo "Terjadi kesalahan saat upload (kode " . $file['error'] . ").";
}
?>
