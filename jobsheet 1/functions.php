<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fungsi</title>
</head>
<body>
    <?php //dibuat dinamis
   function persegi_panjang( $p , $l )
   {
     return $p*$l;
   }
    function lingkaran($r)
   {
     return 3.14*$r*$r;
   }
    ?>
    <h2>MASUKKAN ANGKA</h2>

    <form method="post" action="">
    Panjang: <input type="text" name="panjang"><br>
    Lebar: <input type="text" name="lebar"><br>
    <input type="submit" value="Hitung Luas">
</form>

    <?php
 echo "luas Persegi panjang=". persegi_panjang(5,2)."</br>";
echo "luas Persegi panjang=". lingkaran(7);

?>
</body>
</html>