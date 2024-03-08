<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Nilai Akhir</title>
</head>
<body>
        <h2>Hitung Nilai Akhir dan Grade</h2>

        <form action="" method="post">
            <label for="nama">Nama:</label><br>
            <input type="text" name="nama" required><br><br>

            <label for="nim">NIM:</label><br>
            <input type="text" name="nim" required><br><br>

            <label for="mata_kuliah">Mata Kuliah:</label><br>
            <input type="text" name="mata_kuliah" required><br><br>

            <label for="kehadiran">Jumlah Kehadiran:</label><br>
            <input type="number" name="kehadiran" required><br><br>

            <label for="nilai_tugas">Nilai Tugas:</label><br>
            <input type="number" name="nilai_tugas" required><br><br>

            <label for="nilai_uts">Nilai UTS:</label><br>
            <input type="number" name="nilai_uts" required><br><br>

            <label for="nilai_uas">Nilai UAS:</label><br>
            <input type="number" name="nilai_uas" required><br><br>

            <button type="submit">Hitung Nilai Akhir</button>
        </form>

    <?php   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $mata_kuliah = $_POST['mata_kuliah'];
        $kehadiran = $_POST['kehadiran'];
        $nilai_tugas = $_POST['nilai_tugas'];
        $nilai_uts = $_POST['nilai_uts'];
        $nilai_uas = $_POST['nilai_uas'];

        // Hitung nilai akhir berdasarkan bobot masing-masing komponen
        $nilai_akhir = 0.1 * $kehadiran + 0.2 * $nilai_tugas + 0.3 * $nilai_uts + 0.4 * $nilai_uas;

        // Tentukan grade berdasarkan nilai akhir
        if ($nilai_akhir >= 80) {
            $grade = 'A';
        } elseif ($nilai_akhir >= 70) {
            $grade = 'B';
        } elseif ($nilai_akhir >= 60) {
            $grade = 'C';
        } elseif ($nilai_akhir >= 50) {
            $grade = 'D';
        } else {
            $grade = 'E';
        }

        // Tampilkan hasil
        echo "<h3>Hasil Perhitungan Nilai Akhir</h3>";
        echo "<p>Nama: $nama</p>";
        echo "<p>NIM: $nim</p>";
        echo "<p>Mata Kuliah: $mata_kuliah</p>";
        echo "<p>Nilai Akhir: $nilai_akhir</p>";
        echo "<p>Grade: $grade</p>";
    }
    ?>
</body>
</html>
