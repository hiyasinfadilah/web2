<!DOCTYPE html>
<html>
<head>
    <title>Menghitung Luas Segitiga dengan Array</title>
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
    </style>
</head>
<body>

<h2>Tabel Perhitungan Luas Segitiga</h2>

<table>
    <tr>
        <th>Segitiga ke-</th>
        <th>Alas</th>
        <th>Tinggi</th>
        <th>Luas</th>
    </tr>
    <?php
    // Mendefinisikan data alas dan tinggi dalam array
    $data = array(
        array(5, 4),
        array(8, 6),
        array(10, 7),
        array(6, 5),
        array(12, 9)
    );

    // Fungsi untuk menghitung luas segitiga
    function hitungLuasSegitiga($alas, $tinggi) {
        return 0.5 * $alas * $tinggi;
    }

    // Menampilkan data dan hasil perhitungan dalam tabel
    for ($i = 0; $i < count($data); $i++) {
        $segitiga_ke = $i + 1;
        $alas = $data[$i][0];
        $tinggi = $data[$i][1];
        $luas = hitungLuasSegitiga($alas, $tinggi);

        echo "<tr>";
        echo "<td>$segitiga_ke</td>";
        echo "<td>$alas</td>";
        echo "<td>$tinggi</td>";
        echo "<td>$luas</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
