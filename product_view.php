<?php
// Get the product name, image URL, and review from the URL
$product_name = $_GET['product'];
$image_url = $_GET['image'];
$rating = isset($_GET['rating']) ? $_GET['rating'] : 0;
$review = isset($_GET['review']) ? $_GET['review'] : '';

// If the form was submitted, update the rating and review
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $rating = $_POST['rating'];
    $review = $_POST['review'];

    // TODO: Save the new rating and review to the database

    // Redirect back to the same page with the new rating and review as query parameters
    header("Location: product_view.php?product=$product_name&image=$image_url&rating=$rating&review=$review");
    exit;
}

// Display the product name and image
echo "<h1>$product_name</h1>";
echo "<img src='$image_url' alt='$product_name'>";

// If the rating is zero, provide a form to rate and review the product
if ($rating == 0) {
    echo "
    <form action='product_view.php?product=$product_name&image=$image_url' method='post'>
        <input type='hidden' name='product' value='$product_name'>
        <label for='rating'>Rating:</label>
        <input type='number' id='rating' name='rating' min='1' max='5'>
        <label for='review'>Review:</label>
        <textarea id='review' name='review'></textarea>
        <input type='submit' value='Submit Review'>
    </form>
    ";
} else {
    // Otherwise, display the passed rating and review
    echo "<p>Rating: $rating/5</p>";
    if (!empty($review)) {
        echo "<p>Review: $review</p>";
    }
}
?>