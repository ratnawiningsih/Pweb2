<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>branching</title>
</head>
<body>
<h2>MASUKKAN ANGKA</h2>
<form method="post" action="">
    <input type="text" name="angka">
    <input type="submit" value="Tentukan">
</form>
<form method="post" action="">
    <?php //membuat secara dinamis
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil nilai dari formulir
        $angka = $_POST["angka"];
    if($angka>0 ){
        echo "$angka Bilangan Positif";
    }
    elseif( $angka<0 ){
        echo "$angka Bilangan Negatif";
    }
    else{
        echo "$angka Bilangan Nol";
    }}
    ?>
</body>
</html>