<?php 
include './config/database.php';


$name = $email = $body = '';
$nameErr = $emailErr = $bodyErr = '';


if (isset($_POST['submit'])) {

    if (empty($_POST['name'])) {
        $nameErr = 'Name is required';
    } else {
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }


    if (empty($_POST['email'])) {
        $emailErr = 'Email is required';
    } else {
        $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
    }


    if (empty($_POST['body'])) {
        $bodyErr = 'Feedback is required';
    } else {
        $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    }

    if (empty($nameErr) && empty($emailErr) && empty($bodyErr)) {
        
        date_default_timezone_set('Asia/Manila');

        
        $currentDate = date('Y-m-d H:i:s'); 
        $sql = "INSERT INTO feedback (name, email, body, date) VALUES ('$name', '$email', '$body', '$currentDate')";
        if (mysqli_query($conn, $sql)) {
          echo "<script>alert('Feedback submitted successfully!');</script>";
            
            header('Location: feedback.php');
        } else {
            
            echo 'Error: ' . mysqli_error($conn);
        }
    }
}
?>

<link rel="stylesheet" href="./css/message.css">

<div class="container d-flex flex-column align-items-center justify-content-center min-vh-100">
    <div class="logo-container mb-4">
        <a href="index.php">
            <img src="manga.svg" width="200" alt="Manga Hinog Logo" />
        </a>
    </div>

    <h2 class="title mb-3">Feedback</h2>
    <p class="lead text-center mb-4">
        Leave feedback for Manga Hinog
    </p>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="feedback-form w-75">
    <div class="full-width mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control p-2" id="name" name="name" placeholder="Enter your name" value="<?php echo htmlspecialchars($name); ?>" />
        <?php if (!empty($nameErr)) { ?> 
            <span class="text-danger"> <?php echo $nameErr; ?></span> 
        <?php } ?>
    </div>
    <div class="full-width mb-3">
        <label for="email" class="form-label">Email</label>
        <input type="email" class="form-control p-8" id="email" name="email" placeholder="Enter your email" value="<?php echo htmlspecialchars($email); ?>" />
        <?php if (!empty($emailErr)) { ?> 
            <span class="text-danger"> <?php echo $emailErr; ?></span> 
        <?php } ?>
    </div>
    <div class="full-width mb-3">
        <label for="body" class="form-label">Feedback</label>
        <textarea class="form-control p-2" id="body" name="body" placeholder="Enter your feedback"><?php echo htmlspecialchars($body); ?></textarea>
        <?php if (!empty($bodyErr)) { ?> 
            <span class="text-danger"> <?php echo $bodyErr; ?></span> 
        <?php } ?>
    </div>
    <div class="full-width d-flex justify-content-between">
        <input type="submit" name="submit" value="Send" class="btn btn-dark" />
       
    </div>
</form>

</div>
