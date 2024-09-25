<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username=="admin" && $password=="password"){
        
        session_start();
        $_SESSION['username'] = $username;

        header("Location: ../src/menu.php");
    }
    else {
        header("Location: ../index.php");
    }
}

?>