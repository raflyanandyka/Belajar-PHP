<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>membuka file dengan fread</h1>
    <?php
    // selain readfile, fungsi terbaik untuk membaca file adalah fopen()

    // contoh
    // fopen berfungsi untuk membuka file dan disertai dengan 2 argumen
    // argumen pertama merupakan file yang ingin dibuka dengan fopen
    // argumen kedua merupakan modee apa yang akan digunakkan
    // contoh r adalaah argumen untuk mode read only
    // fungsi or die berfungsi jika file tidak ada maka program akan berhenti dengan pesan tersebut
    $myFiles = fopen("Asset/ContohFile.txt", "r") or die("File tidak dapat dibuka!");

    // fread berfungsi untuk membaca file dan ada 2 argumen
    // argumen pertama adalah file yang akan di baca setelah dibuka
    // argumen kedua adalah jumlah maksimum byte file yang dibaca
    // conotoh dibawah akan membaca file hingka akhir
    echo fread($myFiles, filesize("Asset/ContohFile.txt"));

    // fclose berfungsi untuk menutup file
    fclose($myFiles);
    echo "<hr>";
    ?>
    <h1>membuka file dengan fgets</h1>
    <?php
    // fgets mirip seperti fread namun hanya membaca 1 line dari file saja
    $myFiles = fopen("Asset/ContohFile.txt", "r") or die("File tidak dapat dibuka!");
    echo fgets($myFiles, filesize("Asset/Contohfile.txt"));
    fclose($myFiles);
    echo "<hr>";
    ?>
    <h1>mengecek file hingga akhir</h1>
    <?php
    // feof berfungsi mengecek file hngga baris terakhir
    // feof berguna untuk looping data yang panjangnya tidak diketahui

    $myFiles = fopen("Asset/ContohFile.txt", "r");

    // while akan mengulangi file jika belum mencapai file akhir
    while(!feof($myFiles)){
        // akan membaca file perbaris hingga baris terakhir
        echo fgets($myFiles);
        echo "<br>";
    }
    fclose($myFiles);
    echo "<hr>";
    ?>

    <h1>membaca single karakter</h1>

    <?php
    // fgetc berfungsi untuk membaca file per karakter yang terdapat pada file
    $myFiles = fopen("Asset/ContohFile.txt", "r");

    // while akan mengulangi file hingga terakhir
    while(!feof($myFiles)){
        // fgetc akan mencetak file per karakter
        echo fgetc($myFiles);
        echo "<br>";
    }
    fclose($myFiles);
    ?>
</body>
</html>