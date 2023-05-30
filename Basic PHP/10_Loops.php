<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Pemrograman PHP</title>
</head>
<body>
    <h1>While Loop</h1>
    <?php
    // while loop adalan pengulangan yang akan menjalankan kode selama kondisi terpenuhi

    $var = 1; // Nilai awal
    while ($var <= 5){
        // kode dibawah akan dijalankan jika nilai dari variable kurang dari sama dengan 5
        echo "Nomor anda adalah: $var";
        echo "<br>";
        $var++; // untuk menambah variable agar tidak terjadi infinity loop
    }
    echo "<hr>";
    ?>

    <h1>Do While Loop</h1>
    <?php
    // Do While loop akan mengeksekusi kode terlebih dahulu, kemudian akan mengecek kondisi dari while
    
    $var = 1;
    do {
        // kode akan dijalankan terlebih dahulu
        echo "Nomor anda adalah: $var";
        echo "<br>";
        $var++;
    } while ($var <= 5); // jika kondisi true, kode akan kembali dijalankan, jika tidak kode akan berhenti
    echo "<hr>";
    ?>

    <h1>For Loop</h1>
    <?php
    // For loop digunakkan untuk mengatur sendiri berapa kali kode harus diulang

    for ($i = 1; $i <= 5; $i++){
        // loop pertama adalah 1
        // jika loop kurang dari sama dengan 5, kode akan dijalankan
        // loop akan ditambah 1 setiap mengulang
        echo "Nomor anda adalah: $i";
        echo "<br>";
    }
    echo "<hr>";
    ?>

    <h1>Foreach Loop</h1>
    <?php
    // foreach loop hanya bekerja pada array

    $warna = array("Merah", "Kuning", "Hijau", "Biru", "Ungu", "Orange");
    foreach($warna as $x){
        // foreach akan mengulang sesuai sebeapa banyak elemen yang terdapat pada array
        echo "Warna anda adalah: $x";
        echo "<br>";
    }
    echo "<br><br>";

    // contoh lain
    $umur = array("Dimas"=>"12", "Rafly"=>"19", "Lingga"=>"16", "Nanda"=>"18");
    foreach($umur as $age => $x){
        echo "Usia dari $age adalah: $x Tahun";
        echo "<br>";
    }
    echo "<hr>";
    ?>

    <h1>Break dan Continue</h1>
    <?php
    // selain pada switch, break bisa digunakkan untuk menghentikan loop
    $x = 1;
    while($x <= 10){
        // while akan terus mengekskusi kode jika kondisi x kurang dari 10
        if($x == 7){
            // jika nilai x adalah 5, while akan berhenti mengeksekusi
            break;
        }
        echo "Angka anda adalah: $x";
        echo "<br>";
        $x++;
    }

    echo "<br><br>";

    // continue akan menghentikan 1 kode, dan melanjutkan kode lainnya pada loop
    for($i=1; $i<=6; $i++){
        if($i == 4){
            // pada contoh ini kode akan di skip jika sudah bernilai 4
            continue;
        }
        echo "Nomor anda adalah: $i";
        echo "<br>";
    }
    ?>
</body>
</html>