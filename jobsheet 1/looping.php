<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping</title>
</head>
<body>
    <?php
    echo "Perulangan FOR bilangan genap dari 1 hingga 10 </br>";
    for($x=2;$x <=10; $x +=2)
    echo "$x </br>";

    echo "</br>Perulangan while bilangan ganjil dari 1 hingga 10 </br>";
    $y=1;
    while($y<=10){
        echo "$y </br>";
        $y+=2; //tugasnya membuat perulangan menggunakan do while menampilkan bilangan prima kurang dari 20
    }
    echo "Bilangan prima kurang dari 20: </br>";
$num = 2;

do {
    $isPrime = true;

    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            $isPrime = false;
            break;
        }
    }

    if ($isPrime) {
        echo $num . "</br> ";
    }

    $num++;
} while ($num < 20);
    ?>
</body>
</html>