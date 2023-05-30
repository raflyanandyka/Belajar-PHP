<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Pemrograman PHP</title>
</head>
<body>
    <h1>Strings</h1>
    <?php
    // The PHP strlen() function returns the length of a string.
    $var1 = "Hello World!";
    echo "$var1" . " " . "contains" . " " . strlen("$var1") . "Characters";
    echo "<br><br>";
    
    // The PHP str_word_count() function counts the number of words in a string.
    echo "$var1" . " " . "contains". " " . str_word_count($var1) . "Words";
    echo "<br><br>";
    
    // The PHP strrev() function reverses a string.
    echo "$var1" . " " . "Reversed To >>" . " " . strrev($var1);
    echo "<br><br>";
    
    // The PHP strpos() function searches for a specific text within a string.
    // If a match is found, the function returns the character position of the first match.
    // If no match is found, it will return FALSE.
    // Tip: The first character position in a string is 0 (not 1).
    echo "$var1" . " " . "found 'WORLD' at >>>" . " " . strpos($var1, "World!");
    echo "<br><br>";

    // The PHP str_replace() function replaces some characters with some other characters in a string.
    echo "$var1" . " " . "Replaced 'World!' with 'Rafly!'>>>>" . " " . str_replace("World!", "Rafly!", "$var1");

    ?>
</body>
</html>