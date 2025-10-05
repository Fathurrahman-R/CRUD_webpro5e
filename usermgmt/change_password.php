<?php

include 'connect.php';

$usn = $_POST['username'];
$oldpwd = md5($_POST['oldpwd']);
$newpwd = md5($_POST['newpwd']);
$confpwd = md5($_POST['confpwd']);

$sql = "SELECT username, password from users where username='$usn'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();

if($oldpwd===$row['password']){
    if($newpwd!==$oldpwd){
        if($newpwd===$confpwd){
            $sql = "UPDATE users set password='$newpwd' where username='$usn'";
            if($conn->query($sql)===true){
                echo "<p>Password successfully changed</p>";
                echo "<a href='login.php'><button>Login</button></a>";
            }else{
                echo "Error when updating password" . $conn->error;
            }
        }else{
            echo "<p>Please confirm password correctly!</p>";
            echo "<a href='form_new_pwd.php?usn=$usn'><button>Back</button></a>";
        }
    }else{
        echo "<p>New password can't be the same as old password!</p>";
        echo "<a href='form_new_pwd.php?usn=$usn'><button>Back</button></a>";
    }
}else{
    echo "<p>Wrong old password</p>";
    echo "<a href='form_new_pwd.php?usn=$usn'><button>Back</button></a>";
}