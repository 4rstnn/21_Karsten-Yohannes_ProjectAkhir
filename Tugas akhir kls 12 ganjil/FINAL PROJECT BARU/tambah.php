
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Event Booking - Planner Event</title>
    <link rel="stylesheet" href="Planner_Eventhome.css">
    <link rel="stylesheet" href="tambah.css">
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
                <a href="events.php">Events</a>
                <a href="loginpage.php">Login</a>
            </nav>
        </div>
    </header>

    <div class="form-container">
        <h1>Add Event Booking</h1>
        
        <form method="post" action="tambah_aksi.php" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="event_type">Event Type:</label>
                <input type="text" id="event_type" name="event_type" required>
            </div>

            <div class="form-group">
                <label for="location">Location:</label>
                <input type="text" id="location" name="location" required>
            </div>

            <div class="form-group">
                <label for="date">Date:</label>
                <input type="date" id="date" name="date" required>
            </div>

            <div class="form-group">
                <label for="duration1">Starts At:</label>
                <input type="time" id="duration1" name="duration1" required>
            </div>

            <div class="form-group">
                <label for="duration2">Ends At:</label>
                <input type="time" id="duration2" name="duration2" required>
            </div>

            <div class="form-group">
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
            </div>

            <button type="submit">Add Event Booking</button>
        </form>

        <div class="back-link">
            <a href="events.php">← Back to Events</a>
        </div>
    </div>

    <footer>
        &copy; 2025 Planner Event. All rights reserved.
    </footer>
</body>
</html>