<?php
// admin_dashboard.php
require_once '../includes/config.php';

// Check if user is authenticated and has admin privileges
if (!isset($_SESSION['user_id']) || !$_SESSION['is_admin']) {
    header("Location: ../login.php");
    exit();
}
?>

<?php include '../includes/header.php'; ?>

<div class="container">
    <div class="dashboard-header">
        <h2>Administrative Dashboard</h2>
        <div class="dashboard-actions">
            <a href="add_news.php" class="btn btn-primary">Add News Article</a>
            <a href="add_event.php" class="btn btn-primary">Add New Event</a>
        </div>
    </div>
</div>

<style>
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
}

.dashboard-header {
    background-color: #f8f9fa;
    padding: 20px;
    border-radius: 8px;
    margin-top: 20px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
}

h2 {
    color: #333;
    margin: 0 0 20px 0;
    font-size: 24px;
}

.dashboard-actions {
    display: flex;
    gap: 15px;
}

.btn {
    display: inline-block;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 4px;
    font-weight: 500;
    transition: background-color 0.3s;
}

.btn-primary {
    background-color: #007bff;
    color: white;
}

.btn-primary:hover {
    background-color: #0056b3;
}
</style>