<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Manipulation</title>
</head>
<body>
    <?php 
    $x="Selamat Belajar";
    echo strtoupper("$x</br>"); 
    echo strtolower("$x</br>"); 
    echo substr($x, 0, 7); //0 merupakan huruf pertma yang di hapus,7 merupakan lengh (berapa panjang katanya)
    ?>
</body>
</html>