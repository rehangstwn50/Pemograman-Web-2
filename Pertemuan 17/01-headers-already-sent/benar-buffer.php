<?php
// SOLUSI 3 (tambahan): output buffering menahan output sehingga header()
// tetap bisa dipakai. Tetap disarankan memakai Solusi 1.
ob_start();

echo "<p>Teks ini ditahan dulu di buffer</p>";
header("Location: test.php");

ob_end_flush();
exit;
?>
