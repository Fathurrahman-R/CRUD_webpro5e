<?php

include 'connect.php';

// Create table
$sql = "CREATE TABLE products(
id INT(11) NOT NULL AUTO_INCREMENT,
name VARCHAR(50) NOT NULL,
description TEXT NOT NULL,
price DOUBLE NOT NULL,
created TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
PRIMARY KEY (id) 
)";
 

if ($conn->query($sql) === TRUE) {
  echo "Table product created successfully".PHP_EOL;
} else {
  echo "Error creating table: " . $conn->error;
}

$conn->close();
?>