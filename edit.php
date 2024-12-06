<?php
include('db.php');

if (!isset($_GET['id'])) {
    header("Location: index.php");
}

$id = $_GET['id'];
$query = "SELECT * FROM blog_posts WHERE id = :id";
$stmt = $conn->prepare($query);
$stmt->bindParam(':id', $id);
$stmt->execute();
$post = $stmt->fetch();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $query = "UPDATE blog_posts SET title = :title, content = :content WHERE id = :id";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':content', $content);
    $stmt->bindParam(':id', $id);
    $stmt->execute();

    header("Location: index.php");
}
include('DashBoard.php');
include('header.php');
?>
<div class="container d-flex justify-content-center align-items-center mt-5">
    <div class="card w-50 shadow-lg shadow-success">
        <div class="card-body ">
        <h1 class="card-title text-center mb-4">Edit Blog Post</h1>
        <div class="list-group">
        <form method="POST" action="edit.php?id=<?php echo $post['id']; ?>">
        <div class="mb-3 ">
            <label for="title" class="form-label"><b>Title</b></label>
            <input type="text" class="form-control" id="title" name="title" value="<?php echo htmlspecialchars($post['title']); ?>" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label" ><b>Content</b></label>
            <textarea class="form-control" id="content" name="content" rows="5" required><?php echo htmlspecialchars($post['content']); ?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
    </div>
        </div>
    </div>
</div>
<br>
<style>
    .shadow-success {
        box-shadow: 0 0.5rem 2rem rgba(670, 55, 79, 0.5) !important;
    }
</style>



<?php
include('footer.php');
?>
