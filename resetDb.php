<?php

ini_set('display_errors', 'On');

// testing mysql db connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "restaurants";

// // Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// // Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = file_get_contents("restaurants-testdata.sql");

$result = mysqli_query($conn, $sql);


if ($result) {
    echo "Reset done!";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>