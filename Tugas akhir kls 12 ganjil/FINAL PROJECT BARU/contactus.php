<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Contact Us - Planner Event</title>
    <link rel="stylesheet" href="Planner_Eventhome.css">
    <link rel="stylesheet" href="contactus.css">
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

    <section class="contact-section">
        <div class="contact-logo">
            <img src="Logo.png" alt="Planner Event Logo">
        </div>
        <h2>Contact Us</h2>

        <form class="contact-form" action="#" method="post">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" required>

             <label for="event_type">What type of event do you want to hold</label>
            <input type="text" id="event_type" name="event_type" required>

            <label for="location">Where is the event held at</label>
            <input type="text" id="location" name="location" required>

             <label for="date">Date</label>
            <input type="date" id="date" name="date" required>

             <label for="duration1">What time does the event start</label>
            <input type="time" id="duration1" name="duration1" required>

            <label for="duration2">What time does the event end</label>
            <input type="time" id="duration2" name="duration2" required>

            <label for="message">Your Message</label>
            <textarea id="message" name="message" rows="5" required></textarea>

            <button type="submit" name="events">Send Message</button>
        </form>
        <div class="contact-info">
            <p>Or email us at <a href="mailto:PlannerEventOFC@gmail.com">PlannerEventOFC@gmail.com</a></p>
            <p>No.100 JL.Veteran Utara, Makassar, Indonesia</p>
            <p>Phone: 0812 3456 7890</p>
        </div>
    </section>

    <footer>
        &copy; 2025 Planner Event. All rights reserved.
    </footer>
</body>
</html>


<?php
include 'koneksi.php';
if(isset ($_POST['events'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $event_type = $_POST['event_type'];
    $location = $_POST['location'];
    $date = $_POST['date'];
    $duration1 = $_POST['duration1'];
    $duration2 = $_POST['duration2'];
    $message = $_POST['message'];
    


    $query = "INSERT INTO contact (name, email, event_type, location, date, duration1, duration2, message) VALUES ('$name','$email', '$event_type','$location', '$date','$duration1', '$duration2', '$message')";
    $result = mysqli_query($koneksi, $query);
    if($result){
        echo "Registration successful. You can now <a href='login.php'>login</a>.";
        header("Location: events.php");
        exit();

    } else {
        echo "Error: " . mysqli_error($koneksi);
    }
}
?>