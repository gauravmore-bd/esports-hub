<?php
session_start();

// Database connection
$conn = new mysqli("localhost", "root", "", "db_register");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form input
$username = $_POST['username'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// Check if all fields are filled
if (empty($username) || empty($email) || empty($password)) {
    echo "Please fill all the fields!";
    exit();
}

// Prepare and insert into database
$sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $username, $email, $password);

if ($stmt->execute()) {
    header("Location: login.html"); // Redirect to login page after successful registration
    exit();
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
