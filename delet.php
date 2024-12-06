<?php
include('db.php');
if (isset($_GET['id'])) {
    $postId = $_GET['id'];
    $query = "DELETE FROM blog_posts WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $postId, PDO::PARAM_INT);

    if ($stmt->execute()) {
        header("Location: index.php");
        exit();
    } else {
        echo "Error deleting post.";
    }
} else {
    echo "Invalid request.";
}
?>
