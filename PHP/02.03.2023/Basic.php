<!DOCTYPE html>
<html>

<head>
    <title>PHP</title>
</head>

<body>

    <?php
    echo "Hi, I'm a PHP script!";
    ?>
    <p>Outside the PHP tag, the content would not be prased</p>

    <?php

    //echo
    echo "Echo does not required any parantheses.";
    echo "<br>";
    echo 'I ', 'am ', 'Dharanesh', "<br>";

    $lang = "PHP";
    echo "I am currently learning $lang", "<br>";

    //implode() function returns a string from the elements of an array.
    $students = ["Dharanesh", "Siva", "Gokul"];
    echo implode(" and ", $students);
    echo "<br>";

    echo ("Hello"), (" Dharanesh"); //Hello Dharanesh
    echo "<br>", "<br>", "<br>";

    // echo ("Hello"," Dharanesh"); Throws an error bcz it is not an valid exp...

    //Print
    print "Print also doesn't required any parentheses";
    ?>
</body>

</html>