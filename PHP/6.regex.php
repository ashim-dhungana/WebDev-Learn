<!-- Regular Expressions in PHP -->

<?php

echo "<h2>Regular Expressions (regex) </h2>";
echo "<hr>";

// preg_match
echo "<h3> preg_match </h3>";
$statement1 = "I am learning php.";
$pattern = "/php/";

echo "Statement = $statement1";
echo "<br> Pattern = $pattern <br>";

if (preg_match($pattern,$statement1)){
    echo "Match found!";
} else{
    echo "Not found.";
}

echo "<hr>";

// preg_match_all
echo "<h3> preg_match_all </h3>";
$statement2 = "My age is 23 and I have 1 big dick.";
$pattern = "/[0-9]/";

echo "Statement = $statement2";
echo "<br> Pattern = $pattern <br>";
preg_match_all($pattern,$statement2,$matches);

// $matches stores the array of the matching pattern in statement
for ($i=0; $i<count($matches); $i++){
    for ($j=0; $j<count($matches[$i]); $j++){
        echo $matches[$i][$j] . "  ";
    }
}

echo "<hr>";

// preg_replace
echo "<h3> preg_replace </h3>";
$statement3 = "My favorite car is Audi R8.";
$pattern = "/audi r8/i";
$replacement = "Mercedes-AMG GT";

echo "Original statement: $statement3";
$result = preg_replace($pattern,$replacement,$statement3);
echo "<br> After replacement: $result";
?>