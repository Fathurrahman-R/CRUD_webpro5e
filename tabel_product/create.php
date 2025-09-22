<?php

$ProdName = $_POST["name"];
$ProdDesc = $_POST["desc"];
$ProdPrice = $_POST["price"];

include 'connect.php';

$sql = "INSERT INTO products (name, description, price)
VALUES ('$ProdName', '$ProdDesc', $ProdPrice)";

if ($conn->query($sql) === TRUE) {
  // echo "New record created successfully";
  header('Location: read.php');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>