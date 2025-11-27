<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include 'config.php';

header('Content-Type: application/json');

if ($_POST['action'] == 'get_courses') {
    $result = $conn->query("SELECT * FROM courses ORDER BY id DESC");
    $courses = [];
    while ($row = $result->fetch_assoc()) {
        $courses[] = $row;
    }
    echo json_encode($courses);
    exit;
}

if ($_POST['action'] == 'add_course') {
    $title = $_POST['title'];
    $instructor = $_POST['instructor'];
    $level = $_POST['level'];
    $duration = (int)$_POST['duration'];
    $description = $_POST['description'];
    
    $stmt = $conn->prepare("INSERT INTO courses (title, instructor, level, duration, description) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssis", $title, $instructor, $level, $duration, $description);
    
    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'Course added successfully!']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error: ' . $conn->error]);
    }
    exit;
}

if ($_POST['action'] == 'update_course') {
    $id = (int)$_POST['id'];
    $title = $_POST['title'];
    $instructor = $_POST['instructor'];
    $level = $_POST['level'];
    $duration = (int)$_POST['duration'];
    $description = $_POST['description'];
    
    $stmt = $conn->prepare("UPDATE courses SET title=?, instructor=?, level=?, duration=?, description=? WHERE id=?");
    $stmt->bind_param("sssisi", $title, $instructor, $level, $duration, $description, $id);
    
    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'Course updated successfully!']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error: ' . $conn->error]);
    }
    exit;
}

if ($_POST['action'] == 'delete_course') {
    $id = (int)$_POST['id'];
    
    $stmt = $conn->prepare("DELETE FROM courses WHERE id=?");
    $stmt->bind_param("i", $id);
    
    if ($stmt->execute()) {
        echo json_encode(['success' => true, 'message' => 'Course deleted successfully!']);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error: ' . $conn->error]);
    }
    exit;
}

echo json_encode(['success' => false, 'message' => 'Invalid action']);
?>
