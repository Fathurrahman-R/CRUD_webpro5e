
<?php

include 'connect.php';

$sql = "DELETE FROM users WHERE id=$_GET[id]";

if ($conn->query($sql) === TRUE) {
//   echo "Record deleted successfully";
    header('Location: view_all_account.php');
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?>