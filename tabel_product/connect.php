<?php

$servername = "localhost";
$username = "root";
$password = "1234";
$dbName = "my5edb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbName);

// Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully"."<br>".PHP_EOL;

?>
