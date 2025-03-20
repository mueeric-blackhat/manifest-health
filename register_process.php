<?php
include("db_config.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // Check if passwords match
    if ($password !== $confirm_password) {
        echo "<script>
                alert('Error: Passwords do not match!');
                window.history.back(); // Go back to the form
              </script>";
        exit(); // Stop further execution
    }

    $hashed_password = password_hash($password, PASSWORD_BCRYPT); // Hash password

    // Check if email already exists
    $check_email = $conn->prepare("SELECT email FROM users WHERE email = ?");
    $check_email->bind_param("s", $email);
    $check_email->execute();
    $check_email->store_result();

    if ($check_email->num_rows > 0) {
        echo "<script>
                alert('Error: Email already exists. Please use a different email.');
                window.history.back();
              </script>";
    } else {
        // Insert user into database
        $stmt = $conn->prepare("INSERT INTO users (username, email, phone, password) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $username, $email, $phone, $hashed_password);

        if ($stmt->execute()) {
            echo "<script>
                    alert('Registration successful! Please login.');
                    window.location.href = 'login.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Error: Something went wrong.');
                    window.history.back();
                  </script>";
        }
        $stmt->close();
    }
    $check_email->close();
    $conn->close();
}
?>
