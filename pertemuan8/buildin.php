<!DOCTYPE html>
<html>
<head>
    <title>Manipulasi String</title>
</head>
<body>

<?php
// Inisialisasi variabel string
$string = "";

// Cek apakah form sudah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["string"])) {
    $string = $_POST["string"];

    // Manipulasi string
    $stringLength = strlen($string);
    $stringUpper = strtoupper($string);
    $stringLower = strtolower($string);
    $stringUcFirst = ucfirst($string);
    $stringUcWords = ucwords($string);
    $stringLtrim = ltrim($string);
    $stringRtrim = rtrim($string);
    $stringTrim = trim($string);
    $stringSubstr = substr($string, 0, 5); // Ambil 5 karakter pertama
    $stringSubstrCount = substr_count($string, 'a'); // Hitung jumlah 'a' dalam string

    // Tampilkan hasil manipulasi string
    echo "Panjang String: " . $stringLength . "<br>";
    echo "String Kapital: " . $stringUpper . "<br>";
    echo "String Kecil: " . $stringLower . "<br>";
    echo "String dengan Huruf Depan Kapital: " . $stringUcFirst . "<br>";
    echo "String dengan Huruf Kapital di Setiap Kata: " . $stringUcWords . "<br>";
    echo "String tanpa Spasi di Awal: " . $stringLtrim . "<br>";
    echo "String tanpa Spasi di Akhir: " . $stringRtrim . "<br>";
    echo "String tanpa Spasi di Awal dan Akhir: " . $stringTrim . "<br>";
    echo "5 Karakter Pertama dari String: " . $stringSubstr . "<br>";
    echo "Jumlah Huruf 'a' dalam String: " . $stringSubstrCount . "<br>";
}
?>

<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    Masukkan sebuah string: <input type="text" name="string">
    <input type="submit" value="Submit">
</form>

</body>
</html>
