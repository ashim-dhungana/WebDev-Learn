<?php
echo "<h2>Exception Handling in PHP</h2>";
echo "<hr>";

function divide($a, $b)
{
    if ($b == 0) {
        throw new Exception("Division by zero is not allowed.");
    } else {
        return $a / $b;
    }
}

// Try block that throws an exception
try {
    echo divide(10, 2);
    echo divide(10, 0);
}

// Catches the exception thrown by try block
catch (Exception $e) {
    echo "<br>Caught exception: " . $e->getMessage();
} finally {
    echo "<br>Finished exception handling.";
}
