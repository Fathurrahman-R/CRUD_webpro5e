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
    Username: <br><input type="email" name="username" value="<?= $row['username']?>"><br>
    Password lama: <br><input type="password" name="oldpassword" ><br>
    Password baru: <br><input type="password" name="newpassword" ><br>
    Nama Lengkap: <br><input type="text" name="fullname" value="<?= $row['fullname']?>"><br>
    Role: <br><input type="text" name="role" value="<?= $row['role']?>"><br>
    Status: <br>
    <input type="radio" name="status" value="ACTIVE" <?php
    if ($row['status'] === "ACTIVE")
        echo 'checked';
    ?>>
    <label for="ACTIVE">ACTIVE</label><br>
    <input type="radio" name="status" value="INACTIVE" <?php
    if ($row['status'] === "INACTIVE")
        echo 'checked';
    ?>>
    <label for="INACTIVE">INACTIVE</label><br>
    <input type="submit" value="Update">
</form>