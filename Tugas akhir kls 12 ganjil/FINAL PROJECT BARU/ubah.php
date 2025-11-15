<?php
include 'koneksi.php';

$id       = $_POST['id'];
$name     = $_POST['name'];
$email    = $_POST['email'];
$event_type = $_POST['event_type'];
$location = $_POST['location'];
$date     = $_POST['date'];
$duration1 = $_POST['duration1'];
$duration2 = $_POST['duration2'];
$message  = $_POST['message'];

// Input validation
if (empty($name) || empty($email) || empty($event_type) || empty($location) || empty($date) || empty($duration1) || empty($duration2) || empty($message)) {
    echo "<script>
            alert('All fields are required!');
            window.location.href='update.php?id=$id';
          </script>";
    exit;
}

// Email validation
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<script>
            alert('Invalid email format!');
            window.location.href='update.php?id=$id';
          </script>";
    exit;
}

// Use prepared statement to prevent SQL injection
$query = "UPDATE contact SET 
            name=?,
            email=?,
            event_type=?,
            location=?,
            date=?,
            duration1=?,
            duration2=?,
            message=?
          WHERE id=?";

$stmt = $koneksi->prepare($query);
$stmt->bind_param("ssssssssi", $name, $email, $event_type, $location, $date, $duration1, $duration2, $message, $id);

if ($stmt->execute()) {
    echo "<script>
            alert('Event booking updated successfully!');
            window.location.href='events.php';
          </script>";
} else {
    echo "<script>
            alert('Error updating record: " . $stmt->error . "');
            window.location.href='update.php?id=$id';
          </script>";
}

$stmt->close();
$koneksi->close();
?>