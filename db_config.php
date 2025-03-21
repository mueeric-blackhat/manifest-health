<?php
$host = "b7sis8unsy5wdnmylrgg-mysql.services.clever-cloud.com"; // Clever Cloud Host
$username = "uom5oubv6loln5lw"; // Clever Cloud Username
$password = "7fM3ORb85nEdcDbjwVn8"; // Clever Cloud Password
$database = "b7sis8unsy5wdnmylrgg"; // Clever Cloud Database Name
$port = 3306; // MySQL Port

$conn = new mysqli($host, $username, $password, $database, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
