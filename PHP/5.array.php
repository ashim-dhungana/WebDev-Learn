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
    print_r($arr1);
    
    echo "<br>";
    for ($i=0; $i<count($arr1); $i++) {
        echo $arr1[$i] . ", ";
    }
    foreach ($arr2 as $value) {
        echo $value . ", ";
    }
    echo "<br>The fruit in 3rd position is $arr1[2].";print_r($arr1);
    ?>

    <hr>

    <h3>Associative array (Dictionary)</h3>
    <?php
    $favFruits = array(
        'Ashim' => 'Mango',
        'Tony' => 'Banana',
        'Steve' => 'Strawberry'
    );
    foreach ($favFruits as $key => $value) {
        echo "The favorite fruit of $key is $value.";
        echo "<br>";
    }
    ?>

    <hr>

    <h3>Multidimensional array</h3>
    <?php
    $multi = array(
        array(1, 2, 3, 4),
        array(2, 4, 6, 8),
        array(1, 3, 5, 7),
    );
    for ($i = 0; $i < count($multi); $i++) {
        for ($j = 0; $j < count($multi[$i]); $j++) {
            echo $multi[$i][$j];
            echo " ";
        }
        echo "<br>";
    }
    ?>

</body>

</html>