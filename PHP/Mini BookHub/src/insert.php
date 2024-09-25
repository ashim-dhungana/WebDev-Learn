<?php

include("../utils/dbconnect.php");

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $title = $_POST['title'];
    $pages = $_POST['pages'];
    $price = $_POST['price'];

    $sql = "INSERT INTO `books` (`title`,`pages`,`price`) VALUES ('$title','$pages','$price')";

    try {
        mysqli_query($conn,$sql);
        echo "<h5> Book successfully inserted. </h5>";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <style>
        .container {
            display: flex;
            justify-content: center;
        }

        .form {
            width: 30vw;
        }

        h5,h3 {
            text-align: center;
        }
    </style>
</head>

<body>

    <h3>Insert Books</h3>
    <div class="container">

        <form action="insert.php" method="post" class="form">

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input name="title" type="text" class="form-control" id="title">
            </div>

            <div class="mb-3">
                <label for="pages" class="form-label">Pages</label>
                <input name="pages" type="number" class="form-control" id="pages">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input name="price" type="number" step="0.01" class="form-control" id="price">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>