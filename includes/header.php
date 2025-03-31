<?php require_once 'config.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>UniNotify</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: #fff;
        }
        .header {
            text-align: center;
            padding: 20px 0;
        }
        .header h1 {
            margin: 0;
            font-size: 2em;
            text-transform: uppercase;
            color: #333;
        }
        nav {
            text-align: center;
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }
        nav a {
            margin: 0 15px;
            text-decoration: none;
            color: #333;
            font-size: 0.9em;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        nav a:hover {
            color: #666;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>UNINOTIFY</h1>
    </div>
    <nav>
        <a href="../home.php">Home</a>
        <a href="../news.php">News</a>
        <a href="../events.php">Events</a>
        <a href="../about.php">About Us</a>
        <a href="../contact.php">Contact Us</a>
        <?php if (isset($_SESSION['user_id'])): ?>
            <a href="../profile.php">Profile</a>
            <?php if ($_SESSION['is_admin']): ?>
                <a href="../admin/index.php">Admin</a>
            <?php endif; ?>
            <a href="../logout.php">Logout</a>
        <?php else: ?>
            <a href="../login.php">Login</a>
            <a href="../register.php">Register</a>
        <?php endif; ?>
    </nav>