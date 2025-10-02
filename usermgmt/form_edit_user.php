<?php
// Create Connection
include 'connect.php';

// Read one record by id
$sql = "SELECT * FROM users WHERE id = $_GET[id]";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

?>

<h2>Update User</h2>
<form action="update_user.php" method="post"> 
    <input type="hidden" name="Id" value="<?= $row['id']?>">
    Username: <br><input type="username" name="username" value="<?= $row['username']?>" readonly><br>
    Nama Lengkap: <br><input type="text" name="fullname" value="<?= $row['fullname']?>"><br>
    Role:
    <select name="role">
        <option value="admin" 
        <?= ($row['role']==="admin")?"selected":""; ?>
            >Admin</option>
        <option value="operator"
        <?= ($row['role']==="operator")?"selected":""; ?>
        >Operator</option>
        <option value="visitor"
        <?= ($row['role']==="visitor")?"selected":""; ?>
        >Visitor</option>
    </select><br>
    <input type="submit" value="Update User">
</form>