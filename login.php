<?php
require_once 'includes/config.php';
if (isset($_SESSION['user_id'])) header("Location: home.php");
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE username='$username'";
    $result = mysqli_query($conn, $query);
    if ($user = mysqli_fetch_assoc($result)) {
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['is_admin'] = $user['is_admin'];
            header("Location: home.php");
        } else {
            echo "Invalid password.";
        }
    } else {
        echo "User not found.";
    }
}
?>

<?php include 'includes/header.php'; ?>

<style>
    /* Internal CSS for the content */
    .container {
        display: flex;
        max-width: 900px;
        margin: 50px auto;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        overflow: hidden;
    }

    .welcome-section {
        flex: 1;
        background-image: url(./assets/images/uninotify05.jpeg);
        background-size: cover;
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
        padding: 40px;
        position: relative;
    }

    .logo {
        position: absolute;
        top: 20px;
        left: 20px;
        font-size: 1.5em;
        font-weight: bold;
        color: white;
    }

    .welcome-section h2 {
        font-size: 2.5em;
        font-weight: bold;
        margin-bottom: 15px;
        line-height: 1.2;
    }

    .welcome-section p {
        font-size: 1em;
        opacity: 0.8;
        line-height: 1.5;
    }

    .form-section {
        flex: 1;
        background: white;
        padding: 40px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .form-section h2 {
        font-size: 1.8em;
        color: #333;
        margin-bottom: 10px;
    }

    .form-section p {
        font-size: 0.9em;
        color: #666;
        margin-bottom: 20px;
    }

    form {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }

    input[type="text"],
    input[type="password"] {
        padding: 12px;
        border: 1px solid #ddd;
        border-radius: 5px;
        font-size: 1em;
        outline: none;
        transition: border-color 0.3s;
    }

    input[type="text"]:focus,
    input[type="password"]:focus {
        border-color: #1a3c34; /* Teal border on focus */
    }

    .checkbox-container {
        display: flex;
        align-items: center;
        gap: 5px;
        font-size: 0.9em;
        color: #666;
        margin-top: 10px;
    }

    button {
        padding: 12px;
        background-color: #ff0000; /* Teal button */
        color: white;
        border: none;
        border-radius: 25px;
        font-size: 1em;
        font-weight: bold;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #fc4545; /* Slightly darker teal on hover */
    }

    .form-links {
        display: flex;
        justify-content: flex-end;
        margin-top: 10px;
        font-size: 0.9em;
    }

    .form-links a {
        color: #000000;
        text-decoration: none;
    }

    .form-links a:hover {
        text-decoration: underline;
    }
</style>

<div class="container">
    <div class="welcome-section">
        <h2>You create the news. We make it happen.™</h2>
        <p>Stay informed and never miss an update with TuneGO—your go-to platform for news, event notifications, and real-time updates on the latest happenings in the industry.</p>
    </div>
    <div class="form-section">
        <h2>Login</h2>
        <p>Welcome back! Please login to your account.</p>
        <form method="POST">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <div class="checkbox-container">
                <input type="checkbox" id="remember" name="remember">
                <label for="remember">Remember me</label>
            </div>
            <button type="submit">LOGIN</button>
        </form>
        <div class="form-links">
            <a href="register.php">New User? Sign Up</a>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>