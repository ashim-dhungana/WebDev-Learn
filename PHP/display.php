<?php

$servername = "localhost";
$username = "root";
$password = "database123";
$database = "php_practice";
$conn;

$conn = mysqli_connect($servername,$username,$password,$database);
$sql = "SELECT * FROM `Student`";

$result = mysqli_query($conn,$sql);

if (mysqli_num_rows($result) > 0) {
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
}

foreach($rows as $item){
    echo "<br>" . $item['name'];
    echo "<br>" . $item['age'];
}

?>