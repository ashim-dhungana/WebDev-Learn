<!-- PHP arrays with example -->

<?php
    // Indexed array
    $arr1 = array('Mango','Banana',23);
    $arr2 = ['Apple','Strawberry',32];

    // Associative array
    $arr3 = [
        'Name' => 'Ashim',
        'Age' => 23
    ];

    // Multidimensional array
    $arr4 = [
        ['Mango','Banana',23],
        ['Apple','Strawberry',32]
    ];

    // For Loop
    for($i=0;$i<5;$i++){
        echo $i;
    }

    // Foreach loop
    foreach($arr1 as $value){
        echo $value;
    }

    // Foreach loop for Associative array
    foreach($arr3 as $key=>$value){
        echo "The value of $key is $value";
    }
?>