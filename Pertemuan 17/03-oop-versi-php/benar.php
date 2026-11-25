<?php
// ERROR (PHP < 5): Parse error: syntax error, unexpected T_STRING,
//                  expecting T_OLD_FUNCTION or T_FUNCTION or T_VAR or '}'
// Penyebab: script OOP dijalankan di PHP versi lama (di bawah PHP 5).
// SOLUSI : gunakan / upgrade ke versi PHP yang lebih tinggi.

// Cek versi PHP yang dipakai
echo "Versi PHP: " . PHP_VERSION . "<br>";

if (version_compare(PHP_VERSION, '5.0.0', '<')) {
    die("Versi PHP terlalu rendah untuk OOP. Silakan upgrade PHP.");
}

// Contoh script OOP sederhana
class Mahasiswa
{
    public $nama;

    public function __construct($nama)
    {
        $this->nama = $nama;
    }

    public function sapa()
    {
        return "Halo, " . $this->nama;
    }
}

$mhs = new Mahasiswa("Budi");
echo $mhs->sapa();
?>
