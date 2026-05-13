<?php include("connect.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gift E-Farming | Premium Organic Store</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>

    <header class="main-header">
        <nav class="navbar container">
            <div class="logo"><a href="index.php">Gift <span>E-Farming</span></a></div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="Products.php">Gallery</a></li>
                <li><a href="testimonials.php">Testimonials</a></li>
                <li><a href="Contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
        <section class="hero-banner container">
            <div class="hero-wrapper">
                <div class="hero-content">
                    <h1>Pure Organic <br><span>Harvest</span> At Your Door</h1>
                    <p>Gift E-Farming brings the freshest vegetables and fruits from Gujranwala's finest soil directly to your kitchen.</p>
                    <a href="Products.php" class="btn-primary">Explore Gallery</a>
                </div>
                <div class="hero-image">
                    <img src="veg.jpg" alt="Farm Fresh">
                </div>
            </div>
        </section>

        <section class="shop-section container">
            <div class="section-header">
                <h2>Our Fresh Categories</h2>
            </div>

            <div class="product-grid">
                <article class="product-card">
                    <div class="image-box"><img src="veg.jpg" alt="Vegetables"></div>
                    <div class="card-details">
                        <h3>Organic Vegetables</h3>
                        <p>Locally grown, pesticide-free vegetables for a healthy lifestyle.</p>
                        <span class="price-tag">$10 per bundle</span>
                        <a href="orgVeg.php" class="view-link">Have a Look</a>
                    </div>
                </article>

                <article class="product-card">
                    <div class="image-box"><img src="f.jpg" alt="Fruits"></div>
                    <div class="card-details">
                        <h3>Fresh Fruits</h3>
                        <p>Naturally ripened, juicy fruits picked straight from the farm.</p>
                        <span class="price-tag">$8 per assortment</span>
                        <a href="orgFruit.php" class="view-link">Have a Look</a>
                    </div>
                </article>

                <article class="product-card">
                    <div class="image-box"><img src="egg.jpg" alt="Farm Products"></div>
                    <div class="card-details">
                        <h3>Farm Eggs</h3>
                        <p>Organic, free-range eggs from happy and healthy chickens.</p>
                        <span class="price-tag">$9 per Pack</span>
                        <a href="orgPro.php" class="view-link">Have a Look</a>
                    </div>
                </article>
            </div>
        </section>
    </main>

    <footer class="main-footer">
        <div class="container footer-grid">
            <div class="footer-about">
                <h3>Gift <span>E-Farming</span></h3>
                <p>Empowering local farmers and providing healthy, organic food options for every household in Pakistan.</p>
            </div>
            <div class="footer-links">
                <h4>Explore</h4>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="Products.php">Products</a></li>
                    <li><a href="about.php">About Us</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h4>Support</h4>
                <ul>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="Contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="footer-contact">
                <h4>Newsletter</h4>
                <p>Join for fresh harvest alerts!</p>
                <form class="newsletter-form">
                    <input type="email" placeholder="Your Email">
                    <button type="submit" class="newsletter-btn">Join</button>
                </form>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2026 Gift E-Farming | 221980016@gift.edu.pk | +92-3258001501</p>
        </div>
    </footer>

</body>
</html>