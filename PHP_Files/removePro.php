<?php
include 'connect.php'; // Assuming this file contains your database connection code

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["product_id"])) {
        $product_id = $_POST["product_id"];

        $check_product_sql = "SELECT * FROM farm_product WHERE product_id = $product_id";
        $check_product_result = $conn->query($check_product_sql);

        if ($check_product_result->num_rows > 0) {
            // The product with the given ID exists, delete it from the farm_product table
            $delete_sql = "DELETE FROM farm_product WHERE product_id = $product_id";

            if ($conn->query($delete_sql) === TRUE) {
                echo "Record Deleted Successfully." . "<br>";
            } else {
                echo "Error: " . $delete_sql . "<br>" . $conn->error;
            }
        } else {
            echo "Error: Product with ID $product_id does not exist.";
        }
    } else {
        echo "Error: Product ID is not set.";
    }
    $conn->close();
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Remove Product</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Ginger&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="addPro.css">
</head>
<body>

    <div class="headinggg">
        <h1>Gift E-Farming Store</h1>
    </div>
    <header>
        <nav class="navbar">
            <div class="logo"><a href="indexAdmin.php">E-Farming</a></div>
            
             
                <ul class="nav-list">
             
                    <li><a href="productsAdmin.php">Products</a></li>
                    
                    <li><a href="addProduct.php">Add Product</a></li>
                    <li><a href="removePro.php">Remove Product</a></li>
                </ul>
            
            
        </nav>
    </header>

    <h1 style="text-align: center; color: rgb(230, 221, 221)">Remove a Product</h1>
    <form id="remove-product-form" method ="POST">
        <label for="productID">Product ID:</label>
        <input type="text" id="productID" name="product_id" required><br>

        <button type="submit">Remove Product</button>
    </form>

    <h2>Product List</h2>
    <ul id="product-list"></ul>

    <script src="removeProductScript.js"></script>

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-section">
                <h2 class="footer-heading">Quick Links</h2>
                <ul class="footer-links">
                    <li class="footer-link"><a href="indexAdmin.php">Home</a></li>
                    <li class="footer-link"><a href="productsAdmin.php">Products</a></li>
                    <li class="footer-link"><a href="addProduct.php">Add Products</a></li>
                    <li class="footer-link"><a href="removePro.php">Remove Products</a></li>
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
