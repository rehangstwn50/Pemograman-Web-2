<?php
// SOLUSI 1: satu statement per kondisi, setiap statement diakhiri ;
// dan memakai "else if" pada kondisi kedua.
$a = 5;
if ($a > 0) $status = "A lebih besar dari 0";
else if ($a < 0) $status = "A lebih kecil dari 0";
else $status = "A sama dengan 0";
echo $status . "<br>";

// SOLUSI 2: memakai kurung kurawal { } bila statement lebih dari satu
$b = -3;
if ($b > 0)
{
    $status2 = "B lebih besar dari 0";
}
else if ($b < 0)
{
    $status2 = "B lebih kecil dari 0";
}
else
{
    $status2 = "B sama dengan 0";
}
echo $status2;
?>
