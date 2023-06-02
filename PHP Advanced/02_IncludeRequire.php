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
    // include an require berfungsi untuk memasukan file php lain sebelum file di eksekusi
    // require akan menghasilkan fatal error (E_COMPILE_ERROR) dan script akan berhenti
    // include akan menghasilkan warning (E_WARNING) dan melanjutkan script
    ?>

    <h1>Selamat datang di materi include dan require</h1>
    <p>Berikut ini merupakan contoh dari include menampilkan teks dari file lain</p>
    <p><?php include "Asset/02_IncludeRequire1.php"; ?></p>
    <p>Teks ini akan tetap ditampilkan jika file include tidak ada</p>
    <hr>
    <p><?php require "Asset/02_IncludeRequire1.php"; ?></p>
    <p>Teks ini tidak akan ditampilkan jika file require tidak ada</p>
</body>
</html>