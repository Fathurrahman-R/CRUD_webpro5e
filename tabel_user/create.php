<?php

include 'connect.php';

$Username = $_POST["username"];
$Password = md5($_POST["password"]);
$nama_lengkap = $_POST["nama_lengkap"];

$sql = "SELECT username from user where username = '$Username'";
$result = $conn->query($sql);
if($result->num_rows>0){
    echo "Username sudah digunakan!";
    // header('Location: form_register.php');
}else{
    $sql = "INSERT INTO user (username, password, nama_lengkap,role)
    VALUES ('$Username', '$Password', '$nama_lengkap','GUEST')";

    if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
        header('Location: form_login.php');
    } else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }
}



$conn->close();
?>