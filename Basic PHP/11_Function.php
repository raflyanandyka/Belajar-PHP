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
    echo "<h1>Function</h1>";
    // pada dasarnya php sendiri sudah menyediakan banyak fungsi untuk digunakkan
    // function adalah sebuah block statement yang dapat digunakkan secara berulang
    // function harus dipanggil agar dapat menjalankan kode yang ada di dalamnya

    // confoh fungsi sederhana
    function cetak(){                      // membuat fungsi dengan nama cetak
        echo "Halo, nama saya Rafly!";     // kode yang akan dijalankan setelah fungsi dipanggil
    }
    cetak();                               // memanggil fungsi dengan nama cetak

    echo "<hr>";
    echo "<h1>Argument</h1>";
    // fungsi juga bisa ditambahkan argumen

    // contoh fungsi dengan argumen
    function halo($halo){                   // membuat fugsi dengan nama halo dengan argumen variable nama
        // nama yang dicetak akan berubah sesuai argumen yang diisi saat dipanggil
        echo "Halo, nama saya $halo";       // kode yang akan dijalankan setelah fungsi dipanggil
        echo "<br>";
    }
    halo("Nanda");                          // memanggil fungsi dengan argumen Nanda
    halo("Rafly");                          // memanggil fungsi dengan argumen Rafly

    // fungsi akan secara otomatis mengkonversi data seperti dari integer ke string tanpa error
    function test(int$a, int$b){        // membuat fungsi dengan argumen integer
        echo "$a + $b = " . $a + $b;
    }
    test(10, "20");     // memanggil fungsi dengan string namun tidak terjadi error

    echo "<hr>";
    echo "<h1>Default Argument Value</h1>";

    // default argument value adalah nilai default yang ditentukan
    // jadi, saat memanggil fungsi tanpa mengisi nilainya, akan menggunakkan nilai default

    // contoh sederhana
    function test1($cuaca = "Hujan"){
        echo "Ramalan cuaca hari ini adalah: $cuaca";
        echo "<br>";
    }

    test1("Cerah");     // memanggil fungsi dengan mengisi nilai argumen Cerah
    test1();            // memanggil fungsi tanpa mengisi nilai argumen

    echo "<hr>";
    echo "<h1>Returning Value</h1>";

    // return berfungsi untuk mengembalikan nilai
    function jumlah(int $x1, int $x2){
        $hasil = $x1 + $x2;
        return $hasil;      // mengembalikan nilai pada variable hasil
    }

    echo "3 + 10 = " . jumlah(3, 10);
    echo "<br>";
    echo "11 + 10 = " . jumlah(11, 10);

    ?>
</body>
</html>