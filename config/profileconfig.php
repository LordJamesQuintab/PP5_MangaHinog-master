<?php

define('DB_HOST', 'localhost');
define('DB_USER', 'mangahinog');
define('DB_PASS', 'Jam11123');
define('DB_NAME', 'mangahinog');

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
