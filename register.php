<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="assets/css/register.css">
</head>
<body>

<div class="register-container">
    <h2>Register</h2>
    <form action="register_process.php" method="POST" onsubmit="return validatePassword()">
        
        <div class="input-group">
            <label for="username">Username</label>
            <input type="text" name="username" required>
        </div>

        <div class="input-group">
            <label for="email">Email</label>
            <input type="email" name="email" required>
        </div>

        <div class="input-group">
            <label for="phone">Phone Number</label>
            <input type="text" name="phone" required>
        </div>

        <div class="input-group">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required>
        </div>

        <div class="input-group">
            <label for="confirm_password">Confirm Password</label>
            <input type="password" name="confirm_password" id="confirm_password" required>
        </div>

        <button type="submit" class="btn">Register</button>

        <p class="login-link">Already have an account? <a href="login.php">Login here</a></p>
    </form>
</div>

<script>
    function validatePassword() {
        var password = document.getElementById("password").value;
        var confirm_password = document.getElementById("confirm_password").value;

        if (password !== confirm_password) {
            alert("Error: Passwords do not match!");
            return false;
        }
        return true;
    }
</script>

</body>
</html>
