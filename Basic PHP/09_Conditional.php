<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Pemrograman PHP</title>
</head>
<body>
    <h1>IF Statements</h1>
    <?php
    // if adalah suatu kondisi yang mengeksekusi kode jika kondisi true atau benar

    $var = 5;
    if ($var < 10) {
        // jika kondisi benar, kode dibawah akan dijalankan
        echo "Benar, $var lebih kecil dari 10";
    }
    echo "<hr>";
    ?>

    <h1>if...else statement</h1>
    <?php
    // if else akan menjalankan kode jika kondisi benar dan apabila jika kondisi salah

    $var = "Rafly";
    if ($var == "Rafly"){
        // jika kondisi benar akan dijalankan
        echo "Haloo, selamat datang Rafly!";
    } else {
        // jika kondisi salah akan dijalankan
        echo "Haloo, silahkan daftar terlebih dahulu!";
    }
    echo "<hr>";
    ?>
    <h1>if...elseif...else statements</h1>
    <?php
    // if elseif else adalah statement conditional yan akan menjalankan kode berikutnya jika kode pertama salah
    $var = "dimas";

    if ($var == "dimas"){
        // kode pertama akan dijalankan jika kondisi true atau benar
        echo "Selamat datang Dimas!";
    } elseif ($var == "rafly"){
        // jika kondisi pertama salah dan kondisi kedua benar, maka kode akan dijalankan
        echo "Selamat datang Rafly!";
    } else {
        // jika semua kondisi salah, maka kode dibwah akan dijalankan
        echo "Silahkan daftar terlebih dahulu!";
    }
    echo "<hr>";
    ?>

    <h1>Switch Statements</h1>
    <?php
    // switch berfungsi untuk memilih satu dari beberapa kondisi yang akan di eksekusi

    $warna = "biru";
    switch ($warna) {
        case 'merah':
            // kode akan dijalankan jika nilai variable adalah merah
            echo "warna favorit anda adalah Merah!";
            break;
        case "kuning":
            // kode akan dijalankan jika nilai variable adalah kuning
            echo "warna favorit anda adalah Kuning!";
            break;
        case "hijau":
            // kode akan dijalankan jika nilai variable adalah hijau
            echo "warna favorit anda adalah Hijau!";
            break;
        default:
            // kode akan dijalankan jika nilai variable tidak terdapat dari 3 diatas
            echo "warna favorit anda tidak tersedia!";
            break;
    }
    ?>
</body>
</html>