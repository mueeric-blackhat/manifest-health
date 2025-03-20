<?php
session_start();
include 'db_config.php'; // Ensure database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Check if username exists
    $stmt = $conn->prepare("SELECT id, password FROM users WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($id, $hashed_password);
        $stmt->fetch();

        // Verify password
        if (password_verify($password, $hashed_password)) {
            $_SESSION['user_id'] = $id;

            // Remember me functionality
            if (isset($_POST['remember'])) {
                setcookie('remember_user', $username, time() + (86400 * 30), "/"); // 30 days
            } else {
                setcookie('remember_user', '', time() - 3600, "/"); // Remove cookie
            }

            header("Location: dashboard.php"); // Redirect after login
            exit();
        } else {
            $_SESSION['error'] = "Incorrect password!";
        }
    } else {
        $_SESSION['error'] = "No account found with this username!";
    }

    $stmt->close();
    header("Location: login.php"); // Redirect back to login page with error
    exit();
}
?>
