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
    // fopen akan membuka file, w artinya dengan mode writing
    $myfile = fopen("Asset/ContohFile.txt", "w") or die("Unable to open file!");

    // variabel berisi teks yang akan di masukkan ke dalam file
    $txt = "Rafly Anandyka\n";

    // fwrite berfungsi memasukan menulis teks dan memasukan ke dalam file
    fwrite($myfile, $txt);
    $txt = "Nanda Khairunisa\n";
    fwrite($myfile, $txt);

    // untuk menutup file
    fclose($myfile);

    // OVERWRITING

    // jika kita menulis lagi dengan barisan berbeda,
    // file sebelumnya akan terhapus dan di gantikan dengan yang baru
    $myfile = fopen("Asset/ContohFile.txt", "w") or die("Unable to open file!");
    $txt = "Dimas Dzaki\n";
    fwrite($myfile, $txt);
    $txt = "Lingga Hardika\n";
    fwrite($myfile, $txt);
    fclose($myfile);

    // PHP APPEND TEXT

    // APPEND adalah mode untuk menambahkan teks ke file yang sudah ada tanpa menghapus file sebelumya
    // a adalah mode untuk append
    $myfile = fopen("Asset/ContohFile.txt", "a") or die("Unable to open file!");
    $txt = "Rafly Anandyka\n";
    fwrite($myfile, $txt);
    $txt = "Nanda Khairunisa\n";
    fwrite($myfile, $txt);
    fclose($myfile);
    ?>
</body>
</html>