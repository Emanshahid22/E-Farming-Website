
<?php
include("connect.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $customer_id = 1;
    $admin_id = null;

    $order_date = date('Y-m-d H:i:s');

    $delivery_address = $_POST['delivery_address'];
    $total_amount = $_POST['total_amount'];

    
    $default_order_status = "Pending"; 
    $sql = "INSERT INTO `order` (`customer_id`, `admin_id`, `delivery_address`, `order_date`, `order_status`, `total_amount`) 
            VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);

    if ($stmt) {
        $stmt->bind_param("issssd", $customer_id, $admin_id, $delivery_address, $order_date, $default_order_status, $total_amount);
        if ($stmt->execute()) {
            echo "Order placed successfully!";
        } else {
            echo "Error placing order: " . $stmt->error;
        }
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conn->error;
    }
}

$conn->close();
?>








<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place Order</title>
    <link rel="stylesheet" href="placeOrder.css">
</head>
<body>
    <div class="headinggg">
        <h1>Gift E-Farming Store</h1>
    </div>
    <header>
        <nav class="navbar">
            <div class="logo"><a href="index.php">E-Farming</a></div>
            <ul class="nav-list">
                <li><a href="/about.php">About</a></li>
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


    <section class="place-order">
        <div class="container">
            <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Place Your Order</title>
    <!-- Link your CSS file here -->
    <link rel="stylesheet" href="place_order.css">
</head>
<body>
    <div class="container">
        <div class="place-order">
            <h1>Place Your Order</h1>
            <form method="POST" action="placeOrder.php" class="order-form">
                <div class="form-group">
                    <label for="delivery_address">Delivery Address:</label>
                    <input type="text" name="delivery_address">
                </div>
                <div class="form-group">
                    <label for="order_status">Order Status:</label>
                    <input type="text" id="order_status" name="order_status" required>
                </div>
                <div class="form-group">
                    <label for="total_amount">Total Amount:</label>
                    <input type="number" step="0.01" id="total_amount" name="total_amount" required>
                </div>
                <div class="form-group">
                    <button type="submit">Place Order</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>



   





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