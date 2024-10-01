<?php

// REGEX

$pattern1 = "/abc/";
$pattern2 = "/abc/i";
$pattern3 = "/^a/";
$pattern4 = "/a$/";
$pattern5 = "/[A-Z]/";
$pattern6 = "/[0-9]/";

$statement = "A line is this line which has abc letters and 123 number with capital ARC";

$result1 = preg_match($pattern1,$statement,$matches);
$result2 = preg_match_all($pattern4,$statement,$matches);

echo $result1;
echo "<br>";
echo $result2;


// Exception Handling

try{
    $num1 = 5;
    $num2 = 0;
    if ($num2==0){
        throw new Exception("Cannot divide by zero.");
    } else {
        echo $num1/$num2;
    }
} catch (Exception $e){
    echo "Error: ".$e->getMessage();
}
finally{
    echo "This is finally statement.";
}

?>