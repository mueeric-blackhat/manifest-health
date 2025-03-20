<?php
session_start();
include 'db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = trim($_POST['email']);

    $query = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
        $token = bin2hex(random_bytes(50)); // Generate a unique token
        $expires = date("Y-m-d H:i:s", strtotime("+1 hour"));

        // Store token in the database
        $update_query = "UPDATE users SET reset_token = ?, reset_expires = ? WHERE email = ?";
        $stmt = $conn->prepare($update_query);
        $stmt->bind_param("sss", $token, $expires, $email);
        $stmt->execute();

        // Send reset email
        $reset_link = "http://yourwebsite.com/reset_password.php?token=" . $token;
        $subject = "Password Reset Request";
        $message = "Click this link to reset your password: $reset_link";
        mail($email, $subject, $message, "From: no-reply@yourwebsite.com");

        $_SESSION['message'] = "Password reset link has been sent to your email.";
        header("Location: login.php");
        exit();
    } else {
        $_SESSION['error'] = "Email not found!";
        header("Location: forgot_password.php");
        exit();
    }
}
?>
