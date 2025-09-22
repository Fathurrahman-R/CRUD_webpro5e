<?php
// Create Connection
include 'connect.php';

// Read one record by id
$sql = "SELECT * FROM products WHERE id = $_GET[id]";
$result = $conn->query($sql);
$row = $result->fetch_assoc();


?>

<h2>Update Product</h2>
<form action="update.php" method="post"> 
    <br><input type="hidden" name="Id" value="<?= $row['id']?>"><br>
    Name: <br><input type="text" name="name" value="<?= $row['name']?>"><br>
    Description: <br><textarea name="desc" id="" ><?= $row['description']?></textarea><br>
    Price: <br><input type="number" name="price" value="<?= $row['price']?>"><br><br>
    <input type="submit" value="Update Product">
</form>