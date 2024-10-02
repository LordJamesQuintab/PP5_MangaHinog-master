<?php 

include './config/database.php'; 

$sql = 'SELECT * FROM feedback';
$result = mysqli_query($conn, $sql);


if ($result) {
    $feedback = mysqli_fetch_all($result, MYSQLI_ASSOC);
} else {
    echo 'Query Error: ' . mysqli_error($conn);
}
?>
<link rel="stylesheet" href="./css/feedback.css">

<div class="container d-flex flex-column align-items-center justify-content-center min-vh-100">

    <div class="logo-container">
        <a href="index.php">
            <img src="manga.svg" width="500" alt="Manga Hinog Logo" />
        </a>
    </div>


    <h2 class="title">Past Feedback</h2>


    <?php if (empty($feedback)): ?>
        <p class="lead mt-3 text-center">There is no feedback</p>
    <?php else: ?>
        <?php foreach ($feedback as $item): ?>
            <div class="feedback-card my-3 w-75">
                <div class="card-body text-center">
                    <p class="feedback-text">
                        <?php echo htmlspecialchars($item['body']); ?>
                    </p>
                    <div class="feedback-author">
                        <?php echo htmlspecialchars($item['name']); ?>
                    </div>
                    <div class="feedback-date">
                        on <?php echo date_format(date_create($item['date']), 'g:ia \o\n l jS F Y'); ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</div>