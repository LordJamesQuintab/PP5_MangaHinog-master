<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/signup.css">
    <title>Sign Up</title>
</head>
<body>
    <div class="signup-container">
        <div>
            <img src="./manga.svg" alt="Logo" width="300" height="150">
        </div>
        <h2>Create Your Account</h2>
        
        <form action="./config/process.php" method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="password" name="confirm_password" placeholder="Confirm Password" required>
            <input type="hidden" name="action" value="signup"> 
            <div class="link">
             <button type="submit" class="loginbtn">Create Account</button>
            </div>
        </form>
    </div>
</body>
</html>
