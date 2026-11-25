<?php
// WARNING: Cannot modify header information - headers already sent by (output started at ...)
// Penyebab: ada output (echo / HTML) sebelum header("Location: ...").
echo "<p>Hallo Apa kabar?</p>";
header("Location: test.php");
?>
