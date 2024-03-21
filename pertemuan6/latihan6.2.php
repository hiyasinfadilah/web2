<!DOCTYPE html>
<html>
<head>
    <title>Menghitung Luas Segitiga</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>

<h2>Form Input Data Segitiga</h2>

<form method="post" action="">
    <?php
    // Menampilkan form input untuk 5 segitiga
    for ($i = 0; $i < 5; $i++) {
        echo "<fieldset>";
        echo "<legend>Segitiga ke-" . ($i + 1) . "</legend>";
        echo "Alas: <input type='text' name='alas[]'><br>";
        echo "Tinggi: <input type='text' name='tinggi[]'><br><br>";
        echo "</fieldset>";
    }
    ?>
    <input type="submit" name="hitung" value="Hitung">
</form>

<?php
// Fungsi untuk menghitung luas segitiga
function hitungLuasSegitiga($alas, $tinggi) {
    return 0.5 * $alas * $tinggi;
}

// Memproses input dan menghitung luas segitiga jika tombol "Hitung" ditekan
if(isset($_POST['hitung'])){
    $alas = $_POST['alas'];
    $tinggi = $_POST['tinggi'];
    $hasil = array();

    // Memastikan input telah diisi untuk setiap segitiga
    $valid = true;
    foreach ($alas as $key => $value) {
        if (empty($alas[$key]) || empty($tinggi[$key])) {
            echo "<p class='error'>Mohon lengkapi semua input.</p>";
            $valid = false;
            break;
        }
    }

    // Jika input valid, hitung luas segitiga
    if ($valid) {
        echo "<h2>Tabel Perhitungan Luas Segitiga</h2>";
        echo "<table>";
        echo "<tr><th>Segitiga ke-</th><th>Alas</th><th>Tinggi</th><th>Luas</th></tr>";

        foreach ($alas as $key => $value) {
            $luas = hitungLuasSegitiga($alas[$key], $tinggi[$key]);
            echo "<tr>";
            echo "<td>" . ($key + 1) . "</td>";
            echo "<td>" . $alas[$key] . "</td>";
            echo "<td>" . $tinggi[$key] . "</td>";
            echo "<td>" . $luas . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    }
}
?>

</body>
</html>
