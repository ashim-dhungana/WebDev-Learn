<?php

session_start();
session_unset();
session_destroy();

echo "<h3> Logged Out! <h3>";

?>