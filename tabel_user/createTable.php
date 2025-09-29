<?php

include 'connect.php';

$sql = "CREATE table user(
id INT(11) NOT NULL AUTO_INCREMENT,
username VARCHAR(50) NOT NULL,
password VARCHAR(50) NOT NULL,
fullname VARCHAR(50) NOT NULL,
reg_date TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
PRIMARY KEY (id) 
)";

if($conn->query($sql)===TRUE){
    echo "Tabel user berhasil dibuat!<br>" . PHP_EOL;
}else{
    echo "Error creating table: " . $conn->error;
}

$conn->close();