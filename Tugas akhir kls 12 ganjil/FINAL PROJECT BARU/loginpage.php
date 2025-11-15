<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Planner Event</title>
    <link rel="stylesheet" href="Planner_Eventhome.css">
    <link rel="stylesheet" href="loginpage.css">
</head>
<body>
    <header>
        <div class="navbar">
            <a href="index.php" class="logo">
                <img src="Logo.png" alt="Planner Event Logo" style="height:60px; border-radius:50%; vertical-align:middle;">
                Planner Event
            </a>
            <nav>
                <a href="index.php">Home</a>
                <a href="Planner_Eventabout.php">About</a>
                <a href="contactus.php">Contact</a>
                <a href="loginpage.php">Login</a>
            </nav>
        </div>
    </header>

    <section class="login-section">
        <h2>Login to Your Account</h2>
        <form class="login-form" action="#" method="post">
            <label for="name">Email or Username</label>
            <input type="text" id="name" name="name" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
        </form>
        <div class="login-links">
            <a href="#">Forgot Password?</a> |
            <a href="signup.php">Create an Account</a>
        </div>
    </section>

    <footer>
        &copy; 2025 Planner Event. All rights reserved.
    </footer>

</body>
</html>

<?php
session_start();
include 'koneksi.php';

if(isset($_POST['login'])) {
    $name = $_POST['name'];
    $password = $_POST['password'];

    $query = "SELECT * FROM userdata WHERE name='$name'";
    $result = mysqli_query($koneksi, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['name'] = $user['name'];
        header('Location: index.php');
        exit;
    }
    else {
        echo "<script>alert('Invalid username or password.');</script>";
    }
    
}

?>