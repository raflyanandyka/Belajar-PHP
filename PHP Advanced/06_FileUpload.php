<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="upload" id="upload">
        <input type="submit" value="Kirim" name="submit">
    </form>


    <?php
    // targetdir berisi direktori tempat file akan tersimpan
    $targerDir = "Asset/";

    // targetFile merupakan jalur file akan disimpan
    $targetFile = $targerDir . basename($_FILES["upload"]["name"]);

    // akan digunakan nanti
    $uploadOk = 1;

    // mengubah nama file menjadi lowercase atau huruf kecil
    $imgFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // mengecek apakah file gambar sebenarnya atau bukan
    if(isset($_POST["submit"])){
        $check = getimagesize($_FILES["upload"]["tmp_name"]);
        if($check !== false){
            echo "File merupakan gambar - " . $check["mime"] . ".";
            $uploadOk = 1;
        } else {
            echo "File bukan sebuah gambar!";
            $uploadOk = 0;
        }
    }

    // mengecek apakah file sudah ada atau belum
    if(file_exists($targetFile)){
        echo "Maaf file sudah ada!";
        $uploadOk = 0;
    }

    // membuat limit ukuran file
    // angka yang digunakkan adalah satuan byte
    // jadi untuk melimit di 500kb masukkan 5000000
    // 1mb = 1000kb = 1000000byte
    // 1kb = 1000byte
    if($_FILES["upload"]["size"] > 5000000){
        echo "File terlalu besar!";
        $uploadOk = 0;
    }

    // membuat limit tipe file
    if($imgFileType != "jpg" && $imgFileType != "img" && $imgFileType != "jpeg" && $imgFileType != "gif"){
        echo "Format file harus JPG, PNG, JPEG, atau GIF";
        $uploadOk = 0;
    }

    // mengecek apakah file bisa di upload atau  tidak
    if($uploadOk == 0){
        echo "File anda belum dapat di upload!";

        // mengupload file jika sudah tidak ada masalah
    } else {
        if(move_uploaded_file($_FILES["upload"]["tmp_name"], $targetFile)){
            echo "File" . htmlspecialchars(basename($_FILES["upload"]["name"])) . "Sudah berhasil di upload!";
        } else {
            echo "Maaf file anda tidak dapat di upload!";
        }
    }
    
    ?>

    
</body>
</html>