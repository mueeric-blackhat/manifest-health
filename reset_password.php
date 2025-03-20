<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="assets/css/auth.css">
</head>
<body>

<div class="auth-container">
    <h2>Set a New Password</h2>

    <form action="reset_password_process.php" method="POST">
        <input type="hidden" name="token" value="<?php echo htmlspecialchars($_GET['token']); ?>">
        
        <div class="input-group">
            <label for="password">New Password</label>
            <input type="password" name="password" required>
        </div>

        <button type="submit" class="auth-btn">Update Password</button>
    </form>

    <a href="login.php">Back to Login</a>
</div>

</body>
</html>
