<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Pemrograman PHP</title>
</head>
<body>
    <h1>Integer</h1>
    <?php
    // 2, 256, -256, 10358, -179567 are all integers.

    // An integer is a number without any decimal part.

    // An integer data type is a non-decimal number between -2147483648 and 2147483647 in 32 bit systems,
    // and between -9223372036854775808 and 9223372036854775807 in 64 bit systems.
    // A value greater (or lower) than this, will be stored as float,
    // because it exceeds the limit of an integer.

    // PHP has the following predefined constants for integers:
    //     PHP_INT_MAX - The largest integer supported
    //     PHP_INT_MIN - The smallest integer supported
    //     PHP_INT_SIZE -  The size of an integer in bytes

    // PHP has the following functions to check if the type of a variable is integer:  
    //     is_int()
    //     is_integer() - alias of is_int()
    //     is_long() - alias of is_int()

    $var1 = 5092;
    echo "Apakah $var1 Integer?<br>";
    var_dump(is_int($var1));
    echo "<br>";
    var_dump($var1);
    echo "<hr>"
    ?>
    <h1>Floats</h1>
    <?php
    // A float is a number with a decimal point or a number in exponential form.

    // 2.0, 256.4, 10.358, 7.64E+5, 5.56E-5 are all floats.
    
    // The float data type can commonly store a value up to 1.7976931348623E+308 (platform dependent), 
    // and have a maximum precision of 14 digits.
    
    // PHP has the following predefined constants for floats (from PHP 7.2):
    
    // PHP_FLOAT_MAX - The largest representable floating point number
    // PHP_FLOAT_MIN - The smallest representable positive floating point number
    // PHP_FLOAT_DIG - The number of decimal digits that can be rounded into a float and back without precision loss
    // PHP_FLOAT_EPSILON - The smallest representable positive number x, so that x + 1.0 != 1.0
    
    // Untuk mengetahui apakah float atau bukan:
    
    // is_float()
    // is_double() - alias of is_float()
    $x = 10.10;
    echo "Apakah $x = Float?<br>";
    var_dump(is_float($x));
    echo "<br>";
    var_dump($x);
    echo "<hr>";
    ?>
    <h1>Infinity</h1>
    <?php
    // A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.
    
    // PHP has the following functions to check if a numeric value is finite or infinite:
    // is_finite()
    // is_infinite()

    $x = 1.9e411;
    echo "Apakah $x = Infinity?<br>";
    var_dump(is_infinite($x));
    echo "<br>";
    var_dump($x);
    echo "<hr>";
    ?>
    <h1>NaN</h1>
    <?php
    // NaN stands for Not a Number.

    // NaN is used for impossible mathematical operations.
    
    // PHP has the following functions to check if a value is not a number:
    // is_nan()

    $x = acos(8);
    echo "Apakah $x itu NaN?<br>";
    var_dump(is_nan($x));
    echo "<br>";
    var_dump($x);
    echo "<hr>";
    ?>
    <h1>Numerical Setting</h1>
    <?php
    // is_numeric berfungsi untuk mengetahui apakah variable termasuk numeric atau bukan
    // jika numerik true dan jika tidak numerik false

    $x = 5985;
    echo "Apakah $x termasuk numeric?<br>";
    var_dump(is_numeric($x));
    echo "<br>";
    $x = "5985";
    echo "Apakah $x termasuk numeric?<br>";
    var_dump(is_numeric($x));
    echo "<br>";
    $x = "59.85" + 100;
    echo "Apakah $x termasuk numeric?<br>";
    var_dump(is_numeric($x));
    echo "<br>";
    $x = "Hello";
    echo "Apakah $x termasuk numeric?<br>";
    var_dump(is_numeric($x));
    echo "<hr>";
    ?>
    <h1>Casting String and Float to integer</h1>
    <?php
    // Sometimes you need to cast a numerical value into another data type.
    // The (int), (integer), atau intval() adalah fungsi untuk mengubah ke integer

    // mengubah float ke integer
    $old = 10.7;
    $new = (int)$old;
    echo "$old diubah menjadi >> $new";
    echo "<br>";
    
    // mengubah string ke integer
    $old = "1082.873";
    $new = (int)$old;
    echo "$old diubah menjadi >> $new";
    ?>
</body>
</html>