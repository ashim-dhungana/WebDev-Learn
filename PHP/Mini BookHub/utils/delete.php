<?php

include("dbconnect.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "DELETE FROM `books` WHERE `id`='$id'";

    try {
        mysqli_query($conn, $sql);
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}

header("Location: ../src/view.php");