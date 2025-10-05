<h2>Login</h2>
<form action="auth.php" method="post"> 
    Username: <br><input type="username" name="username" placeholder="email@example.com" required><br>
    Password: <br><input type="password" name="password" minlength="8" placeholder="min 8 character" required><br>
    <a href="form_change_pwd.php">Forgot Password</a>
    <p>Not have an account? <a href="registration.php">Register</a></p>
    <input type="submit" value="Login">
</form>