<?php

include("../utils/dbconnect.php");

$sql = "SELECT * FROM `books`";

try {
    $result = mysqli_query($conn, $sql);
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
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
            gap: 2vw;

            padding: 2vw;
            border: 3px solid black;
            border-radius: 5px;
        }

        h3 {
            text-align: center;
            margin-bottom: 5vh;
        }
    </style>
</head>

<body>

    <h3>Books</h3>

    <div class="container">

        <?php

        while ($row = mysqli_fetch_assoc($result)) {

            $id = $row['id'];
        ?>

            <div class="card" style="width: 18rem;">
                <div class="card-body">

                    <h5 class="card-title">
                        <?php echo $row['title']; ?>
                    </h5>
                    <p class="card-text">
                        Pages: <?php echo $row['pages']; ?>
                    </p>
                    <p class="card-text">
                        Price:<?php echo $row['price']; ?>
                    </p>

                    <a href="../utils/delete.php?id=<?php echo $id ?>" class="btn btn-primary">Delete</a>
                    
                    <a href="update.php?id=<?php echo $id ?>" class="btn btn-primary">Update</a>

                </div>
            </div>

        <?php
        }
        ?>



    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>