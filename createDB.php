<?php

include 'connect.php';

// Created database
$sql = "CREATE DATABASE my5eDB";

if ($conn->query($sql)===true){
    echo "Database created successfully!".PHP_EOL;
}else{
    echo "Error creating database: ".$conn->error;
}

$conn->close();
?>