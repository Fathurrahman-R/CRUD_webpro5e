<?php
// Create Connection
include 'connect.php';

// Read one record by id
$sql = "SELECT * FROM user WHERE id = $_GET[id]";
$result = $conn->query($sql);
$row = $result->fetch_assoc();


?>

<h2>Update User</h2>
<form action="update.php" method="post"> 
    <input type="hidden" name="Id" value="<?= $row['id']?>">
    Username: <br><input type="username" name="username" value="<?= $row['username']?>"><br>
    Password: <br><input type="password" name="password" value="<?= $row['password']?>"><br>
    Nama Lengkap: <br><input type="text" name="nama_lengkap" value="<?= $row['nama_lengkap']?>"><br>
    Role: <br>
    <input type="radio" name="role" value="ADMIN" <?php
    if ($row['role'] === "ADMIN")
        echo 'checked';
    ?>>
    <label for="ADMIN">ADMIN</label><br>
    <input type="radio" name="role" value="GUEST" <?php
    if ($row['role'] === "GUEST")
        echo 'checked';
    ?>>
    <label for="GUEST">GUEST</label><br>
    <input type="submit" value="Update">
</form>