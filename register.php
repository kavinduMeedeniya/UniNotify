<?php
require_once 'includes/config.php';
if (isset($_SESSION['user_id'])) header("Location: home.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $query = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";
    if (mysqli_query($conn, $query)) {
        header("Location: login.php");
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<?php include 'includes/header.php'; ?>

<style>
    /* Internal CSS for the content */
    .container {
        display: flex;
        max-width: 800px;
        margin: 50px auto;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        overflow: hidden;
    }

    .welcome-section {
        flex: 1;
        background-image: url(./assets/images/uninotify04.jpeg);
        background-size: cover;
        color: white;
        display: flex;
        flex-direction: column; /* Changed to column to stack heading and paragraph */
        justify-content: center;
        align-items: center;
        padding: 20px;
        text-align: center;
    }

    .welcome-section h2 {
        font-size: 2.5em;
        font-weight: bold;
        margin-bottom: 10px; /* Space between heading and paragraph */
    }

    .welcome-section p {
        font-size: 1.1em;
        opacity: 0.9; /* Slightly lighter for contrast */
        max-width: 80%; /* Limit width for readability */
        line-height: 1.5; /* Better readability */
    }

    .form-section {
        flex: 1;
        background: white;
        padding: 40px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    h2 {
        margin-bottom: 20px;
        font-size: 1.8em;
        color: #333;
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        padding: 12px;
        border: 1px solid #ddd;
        border-radius: 25px;
        font-size: 1em;
        outline: none;
        transition: border-color 0.3s;
    }

    input[type="text"]:focus,
    input[type="email"]:focus,
    input[type="password"]:focus {
        border-color: #8e44ad;
    }

    button {
        padding: 12px;
        background-color: #8e44ad;
        color: white;
        border: none;
        border-radius: 25px;
        font-size: 1em;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #732d91;
    }
</style>

<div class="container">
    <div class="welcome-section">
        <p>Join us today and start your journey. Create an account to explore exciting features and connect with our community!</p>
    </div>
    <div class="form-section">
        <h2>Register</h2>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Register</button>
        </form>
    </div>
</div>

<?php include 'includes/footer.php'; ?>