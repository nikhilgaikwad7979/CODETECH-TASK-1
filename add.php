<?php
include('db.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $query = "INSERT INTO blog_posts (title, content) VALUES (:title, :content)";
    $query="INSERT INTO   files (file_name) VALUES (:title, :content)";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':content', $content);
    $stmt->execute();

    header("Location: index.php");
}
include('DashBoard.php');
include('header.php');
?>
<style>
    .shadow-success {
        box-shadow: 0 0.5rem 2rem rgba(670, 55, 79, 0.5) !important;
    }
</style>

<div class="container d-flex justify-content-center align-items-center mt-5">
    <div class="card w-50 shadow-lg shadow-success">
        <div class="card-body ">
        <h1 class="card-title text-center mb-4">Add New Blog Post</h1>
        <form method="POST" action="add.php">
                <div class="mb-3">
                    <label for="title" class="form-label"><B>Title</B></label>
                    <input type="text" class="form-control  " id="title" name="title" placeholder="Enter your title" required>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label"><B>Content</B></label>
                    <textarea class="form-control" id="content" name="content" rows="5" placeholder="Write your content here" required></textarea>
                </div>
                <div class="mb-3">
                <label for="fileInput" class="form-label">Choose File</label>
                <input type="file" class="form-control" id="fileInput" name="file" required>
            </div>
                <button type="submit" class="btn btn-primary ">Add Post</button>
            </form>
        </div>
    </div>
</div>









<?php

include('footer.php');
?>
