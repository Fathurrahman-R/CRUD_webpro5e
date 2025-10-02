<?php

include 'connect.php';

$Username = $_POST["username"];
$Password = md5($_POST["password"]);
$nama_lengkap = $_POST["fullname"];
$role = $_POST["role"];

$sql = "SELECT username from users where username = '$Username'";
$result = $conn->query($sql);
if($result->num_rows>0){
    echo "Username sudah digunakan!";
    // header('Location: form_register.php');
}
// else if ($Password!==$ConfPassword){
//     echo "Password tidak sama!";
// }
else{
    $sql = "INSERT INTO users (username, password, fullname, role)
    VALUES ('$Username', '$Password', '$nama_lengkap', '$role')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        // header('Location: form_login.php');
    } else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }
}



$conn->close();
?>