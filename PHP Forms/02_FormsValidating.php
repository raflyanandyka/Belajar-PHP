<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Nama: <input type="test" name="nama" required><br><br>
        Email: <input type="email" name="email" id="email"><br><br>
        Website: <input type="url" name="web" id="web"><br><br>
        <input type="radio" name="gender" id="gender" value="Laki Laki">Laki Laki
        <input type="radio" name="gender" id="gender" value="Perempuan">Perempuan<br><br>
        Comment: <textarea name="comment" id="comment" cols="40" rows="10"></textarea><br><br>
        <input type="submit" >
    </form>

    <?php
    // membuat variabel untuk menerima data dari forms
    $nama = "";
    $email = "";
    $web = "";
    $gender = "";
    $comment = "";

    // htmlspesialchars berfungsi mengkonversi spesial karakter yang di input menjadi html biasa
    // trim berfungsi menghapus karakter yang tidak penting pada input data
    // stripslashes menghapus backslash pada input

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $nama = htmlspecialchars(trim(stripslashes($_POST["nama"])));
        $email = htmlspecialchars(trim(stripslashes($_POST["email"])));
        $gender = htmlspecialchars(trim(stripslashes($_POST["gender"])));
        $web = htmlspecialchars(trim(stripslashes($_POST["web"])));
        $comment = htmlspecialchars(trim(stripslashes($_POST["comment"])));
    }

    echo "<hr>";
    echo "Nama anda adalah: $nama";
    echo "<br>";
    echo "Jenis Kelamin anda adalah: $gender";
    echo "<br>";
    echo "Email anda adalah: $email";
    echo "<br>";
    echo "Link Website anda: $web";
    echo "<br>";
    echo "Pesan anda adalah: $comment";
    ?>
</body>
</html>