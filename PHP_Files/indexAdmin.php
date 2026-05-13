<?php 
require_once 'connect.php';
require_once 'functions.php';

$result = display_data();  // Orders
$result2 = display_data2(); // Payments
$result3 = display_data3(); // Farm Products
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard | E-Farming</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="indexAdmin.css?v=<?php echo time(); ?>">
</head>
<body>
    <header class="main-header">
        <div class="top-bar">Gift E-Farming Store Management Portal</div>
        <nav class="navbar">
            <div class="logo">E-Farming <span>Admin</span></div>
            <ul class="nav-links">
                <li><a href="indexAdmin.php" class="active">Dashboard</a></li>
                <li><a href="productsAdmin.php">Products</a></li>
                <li><a href="addProduct.php">Add New</a></li>
                <li><a href="admin.php" class="logout">Logout</a></li>
            </ul>
        </nav>
    </header>

    <main class="dashboard-container">
        <div class="welcome-header">
            <h1>System Overview</h1>
            <p>Database Records for Orders, Payments, and Inventory</p>
        </div>

        <div class="data-card">
            <div class="card-header">
                <h2><i class="fas fa-shopping-cart"></i> Order Records</h2>
            </div>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>Order ID</th>
                            <th>Date</th>
                            <th>Address</th>
                            <th>Status</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result)): ?>
                        <tr>
                            <td>#<?php echo $row['order_id']; ?></td>
                            <td><?php echo $row['order_date']; ?></td>
                            <td><?php echo $row['delivery_address']; ?></td>
                            <td><span class="badge"><?php echo $row['order_status']; ?></span></td>
                            <td class="bold">$<?php echo number_format($row['total_amount'], 2); ?></td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="data-card">
            <div class="card-header">
                <h2><i class="fas fa-credit-card"></i> Payment Transactions</h2>
            </div>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>Payment ID</th>
                            <th>Order ID</th>
                            <th>Method</th>
                            <th>Status</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result2)): ?>
                        <tr>
                            <td>#<?php echo $row['payment_id']; ?></td>
                            <td>#<?php echo $row['order_id']; ?></td>
                            <td><?php echo $row['payment_method']; ?></td>
                            <td><span class="badge green"><?php echo $row['payment_status']; ?></span></td>
                            <td class="bold">$<?php echo number_format($row['payment_amount'], 2); ?></td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="data-card">
            <div class="card-header">
                <h2><i class="fas fa-leaf"></i> Farm Inventory</h2>
            </div>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Product Name</th>
                            <th>Stock</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while ($row = mysqli_fetch_assoc($result3)): ?>
                        <tr>
                            <td>#<?php echo $row['product_id']; ?></td>
                            <td><strong><?php echo $row['name']; ?></strong></td>
                            <td><?php echo $row['quantity_in_stock']; ?> units</td>
                            <td class="bold">$<?php echo $row['price']; ?></td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <footer class="footer">
        <p>&copy; 2026 Gift E-Farming Store | Admin Panel</p>
    </footer>
</body>
</html>