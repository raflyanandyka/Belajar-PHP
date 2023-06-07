<?php
// berfungsi untuk memulai session
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
    // mengatur variabel session
    $_SESSION["favColor"] = "hijau";
    $_SESSION["favAnimal"] = "kucing";
    echo "Variabel session sudah di atur!";
    ?>
    
</body>
</html>