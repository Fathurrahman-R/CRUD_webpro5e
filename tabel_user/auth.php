<?php

include 'connect.php';

$Username = $_POST['username'];
$Password = md5($_POST['password']);

$sql = "SELECT username, password, status from users";
$result = $conn->query($sql);

while($row=$result->fetch_assoc()){
    if($Username === $row['username'] and $Password === $row['password'] ){
        if($row['status']==="ACTIVE"){
            header('Location: read.php');
        }else{
            echo "Akun belum diaktivasi!";
        }
    }else{
        echo "Username atau Password salah!";
    }
}