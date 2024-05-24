<!DOCTYPE html>
<html>
<head>
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f4f4f4;
}

.container {
    width: 80%;
    margin: 0 auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0px 0px 20px 0px rgba(0,0,0,0.1);
}

.product-info {
    margin-bottom: 20px;
}

.product-info h2, .product-info p {
    margin: 0 0 10px 0;
}

.review-form {
    border-top: 1px solid #ddd;
    padding-top: 20px;
}

.review-form h3 {
    margin-top: 0;
}

.review-form label {
    display: block;
    margin-bottom: 5px;
}

.review-form input, .review-form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ddd;
}

.review-form input[type="submit"] {
    background-color: #333;
    color: #fff;
    cursor: pointer;
}

.review-form input[type="submit"]:hover {
    background-color: #444;
}

.user-review {
    border-top: 1px solid #ddd;
    padding: 10px 0;
    margin-top: 20px;
}

.user-review:first-child {
    border-top: none;
}

.user-review h3 {
    margin: 0 0 10px 0;
}

        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .product-info {
            background-color: #fff;
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .product-info h2 {
            margin-top: 0;
        }
        .review-form {
            margin-top: 20px;
        }
        .review-form input[type="number"] {
            width: 50px;
        }
        .rating {
            unicode-bidi: bidi-override;
            direction: rtl;
        }
        .rating > span {
            display: inline-block;
            position: relative;
            width: 1.1em;
        }
        .rating > span:hover,
        .rating > span:hover ~ span {
            color: transparent;
        }
        .rating > span:hover:before,
        .rating > span:hover ~ span:before {
           content: "\2605";
           position: absolute;
           color: gold;
        }
    </style>
    
</head>
<body>
    <div class="container">
        <div class="product-info">
        <?php
            $prodID = $_GET['prodID'];
            $prodCatName = $_GET['prodCatName'];

            echo "<h2>Product ID: " . $prodID . "</h2>";
            echo "<p>Product Name: " . $prodCatName . "</p>";

            if (isset($_POST['addtocart'])) {
              if (!isset($_COOKIE['loginid'])) {
                echo '<script>alert("Please log in to add this item to the cart")</script>';
              }
            }
            ?>

        </div>
        <div class="review-form">
            <h3>Submit your review</h3>
            <form onsubmit="submitReview(event)">
                <label for="rating">Rating (1-5):</label>
                <input type="number" id="rating" name="rating" min="1" max="5" required>
                <br>
                <label for="review">Review:</label>
                <textarea id="review" name="review" required></textarea>
                <br>
                <input type="submit" value="Submit">
            </form>
        </div>
        <div id="review-container"></div>
    </div>
</body>
</html>