<?php

$UserID = $_POST["Id"];
$Username = $_POST["username"];
$oldPassword = md5($_POST["oldpassword"]);
$newPassword = md5($_POST["newpassword"]);
$nama_lengkap = $_POST["fullname"];

include 'connect.php';

$sql = "SELECT username, password from user where username = '$Username'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if($result->num_rows>0 and $row['username']!==$Username){
    echo "Username sudah digunakan!";
    // header('Location: form_register.php');
} else if($oldPassword!==$row['password']){
    echo "Password lama salah!";
} else if($newPassword===$row['password']){
    echo "Password baru tidak boleh sama dengan password lama!";
} else {
    $sql = "UPDATE user SET username='$Username', password='$newPassword', fullname='$nama_lengkap'
    WHERE id=$UserID";

    if ($conn->query($sql) === TRUE) {
      // echo "New record created successfully";
      header('Location: read.php');
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>