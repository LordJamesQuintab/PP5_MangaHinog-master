<?php
session_start();

define('DB_HOST', 'localhost');
define('DB_USER', 'mangahinog');
define('DB_PASS', 'Jam11123');
define('DB_NAME', 'mangahinog');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'];

    if ($action == 'login') {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM users WHERE email = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                $_SESSION['email'] = $email;
                $_SESSION['username'] = $user['username'];

                header("Location: ../index.php");
                exit();
            } else {
                echo "Invalid email or password!";
            }
        } else {
            echo "No user found with this email!";
        }
    }

    if ($action == 'signup') {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        if ($password != $confirm_password) {
            die("Passwords do not match!");
        }

        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

        if ($conn->query($sql) === TRUE) {
            header("Location: ../signup_success.php");
            exit();
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    if ($action == 'update_profile') {
        $username = $_SESSION['username'];
        $profile_picture = $_FILES['profile_picture'];

        if ($profile_picture['error'] === 0) {
            $fileName = $profile_picture['name'];
            $fileTmpName = $profile_picture['tmp_name'];
            $fileDestination = 'uploads/profile_pictures/' . $fileName;

            if (move_uploaded_file($fileTmpName, $fileDestination)) {
                $sql = "UPDATE users SET profile_picture = '$fileName' WHERE username = '$username'";
                if ($conn->query($sql) === TRUE) {
                    echo "Profile picture updated successfully!";
                    header("Location: ../profile.php");
                    exit();
                } else {
                    echo "Error updating profile picture: " . $conn->error;
                }
            } else {
                echo "Failed to upload profile picture!";
            }
        } else {
            echo "No profile picture uploaded!";
        }
    }
}

$conn->close();
?>
