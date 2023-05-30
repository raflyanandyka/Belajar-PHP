<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Pemrograman PHP</title>
</head>
<body>
    <h1>Data Type</h1>
    <?php
    // var_dump to return data type

    $var1 = "Hello World!"; // String
    var_dump($var1);
    echo "<br>";
    echo "<br>";
    $var2 = 123; // integer
    var_dump($var2);
    echo "<br>";
    echo "<br>";
    $var3 = 12.3; // float
    var_dump($var3);
    echo "<br>";
    echo "<br>";
    $var4 = true; // boolean
    $var5 = false; // boolean
    var_dump($var4);
    var_dump($var5);
    echo "<br>";
    echo "<br>";
    $var6 = array("satu", "dua", "tiga"); // array
    var_dump($var6);
    echo "<br>";
    echo "<br>";
    // Null is a special data type which can have only one value: NULL.
    // A variable of data type NULL is a variable that has no value assigned to it.
    // Tip: If a variable is created without a value, it is automatically assigned a value of NULL.
    // Variables can also be emptied by setting the value to NULL:

    $x = "Hello world!";
    $x = null; // null
    var_dump($x);

    // Classes and objects are the two main aspects of object-oriented programming.
    // A class is a template for objects, and an object is an instance of a class.
    // When the individual objects are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.
    // Let's assume we have a class named Car. A Car can have properties like model, color, etc. We can define variables like $model, $color, and so on, to hold the values of these properties.
    // When the individual objects (Volvo, BMW, Toyota, etc.) are created, they inherit all the properties and behaviors from the class, but each object will have different values for the properties.
    // If you create a __construct() function, PHP will automatically call this function when you create an object from a class.
    ?>
</body>
</html>