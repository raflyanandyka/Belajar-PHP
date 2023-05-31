<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Pemrograman PHP</title>
</head>
<body>
    <h1>Simple Form</h1>
    <form action="" method="post">
        Name: <input type="text" name="nama"><br><br>
        Email: <input type="email" name="email" id="email"><br><br>
        <input type="submit" value="submit">
    </form>
    <hr>
    <?php
    // $_POST mengambil data yang ada di dalam forms
    // jika pertama kali data belum diisi maka php akan error
    // Selain menggunakkan $_POST bisa juga menggunakkan $_GET dan hasil nya akan sama

    echo "Selamat datang, " . $_POST["nama"];
    echo "<br>";
    echo "Email anda adalah: " . $_POST["email"];
    ?>
</body>
</html>