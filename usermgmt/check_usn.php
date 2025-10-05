<?php

include 'connect.php';

$usn = $_POST['username'];

$sql = "SELECT username from users where username='$usn'";
if(($conn->query($sql))->num_rows>0){
    header('Location: form_new_pwd.php?usn='.$usn);
}else{
    echo "<p>Username not found!</p>";
    echo "<a href='form_change_pwd.php'><button>Back</button></a>";
}
