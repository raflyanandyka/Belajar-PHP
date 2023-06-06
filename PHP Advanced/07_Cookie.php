<?php
    // sintaks dasar cookie
    // setcookie(name, value, expire, path, domain, secure, httponly)

    // PHP Create/Retrieve a Cookie
    // membuat cookie untuk user tertentu dengan batas waktu 30 hari (86400 * 30) satuan detik
    // "/" berarti cookie tersedia di seluruh website (atau bisa memilih ditektori sesuai keinginan)

    // saat mengambil value dari user cookie menggunakkan global variabel $_COOKIE
    // gunakkan fungsi isset untuk mencari tau jika cookie sudah di set

    $cookieName = "user";
    $cookieValue = "Rafly Anandyka";

    setcookie($cookieName, $cookieValue, time() + (86400 * 30), "/");

    ?>

    <?php
    // untuk mengedit cookie, tinggal membuat cookie baru
    $cookieName = "user";
    $cookieValue = "Nanda Khairunisa";

    setcookie($cookieName, $cookieValue, time() + (86400 * 30), "/");
    ?>

    <?php
    // untuk menghapus cookie bisa dengan set expire date di masa lalu

    // menetapkan cookie 1 jam yang lalu
    setcookie("user", "", time() - 3600);
    echo "Cookie 'user' sudah dihapus!";
    ?>
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
    if(!isset($_COOKIE[$cookieName])){
        echo "Cookie bernama '" . $cookieName . "' Belum di set!";
    } else {
        echo "Cookie '" . $cookieName . "' Sudah di set!<br>";
        echo "Value is: " . $_COOKIE[$cookieName];
    }

    ?>

    <?php
    // mengecek apakah cookie masih ter aktif atau tidak
    if(count($_COOKIE) > 0){
        echo "Cookie telah aktif!";
    } else {
        echo "Cookie tidak aktif!";
    }
    ?>

</body>
</html>