<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deret Bilangan Ganjil Habis Dibagi 3</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }
    </style>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai awal dan nilai akhir dari form
    $nilaiAwal = $_POST["nilaiAwal"];
    $nilaiAkhir = $_POST["nilaiAkhir"];
    
    function generateOddNumbersDivisibleBy3($start, $end) {
        $count = 0;
        $sum = 0;
        echo "<h2>Deret Bilangan Ganjil Habis Dibagi 3</h2>";
        echo "<p>Nilai Awal: $start</p>";
        echo "<p>Nilai Akhir: $end</p>";
        echo "<p>Deret Bilangan:</p>";
        echo "<ul>";
        for ($i = $start; $i <= $end; $i++) {
            if ($i % 2 != 0 && $i % 3 == 0) {
                echo "<li>$i</li>";
                $count++;
                $sum += $i;
            }
        }
        echo "</ul>";
        echo "<p>Jumlah Deret Bilangan yang Tampil: $count</p>";
        echo "<p>Jumlah Nilai Bilangan: $sum</p>";
    }
    
    generateOddNumbersDivisibleBy3($nilaiAwal, $nilaiAkhir);
} else {
    echo "<h2>Masukkan Nilai Awal dan Nilai Akhir</h2>";
    echo '<form method="post" action="' . htmlspecialchars($_SERVER["PHP_SELF"]) . '">';
    echo 'Nilai Awal: <input type="number" name="nilaiAwal" required><br><br>';
    echo 'Nilai Akhir: <input type="number" name="nilaiAkhir" required><br><br>';
    echo '<input type="submit" value="Hitung">';
    echo '</form>';
}
?>

</body>
</html>
