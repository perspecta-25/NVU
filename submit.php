<?php
// 1. Get POST data
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

// 3. Connect to the database
$host = 'localhost';
$dbname = 'nvu_db';
$user = 'nvu_u';
$pass = 'Rk97J8KGeYeptND';

$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// 4. Prepare and execute SQL query
$stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $message);

if ($stmt->execute()) {
    echo "Message received. Thank you!";
} else {
    echo "Error: " . $stmt->error;
}

// 5. Close connection
$stmt->close();
$conn->close();