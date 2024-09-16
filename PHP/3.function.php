<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h3>Function</h3>

    <?php

    function totalmarks($marks)
    {
        $sum = 0;

        echo "The marks are:<br>";
        for ($i = 0; $i < 5; $i++) {
            echo $marks[$i];
            echo "<br>";
        }
        foreach ($marks as $value) {
            $sum += $value;
        }
        return $sum;
    }

    $marks = [23, 34, 45, 56, 67];
    $answer = totalmarks($marks);
    echo "<br>";
    echo "Total marks = $answer";

    ?>

    <hr>

    <h3>Recursion</h3>

    <?php

    function recursion($num){
        if($num==0 || $num==1){
            return 1;
        }
        return $num*recursion($num-1);
    }
    $number = 7;
    $fact = recursion($number);
    echo "The factorial of $number = $fact";

    ?>

</body>

</html>