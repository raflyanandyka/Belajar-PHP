<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // date and time merupakan fungsi yang menampilkan tanggal dan waktu

    // yang biasa digunakkan untuk mendapatkan tanggal adalah
    // d merupakan hari dalam bulan (01 sampai 31)
    // m merupakan bulan (01 sampapi 12)
    // Y merupakan tahun dalam 4 digit (2023)
    // l (huruf kecil darai L) merupakan hari dalam minggu (senin, selasa, dsb)
    echo "Hari ini: " . date("l");
    echo "<br>";
    echo "Tanggal hari ini adalah: " . date("d/m/Y");
    echo "<br>";

    // yang biasa digunakkan untuk mendapatkan waktu adalah
    // H adalah format 24 jam (00 sampai 23)
    // h adalah format 12 jam (01 sampai 12)
    // i adalah menit (00 sampai 59)
    // s adalah detik (00 sampai 59)
    // a adalah huuf kecil dari am atau pm
    date_default_timezone_set("Asia/Jakarta"); // mengatur default zona waktu
    echo "Sekarang pukul: " . date("H:i:s");
    echo "<br>";

    // membuat waktu dengan mktime
    // mktime berfungsi membuat waktu unix dengan timestamp
    // mktime (jam, menit, detik, bulan, hari, tahun)

    $d = mktime(3, 40, 30, 10, 25, 2019);
    echo "Waktu yang dibuat: " . date("Y-m-d h:i:sa", $d);
    echo "<br>";

    // membuat waktu dengan string atau mengkonversi string menjadi waktu
    // menggunakkan strtotime(time. now)

    $d = strtotime("November 28 2004 11:30am");
    echo "Waktu yang dibuat dengan strtotime: " . date("Y-m-d h:i:sa", $d);
    echo "<br>";

    // contoh lain dengan strtotime
    // menampilkan waktu besok
    $d = strtotime("tomorrow");
    echo "Waktu saat ini: " . date("Y-m-d h:i:sa", $d);
    echo "<br>";

    // menampilkan kapan hari sabtu selanjutnya
    $d = strtotime("next saturday");
    echo "Waktu saat ini: " . date("Y-m-d h:i:sa", $d);
    echo "<br>";

    // menampilkan 3 bulan dari sekarang
    $d = strtotime("+3 Months");
    echo "Waktu saat ini: " . date("Y-m-d h:i:sa", $d);
    ?>
</body>
</html>