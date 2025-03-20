<?php
session_start();
include 'db_config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $token = $_POST['token'];
    $new_password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $query = "UPDATE users SET password = ?, reset_token = NULL, reset_expires = NULL WHERE reset_token = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("ss", $new_password, $token);
    $stmt->execute();

    $_SESSION['message'] = "Password updated successfully! Please login.";
    header("Location: login.php");
    exit();
}
?>
