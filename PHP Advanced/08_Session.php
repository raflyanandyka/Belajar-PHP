<?php
session_start();
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
    // mencetak variabel session yang sudah dibuat di file lain
    echo "Warna kesuakaan saya adalah: " . $_SESSION["favColor"];
    echo "<br>";
    echo "Hewan kesukaan saya adalah: " . $_SESSION["favAnimal"];
    echo "<br>";
    echo "<br>";

    // cara lain untuk melihat variabel session
    print_r($_SESSION);

    // untuk menghapus session ada 2 cara

    // menghapus semua variabel session
    session_unset();

    // menghapus session
    session_destroy();
    ?>
    
</body>
</html>