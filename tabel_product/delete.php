
<?php

include 'connect.php';

$sql = "DELETE FROM products WHERE id=$_GET[id]";

if ($conn->query($sql) === TRUE) {
//   echo "Record deleted successfully";
    header('Location: read.php');
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>