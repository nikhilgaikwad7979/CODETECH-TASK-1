<?php
include('db.php');

$query = "SELECT * FROM blog_posts ORDER BY created_at DESC";
$stmt = $conn->prepare($query);
$stmt->execute();
$posts = $stmt->fetchAll();
include('DashBoard.php');
include('header.php');
?>
<div class="text-center w-100">
            <h3 class="text-dark mt-4">All Blogs</h3>
            </div>
<br>
<style>
    .shadow-success {
        box-shadow: 0 0.5rem 2rem rgba(670, 55, 579, 10.5) !important;
    }
</style>

<div class="container d-flex justify-content-center align-items-center mt-5">
    <div class="card w-50 shadow-lg shadow-success ">
        <div class="card-body ">
        <div class="list-group">
    <?php foreach ($posts as $post): ?>
        <div class="list-group-item border border-success">
            <h5><?php echo htmlspecialchars($post['title']); ?></h5>
            <p><?php echo substr(htmlspecialchars($post['content']), 0, 100); ?>...</p>
        </div><br>
    <?php endforeach; ?>
</div>

        </div>
    </div>
</div> 


<?php
include('footer.php');
?>
