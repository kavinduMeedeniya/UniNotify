<?php
require_once '../includes/config.php';
if (!isset($_SESSION['user_id']) || !$_SESSION['is_admin']) header("Location: ../login.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = mysqli_real_escape_string($conn, $_POST['title']);
    $content = mysqli_real_escape_string($conn, $_POST['content']);
    $query = "INSERT INTO news (title, content) VALUES ('$title', '$content')";
    if (mysqli_query($conn, $query)) {
        header("Location: index.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<?php include '../includes/header.php'; ?>

<div class="container">
    <div class="news-form-wrapper">
        <h2>Add News</h2>
        <form method="POST" class="news-form">
            <div class="form-group">
                <input type="text" name="title" placeholder="Enter news title" required class="form-input">
            </div>
            <div class="form-group">
                <textarea name="content" placeholder="Write your news content here..." required class="form-textarea"></textarea>
            </div>
            <button type="submit" class="submit-btn">Add News</button>
        </form>
    </div>
</div>

<style>
.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

.news-form-wrapper {
    background: #ffffff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

h2 {
    color: #333;
    margin-bottom: 25px;
    text-align: center;
}

.news-form {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.form-group {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.form-input,
.form-textarea {
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 16px;
    transition: border-color 0.3s ease;
}

.form-input:focus,
.form-textarea:focus {
    outline: none;
    border-color: #007bff;
}

.form-textarea {
    min-height: 150px;
    resize: vertical;
}

.submit-btn {
    background: #007bff;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    transition: background 0.3s ease;
}

.submit-btn:hover {
    background: #0056b3;
}
</style>