<?php
session_start();

// Database connection
$conn = new mysqli("localhost", "root", "", "db_register");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data safely
$input = trim($_POST['username'] ?? '');
$password = $_POST['password'] ?? '';

// Check if fields are empty
if (empty($input) || empty($password)) {
    echo "Please fill in all fields.";
    exit();
}

// Prepare and execute query
$sql = "SELECT * FROM users WHERE username = ? OR email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $input, $input);
$stmt->execute();

$result = $stmt->get_result();
$user = $result->fetch_assoc();

// Plain text password check (not secure, but okay for now)
if ($user && $password === $user['password']) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    header("Location: index.php"); // Redirect to main/home page
    exit();
} else {
    echo "Invalid credentials!";
}

$stmt->close();
$conn->close();
?>
