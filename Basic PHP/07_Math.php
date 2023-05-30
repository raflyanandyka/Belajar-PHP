<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Pemrograman PHP</title>
</head>
<body>
    <h1>Fungsi pi()</h1>
    <?php
    // pi() >> merupakan fungsi untuk mengembalukan value dari PI
    echo "Nilai dari pi adalah: " . pi();
    echo "<hr>";
    ?>

    <h1>Fungsi min() dan max()</h1>
    <?php
    // min() dan max() merupakan fungsi untuk mencari nilai terendah dan tertinggi

    $num = array(0, 215, 10, 20, 50, 100, 70, 90, -10);
    echo "Angka = 0, 215, 10, 20, 50, 100, 70, 90, -10<br><br>";
    echo "Nilai terendah adalah: " . min($num);
    echo "<br>";
    echo "Nilai tertinggi adalah: " . max($num);
    echo "<hr>";
    ?>

    <h1>Fungsi abs()</h1>
    <?php
    // abs() merupakan fungsi untuk mengembalikan nilai absolut (positive)
    $num = -19.90;
    echo "Nilai Negatif: $num, diubah menjadi positive: " . abs($num);
    echo "<hr>";
    ?>

    <h1>Fungsi sqrt()</h1>
    <?php
    // sqrt() merupakan fungsi untuk mengembalikan nilai akar pangkat 2 (kuadrat)

    $num = 64;
    echo "Akar pangkat 2 dari $num adalah: " . sqrt($num);
    echo "<hr>";
    ?>

    <h1>Fungsi round()</h1>
    <?php
    // round() merupakan fungsi untuk mengembalikan (membulatkan) nilai float menjadi yang terdekat

    $num = 1.6;
    echo "$num dibulatkan menjadi: " . round($num);
    echo "<br>";

    $num = 5.2;
    echo "$num dibulatkan menjadi: " . round($num);
    echo "<hr>";
    ?>

    <h1>Fungsi rand()</h1>
    <?php
    // rand() merupakan fungsi untuk mencetak angka secara random 

    echo "Nomor anda adalah: " . rand();
    echo "<br>";

    // bisa juga ditambahkan parameter untuk mengatur angka yang dicetak
    // contoh mencetak angka random antara 10 dan 100

    echo "Nomor anda adalah: " . rand(10, 100);
    ?>
</body>
</html>