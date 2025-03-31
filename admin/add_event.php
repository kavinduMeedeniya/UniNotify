<?php
// add_event.php
require_once '../includes/config.php';

// Authentication check
if (!isset($_SESSION['user_id']) || !$_SESSION['is_admin']) {
    header("Location: ../login.php");
    exit();
}

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        // Sanitize inputs
        $title = filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING);
        $description = filter_input(INPUT_POST, 'description', FILTER_SANITIZE_STRING);
        $event_date = filter_input(INPUT_POST, 'event_date', FILTER_SANITIZE_STRING);
        
        // Validate required fields
        if (empty($title) || empty($description) || empty($event_date)) {
            throw new Exception("All fields are required.");
        }

        // Handle image upload
        $image_path = null;
        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $target_dir = "../assets/uploads/";
            $image_name = time() . "_" . basename($_FILES["image"]["name"]);
            $target_file = $target_dir . $image_name;
            $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
            
            // Validate image
            $check = getimagesize($_FILES["image"]["tmp_name"]);
            $allowed_types = ['jpg', 'png', 'jpeg', 'gif'];
            if ($check === false || !in_array($imageFileType, $allowed_types)) {
                throw new Exception("Invalid image format. Allowed types: JPG, PNG, JPEG, GIF");
            }

            if (!move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                throw new Exception("Failed to upload image.");
            }
            $image_path = "assets/uploads/" . $image_name;
        }

        // Prepare and execute query
        $stmt = $conn->prepare("INSERT INTO events (title, description, image, event_date) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $title, $description, $image_path, $event_date);
        
        if ($stmt->execute()) {
            header("Location: index.php");
            exit();
        }
    } catch (Exception $e) {
        $error_message = $e->getMessage();
    }
}
?>

<?php include '../includes/header.php'; ?>

<div class="container">
    <div class="form-wrapper">
        <h2>Create New Event</h2>
        
        <?php if (isset($error_message)): ?>
            <div class="error-message"><?php echo htmlspecialchars($error_message); ?></div>
        <?php endif; ?>

        <form method="POST" enctype="multipart/form-data" class="event-form">
            <div class="form-group">
                <label for="title">Event Title</label>
                <input type="text" id="title" name="title" placeholder="Enter event title" required>
            </div>

            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" placeholder="Enter event description" rows="5" required></textarea>
            </div>

            <div class="form-group">
                <label for="image">Event Image</label>
                <input type="file" id="image" name="image" accept="image/jpeg,image/png,image/gif" required>
            </div>

            <div class="form-group">
                <label for="event_date">Event Date</label>
                <input type="date" id="event_date" name="event_date" required>
            </div>

            <button type="submit" class="btn btn-primary">Create Event</button>
            <a href="index.php" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
</div>


<style>
.container {
    max-width: 800px;
    margin: 0 auto;
    padding: 40px 20px;
}

.form-wrapper {
    background: #ffffff;
    padding: 30px;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

h2 {
    color: #2c3e50;
    margin-bottom: 30px;
    font-size: 28px;
}

.event-form {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.form-group {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

label {
    font-weight: 500;
    color: #34495e;
}

input, textarea {
    padding: 12px;
    border: 1px solid #ddd;
    border-radius: 4px;
    font-size: 16px;
    width: 100%;
    box-sizing: border-box;
}

textarea {
    resize: vertical;
    min-height: 120px;
}

.btn {
    padding: 12px 24px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-weight: 500;
    text-decoration: none;
    display: inline-block;
    transition: background-color 0.3s;
}

.btn-primary {
    background: #3498db;
    color: white;
}

.btn-primary:hover {
    background: #2980b9;
}

.btn-secondary {
    background: #95a5a6;
    color: white;
    margin-left: 10px;
}

.btn-secondary:hover {
    background: #7f8c8d;
}

.error-message {
    background: #ffebee;
    color: #c0392b;
    padding: 12px;
    border-radius: 4px;
    margin-bottom: 20px;
}
</style>