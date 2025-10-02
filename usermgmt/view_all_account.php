<?php
// Create Connection
include 'connect.php';

$sql = "SELECT * FROM users";

$result = $conn->query($sql);

echo "<a href='registration.php'>Add User Account</a><br><br>";

if($result->num_rows>0){
    echo "<table border=1>
    <tr>
    <th>No</th>
    <th>Username</th>
    <th>Nama Lengkap</th>
    <th>Role</th>
    <th>Status</th>
    <th>Reg Date</th>
    <th>Modified</th>
    <th>Action</th>
    </tr>";
    $no = 1;
    while($row = $result->fetch_assoc()){
        echo "<tr>" . 
        "<td>" . $no++ . "</td>" . 
        "<td>" . $row["username"]. "</td>" . 
        "<td>" . $row["fullname"] . "</td>" . 
        "<td>" . $row["role"] . "</td>" . 
        "<td>" . $row["status"] . "</td>" . 
        "<td>" . $row["reg_date"] . "</td>" . 
        "<td>" . $row["modified"] . "</td>" . 
        "<td> 
        <a href='form_edit_user.php?id=".$row['id']."'>Edit |</a>
        <a href='delete_account.php?id=".$row['id']."' onclick=\"return confirm('Apakah kamu yakin ingin menghapus akun ini?')\">Delete</a>". 
        "</td>" . 
        "</tr>";

    }
    echo "</table>";
}else{
    echo "0 result";
}

$conn->close();
?>