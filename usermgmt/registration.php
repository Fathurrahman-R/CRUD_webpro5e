<h2>Create account</h2>
<form action="create_account.php" method="post"> 
    Username: <br><input type="username" name="username" placeholder="email@example.com" required><br>
    Password: <br><input type="password" name="password" minlength="8" placeholder="min 8 character" required><br>
    <!-- Confirm Password: <br><input type="password" name="confpassword"><br> -->
    Nama Lengkap: <br><input type="text" name="fullname" placeholder="your fullname" required><br>
    Role:
    <select name="role" required>
        <option value="null">Select your role</option>
        <option value="admin">Admin</option>
        <option value="operator">Operator</option>
        <option value="visitor">Visitor</option>
    </select>
    <p>Sudah memiliki akun? <a href="form_login.php">Masuk</a></p>
    <input type="submit" value="Create Account">
</form>