<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Pemrograman PHP</title>
</head>
<body>
    <h1>Membuat constant</h1>
    <?php
    // constant mirip seperti variable, namun tidak dapat diubah dan bersifat global
    // sintaks dasar constant >>> define(name, value, case-sensitive)
    // name merupakan nama dari constant
    // value merupakan nilai dari constant

    define("Salam", "Selamat datang di SMK Negeri 43 Jakarta!");
    echo "Contoh Constant Tanpa Case Sensitive: ";
    echo "<b>" . Salam . "</b>";
    echo "<br><br>";

    // constant itu global, berarti dapat diakses langsung dari dalam fungsi
    function myTest(){
        echo "Contoh Constant menggunakkan fungsi<br>";
        echo "<b>" . Salam . "</b>";
        echo "<hr>";
    }

    myTest();
    ?>

    <h1>Array Constant</h1>
    <?php
    // pada PHP7 dapat membuat constant bernilai array

    define("buah", ["jeruk", "pisang", "mangga"]);
    echo buah[0];
    ?>
</body>
</html>