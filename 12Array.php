<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Pemrograman PHP</title>
</head>
<body>
    <?php
    echo "<h1>Array</h1>";

    // array digunakkan untuk menyimpan banyak nilai atau data
    $mobil = array("avanza", "fortuner", "bmw");    // menyimpan beberapa nilai string
    echo $mobil[0];     // memanggil array dengan index 0, index pada array dimulai dari 0, 1, 2 dan seterusnya
    echo "<br>";

    // count berfungsi untuk menampilkan jumlah data dalam array
    echo "jumlah data dalam array adalah: " . count($mobil);

    echo "<hr>";
    echo "<h1>Associative Array</h1>";
    // associative array adalah array yang menggunakkan nama yang ditentukan sendiri

    // contoh sederhana
    // pada array ini, untuk memanggil tidak menggunakkan index, namun menggunakkan namanya
    $price = array("orange"=>5000, "apple"=>10000, "manggo"=>4000);
    echo "Harga buah adalah: "  . $price["apple"] . " Rupiah";

    echo "<hr>";
    echo "<h1>Multidimensional Array</h1>";
    // multidimensional array adalah array yang didalamnya terdapat beberapa array

    // contoh nya membuat data buah dengan stok dan harga
    $buah = array(array("Apel", 10, 2000), array("Mangga", 15, 3000), array("Pisang", 6, 10000));

    // memanggil array multidimensi dimulai dari yang paling luar
    echo "Nama Buah: " . $buah[0][0];       // index pertama untuk mengakses array apel, index kedua untuk mengakses array didalam array apel
    echo "<br>";
    echo "Stok Tersisa: " . $buah[0][1];
    echo "<br>";
    echo "Harga Buah: " . $buah[0][2];

    ?>
</body>
</html>