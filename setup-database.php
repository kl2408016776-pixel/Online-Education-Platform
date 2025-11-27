<?php
// setup-database.php
$host = 'localhost';
$username = 'root';
$password = '';

// Create connection
$conn = new mysqli($host, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS skillstream";
if ($conn->query($sql) === TRUE) {
    echo "Database 'skillstream' created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error . "<br>";
}

// Select database
$conn->select_db("skillstream");

// Create enrollments table
$sql = "CREATE TABLE IF NOT EXISTS enrollments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    phone VARCHAR(20),
    course_selected VARCHAR(100) NOT NULL,
    enrollment_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    status ENUM('pending', 'approved', 'completed') DEFAULT 'pending'
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'enrollments' created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// Create courses table (if not exists)
$sql = "CREATE TABLE IF NOT EXISTS courses (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    level VARCHAR(50),
    description TEXT,
    instructor VARCHAR(100),
    duration VARCHAR(50),
    requirements VARCHAR(255),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table 'courses' created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

echo "Database setup completed!";
$conn->close();
?>
