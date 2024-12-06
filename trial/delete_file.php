<?php
include('db.php'); // Make sure the database connection is included

if (isset($_GET['id'])) {
    $fileId = $_GET['id'];

    // Get the file details from the database
    $query = "SELECT * FROM files WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':id', $fileId, PDO::PARAM_INT);
    $stmt->execute();
    $file = $stmt->fetch();

    if ($file) {
        $filePath = $file['file_path'];
        
        // Delete the file from the server
        if (unlink($filePath)) {
            // Delete the file record from the database
            $query = "DELETE FROM files WHERE id = :id";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(':id', $fileId, PDO::PARAM_INT);

            if ($stmt->execute()) {
                echo "File deleted successfully!";
            } else {
                echo "Failed to delete file from database.";
            }
        } else {
            echo "Failed to delete file from server.";
        }
    } else {
        echo "File not found.";
    }
}
?>
