<?php

$servername = 'localhost';
$username = 'root';
$password = 'database123';
$database = 'student-record';
$conn;

try {
    $conn = mysqli_connect($servername, $username, $password, $database);

    $sql = "CREATE TABLE `Student_record`(`Student_Name` VARCHAR(30) NOT NULL PRIMARY KEY, `Faculty` VARCHAR(30) NOT NULL, `Batch` VARCHAR(20) NOT NULL, `Contact` VARCHAR(20) NOT NULL )";
    try {
        mysqli_query($conn, $sql);
    } catch (Exception $e) {
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}

// Displaying Values
$displaysql = "SELECT * FROM `Student_record`";
$result = mysqli_query($conn, $displaysql);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<br>Student name = " . $row['Student_Name'];
    echo "<br>Faculty = " . $row['Faculty'];
    echo "<br>Batch = " . $row['Batch'];
    echo "<br>Contact = " . $row['Contact'];
    echo "<hr>";
}


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $faculty = $_POST['faculty'];
    $batch = $_POST['batch'];
    $contact = $_POST['contact'];

    // Inserting Values
    $insertsql = "INSERT INTO `Student_record` (`Student_Name`,`Faculty`,`Batch`,`Contact`) VALUES ('$name','$faculty','$batch','$contact')";
    mysqli_query($conn, $insertsql);


    // Editing Values
    $editsql = "UPDATE `Student_record` SET `Faculty`='MBBS' WHERE `Student_Name`='Tirth Raj'";
    mysqli_query($conn, $editsql);

    // Deleting Values
    $deletesql = "DELETE FROM `Student_record` WHERE `Student_Name`='Ajay Sharma'";
    try {
        mysqli_query($conn,$deletesql);
    } catch (Exception $e) {
        $e->getMessage();
    }

    // Displaying Values
    $displaysql = "SELECT * FROM `Student_record`";
    $result = mysqli_query($conn, $displaysql);

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<hr>";
        echo "<br>Student name = " . $row['Student_Name'];
        echo "<br>Faculty = " . $row['Faculty'];
        echo "<br>Batch = " . $row['Batch'];
        echo "<br>Contact = " . $row['Contact'];
        echo "<hr>";
    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="Q10.php" method="post">

        <label for="name">Student Name</label>
        <input type="text" name="name" id="name">

        <label for="faculty">Faculty</label>
        <input type="text" name="faculty" id="faculty">

        <label for="batch">Batch</label>
        <input type="text" name="batch" id="batch">

        <label for="contact">Contact</label>
        <input type="text" name="contact" id="contact">

        <button type="submit">Submit</button>

    </form>
</body>

</html>