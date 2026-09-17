<!DOCTYPE html>
<html>
<head>
    <title>Contoh Penggunaan IF</title>
</head>
<body>
<form method="get">
    Besar Pembelian:
    <input type="number" name="total_beli" min="0" required>
    <input type="submit" value="Tentukan Diskon">
</form>

<?php
if (isset($_GET["total_beli"])) {
    $total_beli = intval($_GET["total_beli"]);
    $diskon = 0;

    if ($total_beli >= 200000) {
        $diskon = 0.10;
    } elseif ($total_beli >= 100000) {
        $diskon = 0.05;
    } else {
        $diskon = 0.01;
    }

    $nilai_diskon = $diskon * $total_beli;
    $pembayaran = $total_beli - $nilai_diskon;

    echo "<p>Diskon = Rp " . number_format($nilai_diskon, 0, ',', '.') . "</p>";
    echo "<p>Pembayaran = Rp " . number_format($pembayaran, 0, ',', '.') . "</p>";
}
?>
</body>
</html>