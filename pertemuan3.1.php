<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        form {
            margin-top: 20px;
        }

        input, select, button {
            margin: 5px;
            padding: 8px;
        }
    </style>
</head>
<body>
    <center>
        <h2>Kalkulator Sederhana</h2>

        <form action="" method="post">
            <input type="text" name="nilai1" placeholder="Nilai 1" required>
            <select name="operator" id="operator">
                <option value="+">+</option>
                <option value="-">-</option>
                <option value="*">*</option>
                <option value="/">/</option>
            </select>
            <input type="text" name="nilai2" placeholder="Nilai 2" required>
            <button type="submit">Hitung</button>
        </form>
    </center>

    <?php   
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nilai1 = $_POST['nilai1'];
        $nilai2 = $_POST['nilai2'];
        $operator = $_POST['operator'];

        switch ($operator) {
            case '+':
                $hasil = $nilai1 + $nilai2;
                break;
            case '-':
                $hasil = $nilai1 - $nilai2;
                break;
            case '*':
                $hasil = $nilai1 * $nilai2;
                break;
            case '/':
                if ($nilai2 != 0) {
                    $hasil = $nilai1 / $nilai2;
                } else {
                    $hasil = "Tidak bisa dibagi oleh 0";
                }
                break;
            default:
                $hasil = "Operator tidak valid";
                break;
        }

        echo "<center><h3>Hasil : $hasil</h3></center>";
    }
    ?>
</body>
</html>
