<?php
// ERROR: Parse error: syntax error, unexpected T_ELSE (PHP 8: unexpected token "else")
// Penyebab: tidak ada tanda titik koma (;) di akhir statement
//           dan pada "else ($a < 0)" kurang kata IF.
$a = 5;
if ($a > 0) $status = "A lebih besar dari 0"
else ($a < 0) $status = "A lebih kecil dari 0"
else $status = "A sama dengan 0"
echo $status;
?>
