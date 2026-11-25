<?php
// PERINGATAN: Undefined variable $a  /  Undefined array key "test"
// (PHP 7 : Notice, PHP 8 : Warning)
// Penyebab: variabel / index array dipakai sebelum didefinisikan.
if ($a > 0)
{
    echo "A lebih dari 0";
}

if ($_GET['test'] == 0)
{
    echo "test sama dengan 0";
}
?>
