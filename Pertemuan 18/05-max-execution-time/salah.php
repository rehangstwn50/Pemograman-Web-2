<?php
// ERROR: Fatal error: Maximum execution time of 30 seconds exceeded
// Penyebab: script berjalan lebih lama dari max_execution_time (default XAMPP 30 detik).
// Di sini kita memperkecil batas jadi 2 detik agar error mudah muncul.
set_time_limit(2);

while (true) {
    // loop tanpa akhir -> melewati batas waktu
}
?>
