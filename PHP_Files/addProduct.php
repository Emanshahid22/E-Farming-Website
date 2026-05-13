<?php
include 'connect.php';

$message = "";

// Check if the request is POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // We check for the exact 'name' attributes used in the HTML form below
    if (isset($_POST["p_name"], $_POST["p_desc"], $_POST["p_price"], $_POST["p_qty"], $_POST["f_id"])) {
        
        // Escape variables for security
        $name = mysqli_real_escape_string($conn, $_POST["p_name"]);
        $description = mysqli_real_escape_string($conn, $_POST["p_desc"]);
        $price = mysqli_real_escape_string($conn, $_POST["p_price"]);
        $quantity = mysqli_real_escape_string($conn, $_POST["p_qty"]);
        $farmer_id = mysqli_real_escape_string($conn, $_POST["f_id"]);

        // 1. Verify farmer exists in the Farmer table 
        $check_farmer = "SELECT * FROM Farmer WHERE farmer_id = '$farmer_id'";
        $result = $conn->query($check_farmer);

        if ($result->num_rows > 0) {
            // 2. Insert into Farm_Product (product_id is AUTO_INCREMENT) 
            $insert_sql = "INSERT INTO Farm_Product (name, description, price, quantity_in_stock, farmer_id) 
                           VALUES ('$name', '$description', '$price', '$quantity', '$farmer_id')";

            if ($conn->query($insert_sql) === TRUE) {
                $message = "<div style='color:green; text-align:center;'>Product successfully added to the inventory!</div>";
            } else {
                $message = "<div style='color:red; text-align:center;'>Database Error: " . $conn->error . "</div>";
            }
        } else {
            $message = "<div style='color:red; text-align:center;'>Error: Farmer ID '$farmer_id' is not registered in the system.</div>";
        }
    } else {
        // This is the error you were seeing. It triggers if the 'name' attributes don't match.
        $message = "<div style='color:orange; text-align:center;'>Error: Form submission failed. Please ensure all fields are filled.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add Product | Admin Panel</title>
    <link rel="stylesheet" href="addPro.css">
</head>
<body>

    <div class="headinggg">
        <h1>Gift E-Farming Store</h1>
    </div>

    <h1 style="text-align: center; color: white;">Add New Farm Product</h1>

    <?php echo $message; ?>

    <div class="form-container" style="background: rgba(0,0,0,0.8); padding: 25px; border-radius: 10px; width: 450px; margin: 30px auto; color: white;">
        
        <form action="addProduct.php" method="POST">
            
            <label>Product Name:</label>
            <input type="text" name="p_name" required style="width: 100%; margin-bottom: 15px;">

            <label>Product Description:</label>
            <textarea name="p_desc" required style="width: 100%; margin-bottom: 15px; height: 80px;"></textarea>

            <label>Price (per unit):</label>
            <input type="number" name="p_price" step="0.01" required style="width: 100%; margin-bottom: 15px;">

            <label>Quantity in Stock:</label>
            <input type="number" name="p_qty" required style="width: 100%; margin-bottom: 15px;">

            <label>Farmer ID:</label>
            <input type="number" name="f_id" required style="width: 100%; margin-bottom: 20px;">

            <button type="submit" style="width: 100%; padding: 12px; background-color: #28a745; color: white; border: none; border-radius: 5px; cursor: pointer; font-weight: bold;">
                ADD TO STORE
            </button>
        </form>
    </div>

</body>
</html>