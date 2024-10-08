<?php

$servername = "localhost";
$username = "root";
$password = "database123";
$database = "php_practice";
$conn;

$conn = mysqli_connect($servername, $username, $password, $database);
$sql = "SELECT * FROM `Student`";

$result1 = mysqli_query($conn, $sql);
$result2 = mysqli_query($conn, $sql);


// Retrieving all the rows at once as an associative array

echo "<h3> Retrieving All Rows At Once </h3>";
if (mysqli_num_rows($result1) > 0) {
    $rows = mysqli_fetch_all($result1, MYSQLI_ASSOC);

    foreach ($rows as $item) {
        echo "<br> Name: " . $item['name'];
        echo "<br> Age: " . $item['age'];
        echo "<br>";
    }
} else {
    echo "0 results";
}

echo "<hr>";

// Retrieving one row at a time until all the rows are finished

echo "<h3> Retrieving Rows One By One </h3>";
if ($result2) {
    while($rows = mysqli_fetch_assoc($result2)){
        echo "<br> Name: " . $rows['name'];
        echo "<br> Age: " . $rows['age'];
        echo "<br>";
    }
} else {
    echo "0 results";
}

?>