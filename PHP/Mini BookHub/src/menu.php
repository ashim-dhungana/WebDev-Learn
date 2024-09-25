<?php

include("../utils/dbconnect.php");

$sql = "CREATE TABLE `books` (`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY, `title` VARCHAR(50) NOT NULL, `pages` INT NOT NULL, `price` DECIMAL(10,2) NOT NULL)";

try {
    mysqli_query($conn, $sql);
} catch (Exception $e) {
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
        .buttons {
            height: 50vh;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .container {
            border: 5px solid black;
            border-radius: 10px;
            width: 20vw;

            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            gap: 2vh;
        }

        .btn {
            margin: 2vh;
        }
    </style>
</head>

<body>

    <div class="buttons">

        <?php

        session_start();
        if (isset($_SESSION['username'])) {

            $username = $_SESSION['username'];
            echo "<h3> Welcome, $username </h3>";
            
        } else {
            header("Location: ../index.php");
        }

        ?>

        <div class="container">

            <a href="insert.php">
                <button class="btn btn-dark btn-primary">
                    Insert Books
                </button>
            </a>

            <a href="view.php">
                <button class="btn btn-dark btn-primary">
                    View Books
                </button>
            </a>

            <a href="../utils/logout.php">
                <button class="btn btn-primary">
                    Log Out
                </button>
            </a>

        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>