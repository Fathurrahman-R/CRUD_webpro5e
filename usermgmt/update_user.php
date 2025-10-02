<?php

$UserID = $_POST["Id"];
$nama_lengkap = $_POST["fullname"];
$role = $_POST["role"];

include 'connect.php';

$sql = "UPDATE users SET fullname='$nama_lengkap', role='$role'
    WHERE id=$UserID";

if ($conn->query($sql) === TRUE) {
      // echo "New record created successfully";
    header('Location: view_all_account.php');
} else {
      echo "Error: " . $sql . "<br>" . $conn->error;
}

    

$conn->close();
?>