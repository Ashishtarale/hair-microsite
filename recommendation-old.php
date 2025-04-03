<?php
// Get user responses from URL parameters
$name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : "User";
$gender = isset($_GET['gender']) ? htmlspecialchars($_GET['gender']) : "Unknown";
$hair_type = isset($_GET['hair_type']) ? htmlspecialchars($_GET['hair_type']) : "Unknown";
$hair_issues = isset($_GET['hair_issues']) ? htmlspecialchars($_GET['hair_issues']) : "None";

// Define product recommendations based on hair concerns & gender
$recommendations = [];

if (strpos($hair_issues, "Hair fall") !== false) {
    $recommendations[] = [
        "name" => ($gender === "Male") ? "Men's Anti-Dandruff Shampoo" : "Women's Anti-Dandruff Shampoo",
        "image" => "https://m.media-amazon.com/images/I/617uT8J1C9L.jpg",
        "description" => "A gentle shampoo with tea tree oil to reduce flakes.",
        "link" => "https://example.com/dandruff-shampoo"
    ];
}

if (strpos($hair_issues, "Slight hairline recession") !== false) {
    $recommendations[] = [
        "name" => ($gender === "Male") ? "Men's Hair Growth Serum" : "Women's Hair Growth Serum",
        "image" => "https://4.bp.blogspot.com/_p0BfrmcXgSY/TQfvbAj-oxI/AAAAAAAADEw/f7aUC7MWSdg/s1600/Sun.jpg",
        "description" => "Contains biotin and keratin to strengthen hair roots.",
        "link" => "https://example.com/hair-growth-serum"
    ];
}

if (strpos($hair_issues, "Deepening hairline recession") !== false) {
    $recommendations[] = [
        "name" => ($gender === "Male") ? "Men's Moisturizing Hair Mask" : "Women's Moisturizing Hair Mask",
        "image" => "https://m.media-amazon.com/images/I/617uT8J1C9L.jpg",
        "description" => "Deep conditioning treatment with shea butter.",
        "link" => "https://example.com/hair-mask"
    ];
}

if (strpos($hair_issues, "Thinning or balding on the crown area") !== false) {
    $recommendations[] = [
        "name" => ($gender === "Male") ? "Men's Oil-Control Scalp Scrub" : "Women's Oil-Control Scalp Scrub",
        "image" => "https://m.media-amazon.com/images/I/617uT8J1C9L.jpg",
        "description" => "Balances scalp oil and removes buildup.",
        "link" => "https://example.com/scalp-scrub"
    ];
}

if (strpos($hair_issues, "Scalp visibility with thinning at temples & crown") !== false) {
    $recommendations[] = [
        "name" => ($gender === "Male") ? "Men's Oil-Control Scalp Scrub" : "Women's Oil-Control Scalp Scrub",
        "image" => "https://m.media-amazon.com/images/I/617uT8J1C9L.jpg",
        "description" => "Balances scalp oil and removes buildup.",
        "link" => "https://example.com/scalp-scrub"
    ];
}

if (strpos($hair_issues, "Dominant bald patches with visible scalp") !== false) {
    $recommendations[] = [
        "name" => ($gender === "Male") ? "Men's Oil-Control Scalp Scrub" : "Women's Oil-Control Scalp Scrub",
        "image" => "https://m.media-amazon.com/images/I/617uT8J1C9L.jpg",
        "description" => "Balances scalp oil and removes buildup.",
        "link" => "https://example.com/scalp-scrub"
    ];
}

// If no specific issues were selected, provide general recommendation
if (empty($recommendations)) {
    $recommendations[] = [
        "name" => "Balanced Hair Care Kit",
        "image" => "https://m.media-amazon.com/images/I/617uT8J1C9L.jpg",
        "description" => "A complete set for overall hair health.",
        "link" => "https://example.com/hair-care-kit"
    ];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recommended Hair Care Products</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
        }
        .products {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            margin-top: 20px;
            justify-content: center;
        }
        .product {
            background: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }
        .product h3 {
            color: #007bff;
        }
        img {
            width: 100%;
            max-width: 200px;
            height: auto;
        }
        .product p {
            color: #333;
        }
        .product a {
            display: block;
            margin-top: 10px;
            text-decoration: none;
            color: white;
            background: #007bff;
            padding: 8px;
            border-radius: 5px;
        }
        .product a:hover {
            background: #0056b3;
        }
        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn:hover {
            background: #218838;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Thank You, <?php echo $name; ?>!</h2>
        <p>Based on your responses, we recommend the following hair care products:</p>

        <div class="products">
            <?php foreach ($recommendations as $product) { ?>
                <div class="product">
                    <h3><?php echo $product["name"]; ?></h3>
                    <img src="<?php echo $product["image"]; ?>" alt="">
                    <p><?php echo $product["description"]; ?></p>
                    <a href="<?php echo $product["link"]; ?>" target="_blank">View Product</a>
                </div>
            <?php } ?>
        </div>

        <a href="index.html" class="btn">Go Back to Home</a>
        <a href="steps-form.html" class="btn">Reset / Re-Test</a>
    </div>
</body>
</html>
