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
    echo "<h1>\$GLOBALS</h1>";
    // $GLOBAL adalah salah satu variable superglobal yang digunakkan agar variable dapat digunakkan di seluruh script

    $var1 = 10;
    $var2 = 20;

    function hitung(){
        // menggunakkan globals sehingga dapat mengambil varible diluar function
        $GLOBALS['var3'] = $GLOBALS['var1'] + $GLOBALS['var2'];
    }

    hitung();
    echo "Hasilnya adalah: $var3";     // Karena var3 juga menggunakkan globals maka bisa juga diakses langsung dari luar

    echo "<hr>";
    echo "<h1>\$_SERVER</h1>";

    // $_SERVER adalah superglobals yang berisi informasi tentang header, path, dan lokasi script

    // salah satu contoh $_SERVER
    echo $_SERVER['SCRIPT_NAME'];       // akan mencetak nama script yang dijalankan
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];       // akan mencetak nama server yang digunakkan (misal www.w3school.com)

    // masih banyak lagi beberapa $_SERVER

    echo "<hr>";
    echo "<h1>\$_REQUEST</h1>";

    // $_REQUEST digunakkan untuk mengambil data pada form html setelah tombol submit dipencet

    // action nya akan dilakukan di file itu sendiri
    // action juga bisa dilakuka di file PHP LAIN

    // selain itu ada juga $_POST dan $_GET yang fungsinya serupa
    ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] == "POST"){      // jika metode form nya post maka kode akan dijalankan
        $name = $_REQUEST['fname'];     // mengambil data pada input fname dan dimaukkan ke variabel nama
        if (empty($name)){      // jika variable nama kosong maka akan print nama kosong
            echo "Namanya Kosong!";
        } else {
            echo "Nama Saya: $name";
        }
    }
    ?>
</body>
</html>