<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us | Manifest Health</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/contact.css">
</head>
<body>

<!-- Navigation -->
<header class="navbar">
    <div class="nav-container">
        <h1 class="logo">Manifest Health</h1>
        <nav>
            <a href="index.php">Home</a>
            <a href="about.php">About Us</a>
            <a href="services.php">Services</a>
            <a href="gallery.php">Gallery</a>
            <a href="contact.php" class="active">Contact</a>
        </nav>
        <a href="login.php" class="btn-login">Login</a>
    </div>
</header>

<!-- Contact Section -->
<section class="contact-section">
    <div class="contact-container">
        <!-- Contact Form -->
        <div class="contact-form">
            <h2>Get in Touch</h2>
            <form action="contact_process.php" method="post">
                <div class="input-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="input-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="input-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
                </div>
                <button type="submit" class="btn-submit">Send Message</button>
            </form>
        </div>

        <!-- Contact Info -->
        <div class="contact-info">
            <h2>Our Contact Details</h2>
            <p><strong>Address:</strong> 123 Health Street, City, Country</p>
            <p><strong>Email:</strong> contact@manifesthealth.com</p>
            <p><strong>Phone:</strong> +123 456 7890</p>
        </div>
    </div>

    <!-- Google Map -->
    <div class="map-container">
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.835434509398!2d144.95592831531595!3d-37.81720974202112!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d5df1e50791%3A0x5045675218ce6e0!2sYour%20Hospital!5e0!3m2!1sen!2sus!4v1615375340906!5m2!1sen!2sus" 
            width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy">
        </iframe>
    </div>
</section>

<!-- Footer -->
<footer class="footer">
    <div class="footer-container">
        <p>&copy; 2025 Manifest Health. All Rights Reserved.</p>
    </div>
</footer>

</body>
</html>
