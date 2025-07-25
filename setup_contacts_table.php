<?php
// Database configuration
$host = 'localhost';
$db   = 'nvu_db';
$user = 'nvu_u';
$pass = 'Rk97J8KGeYeptND';

// Connect to MySQL
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if table 'contacts' exists
$tableExists = false;
$result = $conn->query("SHOW TABLES LIKE 'contacts'");

if ($result && $result->num_rows > 0) {
    $tableExists = true;
}

// Create table if it doesn't exist
if (!$tableExists) {
    $sql = "
        CREATE TABLE contacts (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(255) NOT NULL,
            email VARCHAR(255) NOT NULL,
            message TEXT,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
    ";

    if ($conn->query($sql) === TRUE) {
        echo "Table 'contacts' created successfully.\n";
    } else {
        echo "Error creating table: " . $conn->error . "\n";
    }
} else {
    echo "Table 'contacts' already exists. Skipping creation.\n";
}

// Close the connection
$conn->close();
?>