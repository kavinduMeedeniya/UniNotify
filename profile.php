<?php
require_once 'includes/config.php';
if (!isset($_SESSION['user_id'])) header("Location: login.php");
$query = "SELECT * FROM users WHERE id=" . $_SESSION['user_id'];
$result = mysqli_query($conn, $query);
$user = mysqli_fetch_assoc($result);
?>
<?php include 'includes/header.php'; ?>
<div class="container">
    <h2>Profile</h2>
    <p>Username: <?php echo $user['username']; ?></p>
    <p>Email: <?php echo $user['email']; ?></p>
</div>
<?php include 'includes/footer.php'; ?>