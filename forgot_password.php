<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password | Manifest Health</title>
    <link rel="stylesheet" href="assets/css/auth.css">
</head>
<body>

<div class="auth-container">
    <h2>Reset Your Password</h2>

    <?php if (isset($_SESSION['message'])): ?>
        <p class="success-msg"><?php echo $_SESSION['message']; unset($_SESSION['message']); ?></p>
    <?php endif; ?>

    <form action="forgot_password_process.php" method="POST">
        <div class="input-group">
            <label for="email">Enter your email</label>
            <input type="email" name="email" required>
        </div>

        <button type="submit" class="auth-btn">Send Reset Link</button>
    </form>

    <a href="login.php">Back to Login</a>
</div>

</body>
</html>
