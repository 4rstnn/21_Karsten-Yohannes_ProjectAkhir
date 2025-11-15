<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login - Planner Event</title>
    <link rel="stylesheet" href="Planner_Eventhome.css">
    <link rel="stylesheet" href="signup.css">
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
        <h2>Create Your Account</h2>
        <form class="login-form" action="#" method="post">
            <label for="name">Username</label>
            <input type="text" id="name" name="name" required>

            <label for="email">email</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            
            <label for="alamat">alamat</label>
            <input type="text" id="alamat" name="alamat" required>
            
            <label for="tanggal_lahir">tanggal lahir</label>
            <input type="date" id="tanggal_lahir" name="tanggal_lahir" required>

    <button type="submit" name="register" class="register">register</button>
        </form>
        <div class="login-links">
            <a href="loginpage.php">already have an account?</a> 
        </div>
    </section>

    <footer>
        &copy; 2025 Planner Event. All rights reserved.
    </footer>

</body>
</html>

<?php
include 'koneksi.php';
if(isset ($_POST['register'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $alamat = $_POST['alamat'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    

    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);


    $query = "INSERT INTO userdata (name, email, password,alamat, tanggal_lahir) VALUES ('$name','$email', '$password','$alamat', '$tanggal_lahir')";
    $result = mysqli_query($koneksi, $query);
    if($result){
        echo "Registration successful. You can now <a href='login.php'>login</a>.";
        header("Location: loginpage.php");
        exit();

    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>