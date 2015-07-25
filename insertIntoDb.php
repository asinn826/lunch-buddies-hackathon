<?php
$fullName = $_GET['fullName'];
$peanutAllergy = $_GET['peanutAllergy'];
$glutenFree = $_GET['glutenFree'];
$vegan = $_GET['vegan'];

$vals = array (
    'fullName' => $fullName,
    'peanutAllergy' => $peanutAllergy,
    'glutenFree' => $glutenFree,
    'vegan' => $vegan
);

// echo json_encode($vals); // THIS CAN BE USED TO DEBUG
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

$sql = "insert into users (PersonName, PeanutAllergy, GlutenFree, Vegan)
    values ('" . $fullName . "'," . $peanutAllergy . "," . $glutenFree . "," . $vegan . ")";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?> 