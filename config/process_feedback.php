<?php
session_start();

define('DB_HOST', 'localhost');
define('DB_USER', 'mangauser');
define('DB_PASS', '123456');
define('DB_NAME', 'feedbackmanga');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Insert feedback into the database
    $sql = "INSERT INTO feedback (email, message) VALUES ('$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        // Redirect or show success message
        header("Location: feedback_success.php"); // Create this page to confirm submission
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
