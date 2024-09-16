<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h2>Time for Loops</h2>

    <hr>

    <?php
    echo "<h3>For Loop</h3>";
    for ($i=0; $i<5; $i++){
        echo $i;
        echo "<br>";
    }

    echo "<hr>";

    echo "<h3>Foreach Loop</h3>";
    $arr=["This","is","an","array","of",7,"words"];
    
    foreach ($arr as $value) {
        echo $value;
        echo "<br>";
    }
    ?>

</body>

</html>