<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Start Planning Your Event</title>
    <link rel="icon" href="Logo.png" style="border-radius: 50%;">
    <link rel="stylesheet" href="Planner_Eventhome.css">
    <link rel="stylesheet" href="StartPlan.css">
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

    <section class="plan-form-section">
        <h2>Start Planning Your Event</h2>
        <form class="plan-form" action="#" method="post">
            <label for="name">Your Name</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email Address</label>
            <input type="email" id="email" name="email" required>

            <label for="event-type">Event Type</label>
            <select id="event-type" name="event-type" required>
                <option value="">Select an event type</option>
                <option value="wedding">Wedding</option>
                <option value="corporate">Corporate Event</option>
                <option value="birthday">Birthday Party</option>
                <option value="festival">Festival</option>
                <option value="other">Other (please specify)</option>
            </select>

            <div id="other-event-type-container" class="hidden">
                <label for="other-event-type">Please specify your event</label>
                <input type="text" id="other-event-type" name="other-event-type">
            </div>

            <label for="date">Event Date</label>
            <input type="date" id="date" name="date" required>

            <label for="details">Event Details</label>
            <textarea id="details" name="details" rows="4" placeholder="Tell us more about your event..." required></textarea>

            <button type="submit">Submit</button>
        </form>
    </section>

    <footer>
        &copy; 2025 Planner Event. All rights reserved.
    </footer>

    <script>
        const eventType = document.getElementById('event-type');
        const otherContainer = document.getElementById('other-event-type-container');
        const otherInput = document.getElementById('other-event-type');

        eventType.addEventListener('change', function() {
            if (this.value === 'other') {
                otherContainer.classList.remove('hidden');
                otherInput.required = true;
            } else {
                otherContainer.classList.add('hidden');
                otherInput.required = false;
                otherInput.value = '';
            }
        });

        document.querySelector('.plan-form').addEventListener('submit', function(e) {
            e.preventDefault();
            window.location.href = "thankyou.php";
        
        });
    </script>
</body>
</html>