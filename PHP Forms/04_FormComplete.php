<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    <?php
    $namaErr = $emailErr = $genderErr = $commentErr = "";
    $nama = $email = $gender = $comment = "";

    function valid($data){
        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = stripslashes($data);
        return $data;
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["nama"]) or empty($_POST["gender"]) or empty($_POST["email"]) or empty($_POST["comment"])){
            if(empty($_POST["nama"])){
                $namaErr = "* Nama Harus Diisi!";
            }

            if(empty($_POST["email"])){
                $emailErr = "* Email Harus Diisi!";
            } 

            if(empty($_POST["gender"])){
                $genderErr = "* Kelamin Harus Diisi!";
            } 

            if(empty($_POST["comment"])){
                $commentErr = "* Komentar Harus Diisi!";
            } 
        } else {
            $nama = valid($_POST["nama"]);
            $email = valid($_POST["email$email"]);
            $comment = valid($_POST["comment"]);
            $gender = valid($_POST["gender"]);
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
        Gender : <br><br>
        <input type="radio" name="gender" value="Laki Laki">Laki Laki
        <input type="radio" name="gender" value="Perempuan">Perempuan
        <span style="color: red"><?php echo $genderErr; ?></span>
        <br><br>
        Comment : 
        <br><br>
        <span style="color: red"><?php echo $commentErr; ?></span>
        <br><br>
        <textarea name="comment" cols="40" rows="10"></textarea><br><br>
        <input type="submit" value="Submit">
        <br><br>
        <hr>
        <h1>Your Input</h1>
        <h4>Nama anda: <?php echo $nama; ?></h4>
        <h4>Email anda: <?php echo $email; ?></h4>
        <h4>Kelamin anda: <?php echo $gender; ?></h4>
        <h4>Komentar anda: <?php echo $comment; ?></h4>
    </form>
</body>
</html>