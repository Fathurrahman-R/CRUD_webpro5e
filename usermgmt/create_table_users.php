<?php

include 'connect.php';

$sql = "CREATE table users(
id INT(11) NOT NULL AUTO_INCREMENT,
username VARCHAR(50) NOT NULL UNIQUE,
password VARCHAR(100) NOT NULL,
fullname VARCHAR(50) NOT NULL,
role VARCHAR(20) NOT NULL,
status enum('ACTIVE','INACTIVE') DEFAULT 'INACTIVE' NOT NULL,
reg_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
modified TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
PRIMARY KEY (id) 
)";

if($conn->query($sql)===TRUE){
    echo "Tabel user berhasil dibuat!<br>" . PHP_EOL;
}else{
    echo "Error creating table: " . $conn->error;
}

$conn->close();