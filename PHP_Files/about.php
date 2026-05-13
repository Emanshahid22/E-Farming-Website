<?php include("connect.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Gift E-Farming</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="about.css?v=<?php echo time(); ?>">
</head>
<body class="about-page">

    <header class="main-header">
        <nav class="navbar container">
            <div class="logo"><a href="index.php">Gift <span>E-Farming</span></a></div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php" class="active">About</a></li>
                <li><a href="Products.php">Gallery</a></li>
                <li><a href="testimonials.php">Testimonials</a></li>
                <li><a href="Contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main class="container">
        <section class="about-hero">
            <h1>Our <span>Story</span></h1>
            <p>Directly from the fields of Gujranwala to your kitchen.</p>
        </section>

        <div class="about-main-card">
            <div class="about-flex">
                <div class="about-image-side">
                    <img src="banner2.jpg" alt="Our Farm">
                </div>
                <div class="about-text-side">
                    <h2>Nurturing Nature Every Day</h2>
                    <p>Gift E-Farming isn't just a business; it's a movement toward a healthier lifestyle. We specialize in providing the freshest organic fruits and vegetables, grown with zero harmful chemicals.</p>
                    <p>Our farming techniques prioritize soil health and nutritional density, ensuring that your family gets the very best of what the earth has to offer.</p>
                </div>
            </div>
        </div>

        <div class="value-grid">
            <div class="value-card">
                <i class="fas fa-leaf"></i>
                <h3>100% Organic</h3>
                <p>Pure growth with no synthetic pesticides.</p>
            </div>
            <div class="value-card">
                <i class="fas fa-truck"></i>
                <h3>Fast Delivery</h3>
                <p>Harvested today, delivered today.</p>
            </div>
            <div class="value-card">
                <i class="fas fa-users"></i>
                <h3>Local Farmers</h3>
                <p>Empowering the local agriculture community.</p>
            </div>
        </div>
    </main>

    <footer class="main-footer">
        <div class="container" style="text-align: center;">
            <p>&copy; 2026 Gift E-Farming | 221980016@gift.edu.pk</p>
        </div>
    </footer>

</body>
</html>