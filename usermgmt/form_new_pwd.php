<h2>Change password</h2>
<form action="change_password.php" method="post">
    Old Password: <br><input type="password" name="oldpwd" minlength="8" placeholder="min 8 character" required><br>
    New Password: <br><input type="password" name="newpwd" minlength="8" placeholder="min 8 character" required><br>
    Confirm Password: <br><input type="password" name="confpwd" minlength="8" placeholder="min 8 character" required><br>
    <br><input type="submit" value="Change">
    <input type="hidden" name="username" value= "<?=$_GET['usn']?>"><br>
</form>
<a href="login.php"><button>Cancel</button></a>