<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
    <link rel="stylesheet" href="assets/css/gallery.css">
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

<h2>Gallery</h2>

<?php
$categories = ["facilities", "events", "doctors", "staff"];

foreach ($categories as $category): ?>
    <div class="gallery-category">
        <h3><?php echo ucfirst($category); ?></h3>
        <div class="image-container">
            <?php
            $dir = "uploads/$category/";
            $images = glob($dir . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);

            foreach ($images as $image): ?>
                <div class="image-box">
                    <img src="<?php echo $image; ?>" alt="<?php echo $category; ?>">
                </div>
            <?php endforeach; ?>
        </div>
    </div>
<?php endforeach; ?>

</body>
</html>
