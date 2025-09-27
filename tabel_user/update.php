<?php

$UserID = $_POST["Id"];
$Username = $_POST["username"];
$Password = md5($_POST["password"]);
$nama_lengkap = $_POST["nama_lengkap"];
$Role = $_POST["role"];

include 'connect.php';

$sql = "SELECT username from user where username = '$Username'";
$result = $conn->query($sql);

if($result->num_rows>0){
    echo "Username sudah digunakan!";
    // header('Location: form_register.php');
} else {
  $sql = "UPDATE user SET username='$Username', password='$Password', nama_lengkap='$nama_lengkap', role='$Role'
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