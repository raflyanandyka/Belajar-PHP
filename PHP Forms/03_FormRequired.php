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
    // membuat variable kosong
    $namaErr = $emailErr = $passErr = "";
    $nama = $email = $pass = "";

    // fungsi memvalidasi input
    function valid($data){
        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
    }

    // mengharuskan user mengisi semua form
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["nama"])){
            $namaErr = "Nama harus diisi!";
        } else {
            // memasukkan data ke fungsi validasi untuk mengeck data nya lalu memasukan nya ke variabel nama
            $nama = valid($_POST["nama"]);
        }

        if(empty($_POST["email"])){
            $emailErr = "Email harus diisi!";
        } else {
            $email = valid($_POST["email"]);
        }

        if(empty($_POST["pass"])){
            $passErr = "Password harus diisi!";
        } else {
            $pass = valid($_POST["pass"]);
        }

    }

    ?>

    <form action="" method="post">
        Nama : <input type="text" name="nama">
        <span style="color: red"><?php echo $namaErr; ?></span>
        <br><br>
        Email : <input type="email" name="email">
        <span style="color: red"><?php echo $emailErr; ?></span>
        <br><br>
        Password : <input type="password" name="pass">
        <span style="color: red"><?php echo $passErr; ?></span>
        <br><br>
        <input type="submit" value="submit"><br><br>
    </form>

    <hr>

    <h3><?php echo "Nama anda adalah: " . $nama;?></h3>
    <h3><?php echo "Email anda adalah: " . $email;?></h3>
    <h3><?php echo "Password anda adalah: " . $pass;?></h3>
</body>
</html>