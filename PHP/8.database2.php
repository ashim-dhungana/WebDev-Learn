<?php

$servername = "localhost";
$username = "root";
$password = "database123";
$database = "php_practice";
$conn;

try{
    $conn = mysqli_connect($servername,$username,$password,$database);
}
catch(Exception $e){
    echo "Exception: " . $e->getMessage();
}

echo "<h2>CRUD operations for Database";
echo "<hr>";


// CREATING TABLE

echo "<h3>Creating table</h3>";

$sql = "CREATE TABLE `Employees` (`Sno` INT NOT NULL AUTO_INCREMENT , `Name` VARCHAR(20) NOT NULL , `Position` VARCHAR(20) NOT NULL , PRIMARY KEY (`Sno`))";
try{
    mysqli_query($conn,$sql);
    echo "New table created.";
} catch (Exception $e){
    echo "Exception: " . $e->getMessage();
}

echo "<hr>";


// INSERTING DATA IN TABLE

echo "<h3>Inserting Data</h3>";

$sql = "INSERT INTO `Employees` (`Sno`, `Name`,`Position`) VALUES ('1','Ashim','CEO')";
$sql = "INSERT INTO `Employees` (`Name`,`Position`) VALUES ('Ashim','CEO')";
try{
    mysqli_query($conn,$sql);
    echo "Data successfully inserted.";
} catch(Exception $e){
    "Exception: " . $e->getMessage();
}

?>