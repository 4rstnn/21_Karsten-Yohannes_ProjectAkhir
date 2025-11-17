<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Event Bookings - Planner Event</title>
    <link rel="stylesheet" href="Planner_Eventhome.css">
    <link rel="stylesheet" href="events.css">
</head>
<body>
    <header>
        <div class="navbar">
            <a href="index.php" class="logo">
                <img src="Logo.png" alt="Planner Event Logo" style="height:60px; border-radius:50%; vertical-align:middle;">
                Planner Event
            </a>
            <nav class="buttons">
                <a href="index.php" style="color:white !important">Home</a>
                <a href="Planner_Eventabout.php"style="color:white !important">About</a>
                <a href="contactus.php"style="color:white !important">Contact</a>
                <a href="loginpage.php"style="color:white !important">Login</a>
            </nav>
        </div>
    </header>



    <div class="full">
        <h1 style="text-align: center; color: #333; margin-bottom: 30px; animation: slideInUp 0.6s ease-out;">Event Bookings</h1>
        
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Event Type</th>
                    <th>Location</th>
                    <th>Date</th>
                    <th>Starts At</th>
                    <th>Ends At</th>
                    <th>Message</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                    include 'koneksi.php';
                    $data = mysqli_query($koneksi,"select * from contact");
                    while($d = mysqli_fetch_array($data)){
                        ?>
                        <tr>
                            <td><?php echo $d['name']; ?></td>
                            <td><?php echo $d['email']; ?></td>
                            <td><?php echo $d['event_type']; ?></td>
                            <td><?php echo $d['location']; ?></td>
                            <td><?php echo $d['date']; ?></td>
                            <td><?php echo $d['duration1']; ?></td>
                            <td><?php echo $d['duration2']; ?></td>
                            <td><?php echo $d['message']; ?></td>
                            <td>
                                <a href="update.php?id=<?php echo $d['id']; ?>">Edit</a>
                                |
                                <a href="hapus.php?id=<?php echo $d['id']; ?>">Delete</a>
                            </td>
                        </tr>
                        <?php 
                    }
                ?>
            </tbody>
        </table>

        <div class="add-button">
            <a href="tambah.php">+ Add Event Booking</a>
        </div>
    </div>

    <footer>
        &copy; 2025 Planner Event. All rights reserved.
    </footer>
</body>
</html>         