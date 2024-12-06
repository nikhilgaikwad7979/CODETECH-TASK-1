<?php
include('db.php');

$query = "SELECT * FROM blog_posts ORDER BY created_at DESC";
$stmt = $conn->prepare($query);
$stmt->execute();
$posts = $stmt->fetchAll();
include('DashBoard.php');
include('header.php');
?>

<div class="container d-flex justify-content-center align-items-center mt-5">
    <div class="card w-50 shadow-lg shadow-success">
        <div class="card-body ">
        <h1 class="card-title text-center mb-4">Delete Blog Post</h1>
        <div class="list-group">
        <?php foreach ($posts as $post): ?>
            <div class="list-group-item">
                <h5><?php echo htmlspecialchars($post['title']); ?></h5>
                <p><?php echo substr(htmlspecialchars($post['content']), 0, 100); ?>...</p>
                <a href="delet.php?id=<?php echo $post['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
            </div>
        <?php endforeach; ?>
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


</div>

<?php
include('footer.php');
?>  
