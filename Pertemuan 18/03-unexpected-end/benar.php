<?php
// SOLUSI 1: pastikan setiap { punya } penutup.
$a = 5;
if ($a > 1)
{
    echo "Nilai A lebih dari 1";
}
echo "<br>";

// SOLUSI 2: konsisten memakai <?php (jangan <?) pada semua blok.
$syarat = true;
if ($syarat)
{
    echo "statement1<br>";
    echo "statement2<br>";
?>

<?php
    echo "statement3<br>";
    echo "statement4<br>";
}
?>
