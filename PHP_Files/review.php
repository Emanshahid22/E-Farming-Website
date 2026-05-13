<?php
include("connect.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $order_id = $_POST['order_id'];
    $review_id = $_POST['review_id'];
    $comment = $_POST['comment'];
    $rating = $_POST['rating'];

    $sql = "INSERT INTO review (order_id, review_id, comment, rating) VALUES ('$order_id', '$review_id', '$comment', '$rating')";
    if (mysqli_query($conn, $sql)) {
        echo "Review added successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}


$reviews = [];
$result = mysqli_query($conn, "SELECT * FROM review");
while ($row = mysqli_fetch_assoc($result)) {
    $reviews[] = $row;
}


mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review Page</title>
    <link rel="stylesheet" href="review.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="login-container">
        <h1>Review Page</h1>
        <div class="review">
            <h2>User Reviews</h2>
            <?php foreach ($reviews as $review) : ?>
                <p><strong><?php echo htmlspecialchars($review['order_id']); ?>:</strong> <?php echo htmlspecialchars($review['comment']); ?></p>
            <?php endforeach; ?>
        </div>
        <div class="review-form">
            <h2>Add Your Review</h2>
            <form method="POST">
                <div class="input-container">
                    <label for="order_id">Order ID:</label>
                    <input type="text" id="order_id" name="order_id" required>
                </div>
                <div class="input-container">
                    <label for="comment">Comment:</label>
                    <textarea id="comment" name="comment" rows="4" required></textarea>
                </div>
                <div class="input-container">
                    <label for="rating">Rating:</label>
                    <input type="text" id="rating" name="rating" required>
                </div>
                <div class="input-container">
                    <label for="review_id">Review ID:</label>
                    <input type="text" id="review_id" name="review_id" required>
                </div>
                <div class="button-container">
                    <button type="submit" class="button">Submit Review</button>
                </div>
            </form>
        </div>
        <div class="button-container">
            <a href="login.php" class="button">Back to Login</a>
        </div>
    </div>
</body>
</html>
