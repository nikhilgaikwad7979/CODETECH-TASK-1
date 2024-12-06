<?php
include('db.php');

$query = "SELECT * FROM blog_posts ORDER BY created_at DESC";
$stmt = $conn->prepare($query);
$stmt->execute();
$posts = $stmt->fetchAll();
header("Location: try.php");
include('DashBoard.php');
include('header.php');
?>

<div class="container d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow w-75" style="max-width: 600px;">
        <div class="card-body bg-light">
            <h1 class="card-title text-center mb-4">All Blog Post</h1>
            <div class="list-group">
        <?php foreach ($posts as $post): ?>
            <div class="list-group-item">
                <h5><?php echo htmlspecialchars($post['title']); ?></h5>
                <p><?php echo substr(htmlspecialchars($post['content']), 0, 100); ?>...</p>
                <a href="edit.php?id=<?php echo $post['id']; ?>" class="btn btn-primary btn-sm">Edit</a>
                <a href="delete.php?id=<?php echo $post['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
            </div>
        <?php endforeach; ?>
    </div>
</div>
        </div>
    </div>
</div>

<?php
include('footer.php');
?>
