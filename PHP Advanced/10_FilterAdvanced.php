<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Validate Integer within a range</h1>
    <?php
    $int = 10;
    $min = 1;
    $max = 15;

    if(filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
        echo "variabel berada diluar jangkauan!";
    } else {
        echo "variabel berada di dalam jangkauan!";
    }
    echo "<br>";
    echo "<hr>";
    ?>

    <h1>Memvalidasi alamat IPV6</h1>

    <?php
    $ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

    if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) === false) {
      echo("$ip is a valid IPv6 address");
    } else {
      echo("$ip is not a valid IPv6 address");
    }

    echo "<br>";
    echo "<hr>";
    ?>

    <h1>Validate URL harus memiliki query string</h1>

    <?php
    $url = "https://materi.smkn43jkt.sch.id";

    if (!filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_QUERY_REQUIRED) === false) {
      echo("$url is a valid URL with a query string");
    } else {
      echo("$url is not a valid URL with a query string");
    }

    echo "<br>";
    echo "<hr>";
    ?>

    <h1>Menghapus ASCII value > 127</h1>

    <?php
    $str = "<h1>Hello WorldÆØÅ!</h1>";

    $newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    echo $newstr;
    ?>
</body>
</html>