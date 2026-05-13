<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="contact.css">

</head>
<body>
    <div class="headinggg">
        <h1>Gift E-Farming Store</h1>
    </div>
    <header>
        <nav class="navbar">
            <div class="logo"><a href="index.php">E-Farming</a></div>
            <ul class="nav-list">
                <li><a href="about.php">About</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="Products.php">Gallery</a></li>
                <li><a href="testimonials.php">Testimonials</a></li>
                <li><a href="Contact.php">Contact</a></li>
            </ul>
            <div class="search-bar">
                <input type="text" placeholder="Search">
                <button>Search</button>
            </div>
        </nav>
    </header>

    <section class="contact">
        <div class="container">
            <div class="contact-content">
                <div class="contact-form">
                    <h2 class="fade-in">Contact Us</h2>
                    <p class="fade-in">Got questions or feedback? Drop us a message.</p>
                    <form>
                        <div class="form-group">
                            <label for="name">Your Name</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Your Email</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="message">Your Message</label>
                            <textarea id="message" name="message" rows="4" required></textarea>
                        </div>
                        <button class="btn-submit" type="submit">Send Message</button>
                    </form>
                </div>
                <div class="contact-location">
                    <h3>Visit Us</h3>
                    <p>Gujranwala Gift University</p>
                    <p>Model Town, Gujranwala</p>
                    <p>Pakistan</p>
                </div>
            </div>
        </div>
    </section>


    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section">
                <h2 class="footer-heading">Quick Links</h2>
                <ul class="footer-links">
                    <li class="footer-link"><a href="index.php">Home</a></li>
                    <li class="footer-link"><a href="Products.php">Products</a></li>
                    <li class="footer-link"><a href="about.php">About Us</a></li>
                    <li class="footer-link"><a href="Contact.php">Contact</a></li>
                </ul>
            </div>
            <div class="footer-section">
                <h2 class="footer-heading">Contact Us</h2>
                <p>123 Street, City</p>
                <p>Email: 221980016@gift.edu.pk</p>
                <p>Phone: +92-3258001501</p>
                <div class="footer-social">
                    <ul class="social-icons">
                        <li class="social-icon"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="social-icon"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="social-icon"><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="footer-section footer-newsletter">
                <h2 class="footer-heading">Subscribe to Our Newsletter</h2>
                <form class="newsletter-form">
                    <input type="email" class="newsletter-input" placeholder="Enter your email">
                    <button type="submit" class="newsletter-button">Subscribe</button>
                </form>
            </div>
        </div>
    </footer>
</body>
</html>