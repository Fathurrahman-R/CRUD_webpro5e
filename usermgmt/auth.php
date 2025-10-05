<?php

include 'connect.php';

$usn = $_POST['username'];
$pwd = md5($_POST['password']);

$sql = "SELECT username, password, role, status from users where username='$usn'";
$result = $conn->query($sql);

if($result->num_rows>0){
    $row = $result->fetch_assoc();
    if($row['username']===$usn and $row['password']===$pwd){
        if($row['status']==='ACTIVE'){
            switch($row['role']){
                case "admin":
                    header('Location: view_all_account.php?role='.$row['role']);
                    break;
                case "operator":
                    header('Location: ../tabel_product/read.php?role='.$row['role']);
                    break;
                case "visitor":
                    header('Location: ../tabel_product/view_product.php');
                    break;
            }
        }else{
            echo "<p>Your Account isn't activated yet</p>";
            echo "<a href='login.php'><button>Back</button></a>";
        }
    }else{
        echo "<p>Wrong username and password</p>";
        echo "<a href='login.php'><button>Back</button></a>";
    }
}else{
    echo "<p>Wrong username and password</p>";
    echo "<a href='login.php'><button>Back</button></a>";
}