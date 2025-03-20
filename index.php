<?php
include __DIR__ . '/db_config.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Johns Hopkins Health</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>


<!-- Navigation -->
<header>
    <div class="nav-container">
        <h1>Manifest Health</h1>

        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="services.php">Services</a>
            <a href="gallery.php">Gallery</a>
            <a href="contact.php">Contact</a>
        </nav>

        <a href="login.php" class="login-btn">Login</a>
    </div>
</header>

<!-- Hero Section -->
<div class="hero-section">
    <div class="hero-overlay">
        <h1 class="hero-title">Welcome to Manifest Health</h1>
        <p class="hero-subtitle">Your trusted partner in health and wellness</p>
    </div>
</div>

<!-- Mission, Vision, and Slogan Section -->
<!-- <section class="mission-vision">
    <div class="container">
        <div class="mission">
            <h2>Our Mission</h2>
            <p>To provide world-class healthcare through innovation, compassion, and excellence in medical research and patient care.</p>
        </div>
        <div class="vision">
            <h2>Our Vision</h2>
            <p>To be the leading healthcare institution, transforming lives through groundbreaking medical advancements and patient-centered care.</p>
        </div>
        <div class="slogan">  <!-- Corrected class name -->
            <!-- <h2>Our Slogan</h2>
            <p>"Empowering Health, Transforming Lives."</p>
        </div>
    </div>
</section> --> 

<section class="featured">
    <div class="featured-card">
        <h2>Our Mission</h2>
        <p>To provide world-class healthcare through innovation, compassion, and excellence in medical research and patient care.</p>
        
    </div>
    <div class="featured-card">
        <h2>Our Vision</h2>
        <p>To be the leading healthcare institution, transforming lives through groundbreaking medical advancements and patient-centered care.</p>
        
    </div>
    <div class="featured-card">
        <h2>Our Slogan</h2>
        <p>"Empowering Health, Transforming Lives."</p>
        
    </div>
</section>


<!-- Quick Section -->
<div class="section-container">
    <h2 class="section-title">Quick Links</h2>
    <div class="card-grid">
        <div class="card">
            <img src="assets/images/doctor.jpg.jpg" alt="Quick Link 1">
            <div class="card-content">
                <h3>Find a Doctor</h3>
                <p>Locate specialists near you easily.</p>
            </div>
        </div>
        <div class="card">
            <img src="assets/images/appointment.jpg.jpg" alt="Quick Link 2">
            <div class="card-content">
                <h3>Appointments</h3>
                <p>Schedule your visit quickly online.</p>
            </div>
        </div>
        <div class="card">
            <img src="assets/images/location.jpg.jpg" alt="Quick Link 2">
            <div class="card-content">
                <h3>Location</h3>
                <p>Our availability in location</p>
            </div>
        </div>
        <div class="card">
            <img src="assets/images/chat.jpg.jpg" alt="Quick Link 3">
            <div class="card-content">
                <h3>mychart</h3>
                <p>Stay updated with our latest tips.</p>
            </div>
        </div>
    </div>
</div>


<!-- Featured Sections -->
<section class="featured">
    <div class="featured-card">
        <h3>Our Services</h3>
        <p>Explore our range of medical specialties.</p>
        <a href="services.php">Learn More</a>
    </div>
    <div class="featured-card">
        <h3>Latest News</h3>
        <p>Stay informed with our health updates.</p>
        <a href="news.php">Read Articles</a>
    </div>
    <div class="featured-card">
        <h3>Patient Resources</h3>
        <p>Access information to manage your health.</p>
        <a href="resources.php">View Resources</a>
    </div>
</section>

