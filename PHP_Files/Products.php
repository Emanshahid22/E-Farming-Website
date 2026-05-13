<?php 
require_once 'connect.php';
$query = "SELECT * FROM Farm_Product";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Shop | Gift E-Farming</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="product.css?v=<?php echo time(); ?>">
</head>
<body>
    <header class="main-header">
        <nav class="navbar container">
            <div class="logo">
                <a href="index.php"><i class="fas fa-seedling"></i> Gift <span>E-Farming</span></a>
            </div>
            <ul class="nav-links">
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="Products.php" class="active">Shop</a></li>
                <li><a href="testimonials.php">Reviews</a></li>
                <li><a href="Contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section class="shop-hero">
        <div class="container">
            <h1>Our Fresh <span>Harvest</span></h1>
            <p>Straight from the fertile lands of Gujranwala to your kitchen.</p>
        </div>
    </section>

    <main class="container shop-section">
        <div class="product-grid">
            
            <div class="product-card">
                <div class="image-box">
                    <img src="s.jpg" alt="Organic Spinach">
                </div>
                <div class="card-details">
                    <h3>Organic Spinach</h3>
                    <p>Iron-rich, freshly cut leafy greens grown naturally.</p>
                    <div class="card-footer">
                        <span class="price">Rs. 150</span>
                        <button class="cart-btn"><i class="fas fa-shopping-basket"></i> Add</button>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="image-box">
                    <img src="t.jpg" alt="Fresh Tomatoes">
                </div>
                <div class="card-details">
                    <h3>Farm Tomatoes</h3>
                    <p>Sun-ripened, juicy tomatoes perfect for salads and cooking.</p>
                    <div class="card-footer">
                        <span class="price">Rs. 220</span>
                        <button class="cart-btn"><i class="fas fa-shopping-basket"></i> Add</button>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="image-box">
                    <img src="ca.jpg" alt="Local Carrots">
                </div>
                <div class="card-details">
                    <h3>Crunchy Carrots</h3>
                    <p>Naturally sweet and crisp carrots, rich in Beta-Carotene.</p>
                    <div class="card-footer">
                        <span class="price">Rs. 130</span>
                        <button class="cart-btn"><i class="fas fa-shopping-basket"></i> Add</button>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="image-box">
                    <img src="h.jpg" alt="Pure Honey">
                </div>
                <div class="card-details">
                    <h3>Organic Honey</h3>
                    <p>Unfiltered, raw honey collected from farm beehives.</p>
                    <div class="card-footer">
                        <span class="price">Rs. 950</span>
                        <button class="cart-btn"><i class="fas fa-shopping-basket"></i> Add</button>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="image-box">
                    <img src="gw.jpg" alt="Wheat Flour">
                </div>
                <div class="card-details">
                    <h3>Stone-Ground Wheat</h3>
                    <p>High-fiber whole wheat flour (Chakki Atta) for soft rotis.</p>
                    <div class="card-footer">
                        <span class="price">Rs. 1,450</span>
                        <button class="cart-btn"><i class="fas fa-shopping-basket"></i> Add</button>
                    </div>
                </div>
            </div>

            <div class="product-card">
                <div class="image-box">
                    <img src="p.jpg" alt="Farm Potatoes">
                </div>
                <div class="card-details">
                    <h3>Golden Potatoes</h3>
                    <p>Versatile, earth-fresh potatoes from our latest harvest.</p>
                    <div class="card-footer">
                        <span class="price">Rs. 90</span>
                        <button class="cart-btn"><i class="fas fa-shopping-basket"></i> Add</button>
                    </div>
                </div>
            </div>

            <div class="product-card">
        <div class="image-box"><img src="sc.jpg" alt="Corn"></div>
        <div class="card-details">
            <h3>Sweet Corn</h3>
            <p>Freshly harvested sweet corn, perfect for boiling or grilling.</p>
            <div class="card-footer">
                <span class="price">Rs. 180</span>
                <button class="cart-btn"><i class="fas fa-shopping-basket"></i> Add</button>
            </div>
        </div>
    </div>

    <div class="product-card">
        <div class="image-box"><img src="o.jpg" alt="Onions"></div>
        <div class="card-details">
            <h3>Red Onions</h3>
            <p>Sharp and flavorful onions, essential for every kitchen.</p>
            <div class="card-footer">
                <span class="price">Rs. 160</span>
                <button class="cart-btn"><i class="fas fa-shopping-basket"></i> Add</button>
            </div>
        </div>
    </div>

    <div class="product-card">
        <div class="image-box"><img src="bp.jpg" alt="Peppers"></div>
        <div class="card-details">
            <h3>Bell Peppers</h3>
            <p>Crisp green capsicum grown in our climate-controlled sheds.</p>
            <div class="card-footer">
                <span class="price">Rs. 240</span>
                <button class="cart-btn"><i class="fas fa-shopping-basket"></i> Add</button>
            </div>
        </div>
    </div>

    <div class="product-card">
        <div class="image-box"><img src="g.jpg" alt="Garlic"></div>
        <div class="card-details">
            <h3>Organic Garlic</h3>
            <p>Strong, aromatic garlic bulbs dried to perfection.</p>
            <div class="card-footer">
                <span class="price">Rs. 300</span>
                <button class="cart-btn"><i class="fas fa-shopping-basket"></i> Add</button>
            </div>
        </div>
    </div>

    <div class="product-card">
        <div class="image-box"><img src="egg.jpg" alt="Eggs"></div>
        <div class="card-details">
            <h3>Desi Eggs</h3>
            <p>Farm-fresh free-range eggs, delivered daily.</p>
            <div class="card-footer">
                <span class="price">Rs. 450</span>
                <button class="cart-btn"><i class="fas fa-shopping-basket"></i> Add</button>
            </div>
        </div>
    </div>

    <div class="product-card">
        <div class="image-box"><img src="fb.jpg" alt="Broccoli"></div>
        <div class="card-details">
            <h3>Fresh Broccoli</h3>
            <p>Nutrient-dense green broccoli florets, harvested fresh.</p>
            <div class="card-footer">
                <span class="price">Rs. 500</span>
                <button class="cart-btn"><i class="fas fa-shopping-basket"></i> Add</button>
            </div>
        </div>
    </div>

    <div class="product-card">
        <div class="image-box"><img src="banner2.jpg" alt="Mixed Bag"></div>
        <div class="card-details">
            <h3>Weekly Harvest Bag</h3>
            <p>A seasonal mix of 5-7 different fruits and vegetables.</p>
            <div class="card-footer">
                <span class="price">Rs. 2,500</span>
                <button class="cart-btn"><i class="fas fa-shopping-basket"></i> Add</button>
            </div>
        </div>
    </div>

</div>

            

        </div>
    </main>

    <footer class="main-footer">
        <div class="container footer-grid">
            <div class="footer-about">
                <h3>Gift <span>E-Farming</span></h3>
                <p>Delivering nature's goodness to Gujranwala.</p>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2026 Gift E-Farming. All Rights Reserved.</p>
            </div>
        </div>
    </footer>
</body>
</html>