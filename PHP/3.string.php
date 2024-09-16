<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h3>String Manipulation</h3>

    <hr>

    <?php

    $firstname = "Ashim";
    $lastname = "Dhungana";
    $nickname = "god";
    $statement = "My nickname is $nickname";

    $fullname = $firstname." ".$lastname;
    echo "The fullname is $fullname. <br>";

    $length = strlen($firstname);
    echo "The length of name is $length <br>";

    $reverse = strrev($firstname);
    echo "Reverse of name: $reverse";

    $upper = strtoupper($fullname);
    $lower = strtolower($fullname);
    echo "<br> Name in uppercase = $upper <br> Name in lowercases = $lower <br>";

    $position = strpos($statement,"god");
    echo "The position of 'god' in the statement = $position <br><br>";

    echo $statement;
    echo "<br>";
    echo str_replace("nickname","main-name", $statement);

    ?>

</body>

</html>