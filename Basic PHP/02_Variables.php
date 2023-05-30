<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Pemrograman PHP</title>
</head>
<body>
    <h1>Variables</h1>
    <?php
    // Rules for PHP variables:
    // A variable starts with the $ sign, followed by the name of the variable
    // A variable name must start with a letter or the underscore character
    // A variable name cannot start with a number
    // A variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
    // Variable names are case-sensitive ($age and $AGE are two different variables)

    $text = "Hello World!";
    $num1 = 1;
    $num2 = 12.5;

    echo "This is basic syntax: $text";
    echo "<br>";
    echo "This is basic syntax:" . "$text";
    echo "<br>";
    echo "<br>";
    
    echo "Number 1 is: $num1";
    echo "<br>";
    echo "Number 2 is: $num2";
    echo "<br>";
    echo "$num1 + $num2 is: " . $num1 + $num2;
    ?>

    <h1>Variables Scope</h1>
    <?php
    // A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function:
    $x = 5; // global scope

    function myTest() {
        // using x inside this function will generate an error
        // The global keyword is used to access a global variable from within a function.
        global $x;
        echo "<p>Variable x inside function is: $x</p>";
    }

    function myTest2(){
        // PHP also stores all global variables in an array called $GLOBALS[index]. 
        // The index holds the name of the variable. 
        // This array is also accessible from within functions and can be used to update global variables directly.
        $x = $GLOBALS['x'];
        echo "<p>Variable x inside function is: $x</p>";
    }
    myTest2();

    echo "<p>Variable x outside function is: $x</p>";
    echo "<br><br>";
    // Normally, when a function is completed/executed, all of its variables are deleted. 
    // However, sometimes we want a local variable NOT to be deleted. We need it for a further job.
    // To do this, use the static keyword when you first declare the variable:
    
    function myTest3() {
        static $x = 0;
        echo $x;
        $x++;
    }
      
     myTest3();
     myTest3();
     myTest3();
    ?>
</body>
</html>