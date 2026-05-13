<?php
include("connect.php");
$adminUsername = "eman";
$adminPassword = "eman123";
$errorMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $enteredUsername = $_POST["username"];
    $enteredPassword = $_POST["password"];

    if ($enteredUsername === $adminUsername && $enteredPassword === $adminPassword) {
        header("Location: indexAdmin.php");
        exit;
    } else {
        $errorMessage = "Invalid login credentials.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login | E-Farming</title>
    <link rel="stylesheet" href="admin.css?v=1.1"> <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

    <div class="login-card">
        <div class="login-header">
            <i class="fas fa-user-shield"></i>
            <h1>Admin Login</h1>
            <p>E-Farming Management Portal</p>
        </div>

        <?php if ($errorMessage): ?>
            <div class="error-msg"><?php echo $errorMessage; ?></div>
        <?php endif; ?>

        <form action="admin.php" method="POST">
            <div class="input-group">
                <label>Username</label>
                <input type="text" name="username" placeholder="Enter username" required>
            </div>

            <div class="input-group">
                <label>Password</label>
                <input type="password" name="password" placeholder="Enter password" required>
            </div>

            <button type="submit" class="login-btn">Login to Dashboard</button>
        </form>
    </div>

</body>
</html>