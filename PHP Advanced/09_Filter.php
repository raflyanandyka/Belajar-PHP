<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table>
    <!-- untuk mencetak filter ada apa aja -->
  <tr>
    <td>Filter Name</td>
    <td>Filter ID</td>
  </tr>
  <?php
  foreach (filter_list() as $id =>$filter) {
    echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
  }
  ?>
</table>
<br>
<hr>

<h1>membersihan html tag pada string</h1>

<?php
$x = "<h1>Hello World!</hr>";
$newX = filter_var($x, FILTER_SANITIZE_STRING);
echo $newX;
?>

<br>
<hr>

<h1>Memvalidasi integer</h1>

<?php
$x = 1;
if(!filter_var($x, FILTER_VALIDATE_INT) === false){
    echo "Integer ini valid!";
} else {
    echo "Integer ini tidak valid!";
}
?>

<br>
<hr>

<h1>Memvalidasi Alamat IP</h1>

<?php
$ip = "192.168.1.20";

if(!filter_var($ip, FILTER_VALIDATE_IP) === false){
    echo "$ip merupakan ip address valid!";
} else {
    echo "$ip ip address tidak valid!";
}

echo "<br>";
echo "<hr>";
?>

<h1>Validate and Sanitize Email</h1>

<?php
$email = "raflyanandyka28@gmail.com";

// menghapus karakter ilegal pada email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// memvalidasi email
if(!filter_var($email, FILTER_VALIDATE_EMAIL) === false){
    echo "Alamat email valid!";
} else {
    echo "Alamat email tidak valid!";
}

echo "<br>";
echo "<hr>";
?>

<h1>Validate and Sanitize URL</h1>

<?php
$url = "https://elearning.smkn43jkt.sch.id";

// menghapus karakter illegal pada url
$url = filter_var($url, FILTER_SANITIZE_URL);

// memvalidasi alamat url
if(!filter_var($url, FILTER_VALIDATE_URL) === false){
    echo "Alamat url valid!";
} else {
    echo "Alamat url tidak valid!";
}
?>
</body>
</html>