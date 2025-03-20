<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Manifest Health</title>
    <link rel="stylesheet" href="assets/css/login.css"> <!-- External CSS for styling -->
</head>
<body>

<div class="login-container">
    <h2>Login to Your Account</h2>

    <?php if (isset($_SESSION['error'])): ?>
        <p class="error-msg"><?php echo $_SESSION['error']; unset($_SESSION['error']); ?></p>
    <?php endif; ?>

    <form action="login_process.php" method="POST">
    <div class="input-group">
        <label for="username">Username</label>
        <input type="text" name="username" required value="<?php echo isset($_COOKIE['remember_user']) ? $_COOKIE['remember_user'] : ''; ?>">
    </div>

    <div class="input-group">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
        <span class="toggle-password" onclick="togglePassword()">👁</span>
    </div>

    <!-- <div class="input-group remember-me">
    <input type="checkbox" name="remember" id="remember" <?php echo isset($_COOKIE['remember_user']) ? 'checked' : ''; ?>>
    <label for="remember">Remember Me</label>
</div> -->


    <button type="submit" class="login-btn">Login</button>
    
    <p><a href="forgot_password.php">Forgot Password?</a></p>
</form>

    <p>Don't have an account? <a href="register.php">Register</a></p>
</div>

<script>
    function togglePassword() {
        let passwordInput = document.getElementById('password');
        if (passwordInput.type === "password") {
            passwordInput.type = "text";
        } else {
            passwordInput.type = "password";
        }
    }
</script>

</body>
</html>
