<?php

include 'connect.php';

$Username = $_POST['username'];
$Password = md5($_POST['password']);

$sql = "SELECT username, password from user";
$result = $conn->query($sql);

while($row=$result->fetch_assoc()){
    if($Username === $row['username'] and $Password === $row['password']){
        header('Location: read.php');
    }else{
        echo "Username atau Password salah!";
    }
}