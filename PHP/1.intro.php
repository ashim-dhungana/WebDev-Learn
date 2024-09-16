<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h3>Intro to PHP</h3>

    <?php

    echo "Hello world";

    // Writing HTML inside php tag
    echo "<hr/>";

    $name = "Ashim";
    $age = 23;
    echo "The age of $name is $age";

    ?>

    <hr>

    <h3>Using Conditional Statements</h3>

    <?php
        $a=5;
        if($a%2==0){
            echo "The number is $a and it is even.";
        }
        else{
            echo "The number is $a and it is odd.";
        }
    ?>

</body>

</html>