<?php
include('connect.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
    $file = $_FILES['file'];
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name'];
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];

    // Check for upload errors
    if ($fileError === 0) {
        // Define the upload directory
        $uploadDir = 'uploads/';
        $fileDestination = $uploadDir . basename($fileName);

        // Move the uploaded file to the target directory
        if (move_uploaded_file($fileTmpName, $fileDestination)) {
            // Insert file details into the database
            $query = "INSERT INTO files (file_name, file_path) VALUES (:file_name, :file_path)";
            $stmt = $conn->prepare($query);
            $stmt->bindParam(':file_name', $fileName);
            $stmt->bindParam(':file_path', $fileDestination);
            if ($stmt->execute()) {
                echo "File uploaded successfully!";
            } else {
                echo "Failed to save file details in the database.";
            }
        } else {
            echo "Failed to upload the file.";
        }
    } else {
        echo "Error during file upload.";
    }
} else {
    echo "No file uploaded.";
}
?>
