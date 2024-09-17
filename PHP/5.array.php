<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>Arrays</h2>

    <hr>

    <?php
    echo "<h3>Normal array</h3>";

    $arr1 = array("Apple", "Mango", "Banana");
    $arr2 = ["Audi", "Mercedes", "Tesla"];

    foreach ($arr1 as $value) {
        echo $value . ", ";
    }
    foreach ($arr2 as $value) {
        echo $value . ", ";
    }
    ?>

    <hr>

    <h3>Associative array (Dictionary)</h3>
    <?php
    $favFruits = array(
        'Ashim' => 'Mango',
        'Tony' => 'Banana',
        'Steve' => 'Strawberry'
    );
    foreach ($favFruits as $key => $value){
        echo "The favorite fruit of $key is $value.";
        echo "<br>";
    }
    ?>

    <hr>

</body>

</html>