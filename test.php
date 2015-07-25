<?php
// testing mysql db connection
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$html = file_get_contents('./index.php');
$doc = new DOMDocument();
libxml_use_internal_errors(true);
$doc->loadHTML($html);
$finder = new DomXPath($doc);
$node = $finder->query("//*[contains(@class, 'form-control')]");
echo $node;
?> 