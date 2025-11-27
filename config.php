<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// config.php - AUTO CREATE DATABASE
$host = 'localhost';
$user = 'root';
$password = '';

// Connect to MySQL server
$conn = new mysqli($host, $user, $password);

if ($conn->connect_error) {
    die("MySQL Connection failed: " . $conn->connect_error);
}

// Create database if not exists
if (!$conn->query("CREATE DATABASE IF NOT EXISTS skillstream")) {
    die("Error creating database: " . $conn->error);
}

// Select database
$conn->select_db("skillstream");

// Create table if not exists
$sql = "CREATE TABLE IF NOT EXISTS courses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    instructor VARCHAR(255) NOT NULL,
    level ENUM('Beginner', 'Intermediate', 'Advanced'),
    duration INT,
    description TEXT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if (!$conn->query($sql)) {
    die("Error creating table: " . $conn->error);
}

echo "Database and table ready!";
?>
