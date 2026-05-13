<?php 
require_once 'connect.php';
require_once 'functions.php';
$result3 = display_data3(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products | E-Farming Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="product.css?v=<?php echo time(); ?>"> </head>
<body>
    <header class="admin-header">
        <nav class="navbar">
            <div class="logo"><a href="indexAdmin.php">E-Farming <span>Admin</span></a></div>
            <ul class="nav-list">
                <li><a href="indexAdmin.php">Dashboard</a></li>
                <li><a href="productsAdmin.php" class="active">Products</a></li>
                <li><a href="addProduct.php">Add Product</a></li>
                <li><a href="removePro.php">Remove Product</a></li>
            </ul>
        </nav>
    </header>

    <main class="container">
        <div class="page-header">
            <h1>Farm Product Inventory</h1>
            <p>Manage your live produce and stock levels</p>
        </div>

        <div class="product-grid">
            <?php while ($row = mysqli_fetch_assoc($result3)) { ?>
                <div class="product-card">
                    <div class="product-img-container">
                        <img src="<?php echo !empty($row['image']) ? $row['image'] : 'veg.jpg'; ?>" alt="Product">
                    </div>
                    <div class="product-details">
                        <span class="product-id">#PID-<?php echo $row['product_id']; ?></span>
                        <h3><?php echo $row['name']; ?></h3>
                        <p class="desc"><?php echo $row['description']; ?></p>
                        
                        <div class="price-stock-row">
                            <span class="card-price">$<?php echo $row['price']; ?></span>
                            <span class="card-stock">Stock: <?php echo $row['quantity_in_stock']; ?></span>
                        </div>
                        
                        <div class="card-actions">
                            <a href="editProduct.php?id=<?php echo $row['product_id']; ?>" class="btn-edit">Edit</a>
                            <a href="removePro.php?id=<?php echo $row['product_id']; ?>" class="btn-delete">Delete</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </main>
</body>
</html>