<!-- News Section -->
<div class="news-section">
    <h2>Latest News</h2>
    <div class="news-grid">
        <div class="news-card">
            <img src="assets/images/news1.jpg" alt="News 1">
            <div class="news-card-content">
                <h3>New Breakthrough in Cardiology</h3>
                <p class="news-date">March 5, 2025</p>
                <p>Our cardiology department has introduced a new minimally invasive procedure...</p>
                <button class="read-more-btn">Read More</button>
            </div>
        </div>
        <div class="news-card">
            <img src="assets/images/news2.jpg" alt="News 2">
            <div class="news-card-content">
                <h3>Advancements in Cancer Research</h3>
                <p class="news-date">February 28, 2025</p>
                <p>Researchers have made significant progress in targeted cancer treatments...</p>
                <button class="read-more-btn">Read More</button>
            </div>
        </div>
        <div class="news-card">
            <img src="assets/images/news3.jpg" alt="News 3">
            <div class="news-card-content">
                <h3>Healthcare Innovations Expo</h3>
                <p class="news-date">February 20, 2025</p>
                <p>Join us for an event showcasing the latest in healthcare technology and innovation...</p>
                <button class="read-more-btn">Read More</button>
            </div>
        </div>
    </div>
</div>


<!-- Testimonies Flex Section -->
<div class="testimonies-section">
    <h2>What Our Patients Say</h2>
    <div class="testimonies-flex">
        <div class="testimony-card">
            <p class="testimony-content">"The doctors here are very professional and caring. They made my experience smooth and stress-free!"</p>
            <p class="testimony-author">- Emily Watson</p>
        </div>
        <div class="testimony-card">
            <p class="testimony-content">"Excellent service and friendly staff. I felt genuinely cared for."</p>
            <p class="testimony-author">- Michael Brown</p>
        </div>
        <div class="testimony-card">
            <p class="testimony-content">"State-of-the-art facilities and knowledgeable doctors. Highly recommended!"</p>
            <p class="testimony-author">- Sarah Lee</p>
        </div>
        <div class="testimony-card">
            <p class="testimony-content">"I appreciate the timely appointments and the thorough attention from the staff."</p>
            <p class="testimony-author">- David Green</p>
        </div>
        <div class="testimony-card">
            <p class="testimony-content">"Modern facilities with a welcoming atmosphere. I felt very comfortable!"</p>
            <p class="testimony-author">- Jessica Brown</p>
        </div>
        <div class="testimony-card">
            <p class="testimony-content">"The diagnosis was spot-on, and the follow-up care was excellent."</p>
            <p class="testimony-author">- Mark Wilson</p>
        </div>
    </div>
</div>

<!-- Contact Section -->
<div class="contact-section">
    <h2>Contact Us</h2>
    <p>We are here to help you. Reach out to us through any of the following ways:</p>
    
    <div class="contact-container">
        <div class="contact-info">
            <h3>📍 Location</h3>
            <p>123 Health Avenue, City, Country</p>
        </div>
        <div class="contact-info">
            <h3>📞 Phone</h3>
            <p>+25478 456 7890</p>
        </div>
        <div class="contact-info">
            <h3>📧 Email</h3>
            <p>info@yourhospital.com</p>
        </div>
    </div>

    <!-- Contact Form -->
    <form action="contact_process.php" method="POST" class="contact-form">
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <textarea name="message" placeholder="Your Message" required></textarea>
        <button type="submit">Send Message</button>
    </form>
</div>



<!-- Footer Section -->
<footer class="footer">
    <div class="footer-container">
        <!-- Replacing About Us with Branches -->
        <div class="footer-branches">
            <h3>Our Branches</h3>
            <ul>
                <li>🏥 Main Hospital - 123 Health Avenue, City</li>
                <li>🏥 North Branch - 45 Wellness Street</li>
                <li>🏥 South Branch - 78 Care Lane</li>
                <li>🏥 East Branch - 90 Medical Drive</li>
                <li>🏥 West Branch - 67 Recovery Road</li>
                <li>🏥 Central Branch - 34 Healing Blvd</li>
                <li>🏥 Specialized Care Center - 101 Research Park</li>
            </ul>
        </div>

        <div class="footer-links">
            <h3>Quick Links</h3>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="services.php">Services</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </div>

        <div class="footer-contact">
            <h3>Contact Info</h3>
            <p>📍 123 Health Avenue, City, Country</p>
            <p>📞 ++25478 456 7890</p>
            <p>📧 info@yourhospital.com</p>
        </div>
    </div>

    <div class="footer-bottom">
        <p>&copy; <?php echo date("Y"); ?> Your Hospital. All rights reserved.</p>
    </div>
</footer>
