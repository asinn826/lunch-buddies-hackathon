<?php
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

$sql = "select * from users";

$result = mysqli_query($conn, $sql);

$output = array();

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $output[] = $row;
    }
    echo json_encode($output);
} else {
    echo "0 results";
}

// if ($result) {
//     echo "Record retrieved successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }
?>