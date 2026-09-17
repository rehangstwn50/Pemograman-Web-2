<!DOCTYPE html>
<html>
<head>
    <title>Tabel Perkalian</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px 12px;
            text-align: center;
        }
    </style>
</head>
<body>

<h2 style="text-align:center;">Tabel Perkalian 1 - 10</h2>

<table>
<?php
for ($i = 1; $i <= 10; $i++) {
    echo "<tr>";
    for ($j = 1; $j <= 10; $j++) {
        echo "<td>" . ($i * $j) . "</td>";
    }
    echo "</tr>";
}
?>
</table>

</body>
</html>