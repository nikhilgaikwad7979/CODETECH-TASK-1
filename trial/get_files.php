<?php
$host = 'localhost';
$db = 'blog_db';
$user = 'root';
$pass = '';

$conn = new mysqli($host, $user, $pass, $db);
$query = "SELECT * FROM files ORDER BY id DESC";
$stmt = $conn->prepare($query);
$stmt->execute();

// Fetch the results
$files = $stmt->get_result(); // Use get_result() to fetch rows

// Check if there are files
if ($files->num_rows > 0) {
    while ($file = $files->fetch_assoc()) { // fetch_assoc() for each row
        echo '<div class="file-item d-flex justify-content-between align-items-center">';
        echo '<img src="' . htmlspecialchars($file['file_path']) . '" alt="' . htmlspecialchars($file['file_name']) . '" style="width: 100px; height: auto;">';
       echo '</div>';
    }
} else {
    echo 'No files found.';
}
?>
