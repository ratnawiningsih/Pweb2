<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas fungsi</title>
</head>
<body>

    <h2>Masukan Angka</h2>

    <form method="post" action="">
        <h3>Persegi panjang</h3>
        <label for="panjang">Panjang:</label>
        <input type="number" name="panjang" required>
        <br>

        <label for="lebar">Lebar:</label>
        <input type="number" name="lebar" required>
        <br>

        <hr>

        <label for="jari">Jari-jari:</label>
        <input type="number" name="jari" required>
        <br>

        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Menghitung luas persegi panjang
        $panjang = $_POST["panjang"];
        $lebar = $_POST["lebar"];
        $luas_persegi_panjang = $panjang * $lebar;

        // Menghitung luas lingkaran
        $jari = $_POST["jari"];
        $luas_lingkaran = 3.14 * $jari * $jari;

        // Menampilkan hasil
        echo "Luas Persegi Panjang: " . $luas_persegi_panjang . "<br>";
        echo "Luas Lingkaran: " . $luas_lingkaran . "<br>";
    }
    ?>

</body>
</html>