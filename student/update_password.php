<?php
// Ensure this file is accessed through a POST request
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("HTTP/1.1 405 Method Not Allowed");
    exit();
}

// Connect to the database (replace 'your_database_host', 'your_database_name', 'your_username', and 'your_password' with actual credentials)
$host = 'localhost';
$dbname = 'elearning';
$username = 'root';
$password = '';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
}

// Get the posted username and new password
$username = $_POST['username'];
$new_password = md5($_POST['new_password']); // Hash the password using MD5

// Check if the username exists in the database
$stmt = $conn->prepare("SELECT * FROM students WHERE student_id = :username");
$stmt->bindParam(':username', $username);
$stmt->execute();
$user = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$user) {
    echo "Username not found.";
    exit();
}

// Update the password in the database
$stmt = $conn->prepare("UPDATE students SET password = :password WHERE student_id = :username");
$stmt->bindParam(':password', $new_password);
$stmt->bindParam(':username', $username);

if ($stmt->execute()) {
     header("Location: updatesuccess.php");
    exit();
} else {
    echo "Error updating password.";
}

$conn = null;
?>
