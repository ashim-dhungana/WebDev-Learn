<?php

$servername = 'localhost';
$username = 'root';
$password = 'database123';
$database = 'student-record';
$conn;

try{
    $conn = mysqli_connect($servername,$username,$password,$database);
} catch(Exception $e){
    echo "Error: " . $e->getMessage();
}

$sql = "CREATE TABLE `Staff` (`ID` INT NOT NULL PRIMARY KEY, `Name` VARCHAR(30) NOT NULL, `Address` VARCHAR(100) NOT NULL, `Contact` VARCHAR(20) NOT NULL, `Gender` VARCHAR(10) NOT NULL)";

try{
    mysqli_query($conn,$sql);
}
catch(Exception $e){}


if($_SERVER['REQUEST_METHOD']=='POST'){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $address = $_POST['address'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];

    $insertsql = "INSERT INTO `Staff` (`ID`,`Name`,`Address`,`Contact`,`Gender`) VALUES ('$id','$name','$address','$contact','$gender')";

    $showsql = "SELECT * FROM `Staff`";

    $updatesql = "UPDATE `Staff` SET `Contact`='Belbari-Morang' WHERE `ID`=2";

    $deletesql = "DELETE FROM `Staff` WHERE `ID`=3";


    if ($_POST['action']=='save'){
        try{
            mysqli_query($conn,$insertsql);
        } catch (Exception $e){
            echo "Error: " . $e->getMessage(); 
        }
    }

    if ($_POST['action']=='show'){
        try{
            $result = mysqli_query($conn,$showsql);
            while ($row = mysqli_fetch_assoc($result)){
                echo "<br>Staff Id: ".$row['ID'];
                echo "<br>Staff Name: ".$row['Name'];
                echo "<br>Address: ".$row['Address'];
                echo "<br>Contact: ".$row['Contact'];
                echo "<br>Gender: ".$row['Gender'];
                echo "<hr>";
            }
        } catch (Exception $e){
            echo "Error: " . $e->getMessage();
        }
    }

    if ($_POST['action']=='update'){
        try{
            mysqli_query($conn,$updatesql);
        } catch (Exception $e){}
    }

    if ($_POST['action']=='delete'){
        try{
            mysqli_query($conn,$deletesql);
        } catch (Exception $e){}
    }


}


?>


<!DOCTYPE html>
<html>

<head>
    <title>CRUD Operations</title>
</head>

<body>

    <form action="Q14.php" method="post">

        <div>
            <label for="id">Staff ID</label>
            <input type="number" name="id" id="id">
        </div>

        <div>
            <label for="name">Staff Name</label>
            <input type="text" name="name" id="name">
        </div>

        <div>
            <label for="address">Address</label>
            <textarea name="address" id="address"></textarea>
        </div>

        <div>
            <label for="contact">Contact</label>
            <input type="tel" name="contact" id="contact">
        </div>

        <div>
            <label for="gender">Gender</label>
            <input type="radio" name="gender" value="Male">Male
            <input type="radio" name="gender" value="Female">Female
        </div>

        <button type="submit" name="action" value="save">Save</button>
        <button type="submit" name="action" value="show">Show</button>
        <button type="submit" name="action" value="update">Update</button>
        <button type="submit" name="action" value="delete">Delete</button>

    </form>

</body>

</html>