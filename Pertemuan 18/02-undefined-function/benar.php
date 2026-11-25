<?php
// SOLUSI: include file yang berisi function sebelum function dipanggil.
include "function.php";

echo jumlah(9, 10); // menghasilkan 19
echo "<br>";

// Tambahan: cek dulu apakah function tersedia (berguna untuk built-in function
// yang hanya ada di versi PHP tertentu, misalnya str_split()).
if (function_exists('str_split')) {
    print_r(str_split("PHP"));
} else {
    echo "Function str_split() tidak tersedia, upgrade versi PHP.";
}
?>
