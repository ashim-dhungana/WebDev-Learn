<?php

include("../utils/dbconnect.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM `books` WHERE `id`='$id'";

    try {
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
            $updateid = $row['id'];
            $updatetitle = $row['title'];
            $updatepages = $row['pages'];
            $updateprice = $row['price'];
        }
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $pages = $_POST['pages'];
    $price = $_POST['price'];

    $sql = "UPDATE `books` SET `title`='$title', `pages`='$pages', `price`='$price' WHERE `id`='$id'";

    try {
        mysqli_query($conn, $sql);
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }

    header("Location: view.php");

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

        h5,
        h3 {
            text-align: center;
        }
    </style>
</head>

<body>

    <h3>Insert Books</h3>
    <div class="container">

        <form action="update.php" method="post" class="form">

            <div class="mb-3">
                <label for="id" class="form-label">Id</label>
                <input name="id" type="number" class="form-control" id="id" value="<?php echo $updateid ?>"  readonly>
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input name="title" type="text" class="form-control" id="title" value="<?php echo $updatetitle ?>">
            </div>

            <div class="mb-3">
                <label for="pages" class="form-label">Pages</label>
                <input name="pages" type="number" class="form-control" id="pages" value="<?php echo $updatepages ?>">
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Price</label>
                <input name="price" type="number" step="0.01" class="form-control" id="price" value="<?php echo $updateprice ?>">
            </div>

            <button type="submit" class="btn btn-primary">Update</button>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>