<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manga Details</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <?php include 'components/header.php'; ?>
</head>
<body>

<section class="container mt-5">
    <div class="row">
        <div class="col-md-3">
            <img src="./assets/1.png" class="img-fluid" alt="Manga Cover">
        </div>

        <div class="col-md-9 d-flex flex-column justify-content-between">
            <div class="mb-3">
                <h1 class="display-4 fw-bold">Title</h1>
            </div>

            <div class="d-flex justify-content-between">
                <div>
                    <h5>Author</h5>
                    <h5>Genre</h5>
                </div>
                <div>
                    <h5>Status</h5>
                </div>
            </div>

            <div class="mt-4">
                <h5>Summary:</h5>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti voluptatibus praesentium blanditiis atque esse soluta officia voluptatum quos at porro!</p>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <h5>Chapters:</h5>
        <div class="container mt-2">
            <p>Chapter: 000</p>
            <p>Chapter: 000</p>
            <p>Chapter: 000</p>
            <p>Chapter: 000</p>
            <p>Chapter: 000</p>
        </div>
    </div>
</section>

<section class="container mt-5">
    <div class="container mt-2 d-flex flex-column justify-content-center">
        <h5>Comments:</h5>

        <div class="container">
            <?php
            include 'config/profileconfig.php';

            if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_SESSION['username'])) {
                $username = $_SESSION['username'];
                $comment = $_POST['comment'];

                $sql = "INSERT INTO comments (username, comment) VALUES ('$username', '$comment')";
                if ($conn->query($sql) === TRUE) {
                    echo "<div class='alert alert-success'>Comment added successfully!</div>";
                } else {
                    echo "<div class='alert alert-danger'>Error: " . $sql . "<br>" . $conn->error . "</div>";
                }
            }
            ?>

            <!-- Comment Form -->
            <?php if (isset($_SESSION['username'])): ?>
                <form action="manga.php" method="POST">
                    <div class="mb-3">
                        <label for="comment" class="form-label">Add a Comment:</label>
                        <textarea name="comment" id="comment" class="form-control" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit Comment</button>
                </form>
            <?php else: ?>
                <p>Please <a href="login.php">log in</a> to post a comment.</p>
            <?php endif; ?>
        </div>

        <!-- Displaying Comments -->
        <div class="mt-5">
            <h3>Previous Comments</h3>
            <?php
            $sql = "SELECT * FROM comments ORDER BY created_at DESC";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<div class='card mb-3'>
                            <div class='card-body'>
                                <h5 class='card-title'>{$row['username']}</h5>
                                <p class='card-text'>{$row['comment']}</p>
                                <p class='card-text'><small class='text-muted'>Posted on {$row['created_at']}</small></p>
                            </div>
                          </div>";
                }
            } else {
                echo "<p>No comments yet.</p>";
            }
            ?>
        </div>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
