<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "adv";

// Establish a database connection
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
