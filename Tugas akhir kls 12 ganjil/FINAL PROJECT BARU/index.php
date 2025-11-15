<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Event Planner - Home</title>
    <link rel="icon" href="Logo.png" style="border-radius: 50%;">
    <link rel="stylesheet" href="Planner_Eventhome.css">
</head>
<body>

    <header>
        <div class="navbar">
            <a href="index.php" class="logo">
            <img src="Logo.png" alt="Planner Event Logo" style="height:60px; border-radius:50%; vertical-align:middle;">
            Welcome To Planner Event
            <nav>
                <a href="index.php">Home</a>
                <a href="Planner_Eventabout.php">About</a>
                <a href="contactus.php">Contact</a>
                <a href="loginpage.php">Login</a>
            </nav>
        </div>
    </header>


    <section class="jumbotron">
        <h1>World-Class Event Experiences</h1>
        <p>From global summits to private celebrations, we deliver unforgettable moments for every occasion.</p>
        <a href="StartPlan.php" class="cta-btn">Start Planning</a>
    </section>


    <section class="carousel-container">
        <button class="carousel-btn prev" onclick="moveSlide(-1)">&#10094;</button>
        <div class="carousel-track" id="carouselTrack">
            <div class="carousel-slide">
                <img src="marriage event pic.jpg" alt="Event 1">
                <div class="carousel-caption">Marriage Venues</div>
            </div>
            <div class="carousel-slide">
                <img src="Grand Opening.jpg" alt="Event 2">
                <div class="carousel-caption">Grand Openings</div>
            </div>
            <div class="carousel-slide">
                <img src="Biggest-Music-Festivals-in-the-World.jpg" alt="Event 3">
                <div class="carousel-caption">World-Class Entertainment</div>
            </div>
        </div>
        <button class="carousel-btn next" onclick="moveSlide(1)">&#10095;</button>
    </section>

    <section class="categories">
        <div class="category">
            <img src="https://img.icons8.com/ios-filled/100/0078d7/conference.png" alt="Venues">
            <h3>Venues</h3>
            <p>Discover iconic locations for every type of event, from ballrooms to stadiums.</p>
        </div>
        <div class="category">
            <img src="https://img.icons8.com/ios-filled/100/0078d7/waiter.png" alt="Catering">
            <h3>Services</h3>
            <p>Enjoy curated menus and world-class service for every taste and style.</p>
        </div>
        <div class="category">
            <img src="https://img.icons8.com/ios-filled/100/0078d7/microphone.png" alt="Entertainment">
            <h3>Entertainment</h3>
            <p>Book headline acts, speakers, and immersive experiences for your guests.</p>
        </div>
    </section>


    <section class="card-konten-section">
        <div class="card-konten" style="text-align: center;">
            <img src="https://images.unsplash.com/photo-1465101046530-73398c7f28ca?auto=format&fit=crop&w=600&q=80" alt="Card 1">
            <h4>Event Planning Insights</h4>
            <p>Expert advice and inspiration to help you create extraordinary events.</p>
        </div>
        <div class="card-konten" style="text-align: center;">
            <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d?auto=format&fit=crop&w=600&q=80" alt="Card 2">
            <h4>Trusted Vendor Network</h4>
            <p>Access our exclusive directory of the industry's best suppliers and partners.</p>
        </div>
        <div class="card-konten" style="text-align: center;">
            <img src="https://images.unsplash.com/photo-1465101178521-c1a9136a3b99?auto=format&fit=crop&w=600&q=80" alt="Card 3">
            <h4>Success Stories</h4>
            <p>See how we've helped clients deliver memorable, high-impact events worldwide.</p>
        </div>
    </section>

    <footer>
        &copy; 2025 eventplanner. All rights reserved.
    </footer>


    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('.carousel-slide');
        const track = document.getElementById('carouselTrack');
        function showSlide(index) {
            if(index < 0) currentSlide = slides.length - 1;
            else if(index >= slides.length) currentSlide = 0;
            else currentSlide = index;
            track.style.transform = 'translateX(' + (-currentSlide * 100) + '%)';
        }
        function moveSlide(dir) {
            showSlide(currentSlide + dir);
        }
        setInterval(() => moveSlide(1), 6000);
        showSlide(0);
    </script>
</body>
</html>