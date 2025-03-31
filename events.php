<?php
require_once 'includes/config.php';
$query = "SELECT * FROM events ORDER BY event_date DESC";
$result = mysqli_query($conn, $query);
?>
<?php include 'includes/header.php'; ?>
<div class="container">
    <h2>Events</h2>
    <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <div>
            <h3><?php echo $row['title']; ?></h3>
            <p><?php echo $row['description']; ?></p>
            <?php if ($row['image']): ?>
                <img src="../<?php echo $row['image']; ?>" alt="<?php echo $row['title']; ?>" style="max-width: 300px;">
            <?php endif; ?>
            <p>Date: <?php echo $row['event_date']; ?></p>
            <small><?php echo $row['created_at']; ?></small>
        </div>
        <hr>
    <?php endwhile; ?>
</div>
<?php include 'includes/footer.php'; ?>