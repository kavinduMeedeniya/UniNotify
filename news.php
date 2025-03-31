<?php
require_once 'includes/config.php';
$query = "SELECT * FROM news ORDER BY created_at DESC";
$result = mysqli_query($conn, $query);
?>
<?php include 'includes/header.php'; ?>
<div class="container">
    <h2>News</h2>
    <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <div>
            <h3><?php echo $row['title']; ?></h3>
            <p><?php echo $row['content']; ?></p>
            <small><?php echo $row['created_at']; ?></small>
        </div>
        <hr>
    <?php endwhile; ?>
</div>
<?php include 'includes/footer.php'; ?>