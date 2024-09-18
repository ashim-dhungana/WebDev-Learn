<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $position = $_POST['position'];
    echo $name;
    echo $position;

    $servername = "localhost";
    $username = "root";
    $password = "database123";
    $database = "php_practice";
    $conn;

    $conn = mysqli_connect($servername, $username, $password, $database);

    $sql = "INSERT INTO `Employees` (`Name`,`Position`) VALUES ('$name','$position')";

    try {
        mysqli_query($conn, $sql);
        echo "Data successfully inserted";
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
    <title>Form</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>

    <form action="form.php" method="post">

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>

            <input name="name" type="text" class="form-control">
        </div>

        <div class="mb-3">
            <label for="position" class="form-label">Position</label>

            <input name="position" type="text" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>

    </form>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>