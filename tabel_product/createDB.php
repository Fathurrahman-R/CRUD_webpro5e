<?php

$servername = "localhost";
$username = "root";
$password = "1234";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}

// Created database
$sql = "CREATE DATABASE my5eDB";

if ($conn->query($sql)===true){
    echo "Database created successfully!".PHP_EOL;
}else{
    echo "Error creating database: ".$conn->error;
}

$conn->close();
?>