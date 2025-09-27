<?php

include 'connect.php';

$sql = "CREATE table user(
id INT(11) NOT NULL AUTO_INCREMENT,
username VARCHAR(50) NOT NULL,
password VARCHAR(50) NOT NULL,
nama_lengkap VARCHAR(50) NOT NULL,
role enum('ADMIN','GUEST') NOT NULL,
created TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
PRIMARY KEY (id) 
)";

if($conn->query($sql)===TRUE){
    echo "Tabel user berhasil dibuat!<br>" . PHP_EOL;
}else{
    echo "Error creating table: " . $conn->error;
}

$conn->close();