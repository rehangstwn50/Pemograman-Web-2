<?php
// ERROR kasus ke-2: blok IF dipecah 2 blok PHP, blok kedua memakai <? (short tag)
// Bila server hanya mengizinkan <?php, blok kedua dianggap teks biasa,
// sehingga tanda } dianggap tidak ada.
$syarat = true;
if ($syarat)
{
    echo "statement1<br>";
    echo "statement2<br>";
?>

<?
    echo "statement3<br>";
    echo "statement4<br>";
}
?>
