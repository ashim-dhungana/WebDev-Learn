<!-- String Manipulation in PHP -->

<?php
$statement = "This is a line of text.";
$name = "Ashim";
echo strlen($name);
echo "<hr>";
echo $statement." ".$name;
echo "<hr>";
echo strrev($statement);
echo "<hr>";
echo strtoupper($name);
echo "<hr>";
echo strtolower($name);
echo "<hr>"
?>

<!-- Iteration Statements -->

<?php

// While Loop
$i=0;
while($i<5){
    echo $i;
    $i++;
}
echo "<hr>";

// For Loop
for($i=0;$i<5;$i++){
    echo $i;
}
echo "<hr>";

// Foreach Loop
$arr = ['apple', 34, 'banana'];
foreach($arr as $value){
    echo $value."<br>";
};
echo "<hr>";

// Foreach Loop for Associative Array
$arr2 = [
    'name' => 'Ashim',
    'age' => 23
];
foreach($arr2 as $key=>$value){
    echo "The value of $key is $value <br>";
};


?>

<!-- Regular Expression -->


<?php

$pattern1 = "/abc/";
$pattern2 = "/abc/i";
$pattern3 = "/^abc/";
$pattern4 = "/abc$/";
$pattern5 = "/[A-Z]/";
$pattern6 = "/[0-9]/";


$statement = "abc This is abcstatement where 34 ART is newabc also AbC so it ends in abc";

echo preg_match($pattern1,$statement,$matches);
echo preg_match($pattern2,$statement,$matches);
echo preg_match($pattern3,$statement,$matches);
echo preg_match($pattern4,$statement,$matches);
echo preg_match($pattern5,$statement,$matches);
echo preg_match($pattern6,$statement,$matches);
?>