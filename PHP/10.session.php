<?php

// Starting session
session_start();
$_SESSION['name'] = "Ashim";
$_SESSION['id'] = 7;

$name = $_SESSION['name'];
$id = $_SESSION['id'];

echo "Session successfully created";
echo "<br> Session id: $id";
echo "<br> Session name: $name";


echo "<hr>";

// Setting a cookie that expires in 1 hour
$time = 3600;
setcookie("category", "Books", time()+$time, "/");
echo "Cookie has been set that expires in $time seconds.";


// Can be written in another php file in same domain
$cat = $_COOKIE['category'];
echo "<br>Here is the list of all $cat";

echo "<hr>";

// Destroying session
session_unset();
session_destroy();
echo "<br> Logged out!";

?>
