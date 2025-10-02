<?php

include 'connect.php';

$Username = $_POST["username"];
$Password = md5($_POST["password"]);
$ConfPassword = md5($_POST["confpassword"]);
$nama_lengkap = $_POST["fullname"];

$sql = "SELECT username from users where username = '$Username'";
$result = $conn->query($sql);
if($result->num_rows>0){
    echo "Username sudah digunakan!";
    // header('Location: form_register.php');
}else if ($Password!==$ConfPassword){
    echo "Password tidak sama!";
}else{
    $sql = "INSERT INTO users (username, password, fullname)
    VALUES ('$Username', '$Password', '$nama_lengkap')";

    if ($conn->query($sql) === TRUE) {
    // echo "New record created successfully";
        header('Location: form_login.php');
    } else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }
}



$conn->close();
?>