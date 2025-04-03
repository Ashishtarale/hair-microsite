<?php
// Get user responses from URL parameters
$name = filter_input(INPUT_GET, 'name', FILTER_SANITIZE_STRING) ?? "User";
$gender = filter_input(INPUT_GET, 'gender', FILTER_SANITIZE_STRING) ?? "Unknown";
$hair_issues = filter_input(INPUT_GET, 'hair_issues', FILTER_SANITIZE_STRING) ?? "None";

// Define product recommendations based on hair concerns and gender
$products = [
    "Hair fall" => [
        "Male" => [
            [
                "name" => "Men's 360° Hair Regrowth Drip",
                "image" => "https://eterneclinic.com/assets/img/hair-regrowth-drip/hair-regrowth-drip-image.webp",
                "description" => "Reduces hair fall and nourishes roots for men.",
                "link" => "https://eterneclinic.com/hair-regrowth-drip.html"
            ]
        ],
        "Female" => [
            [
                "name" => "Women's 360° Hair Regrowth Drip",
                "image" => "https://eterneclinic.com/assets/img/hair-regrowth-drip/hair-regrowth-drip-image.webp",
                "description" => "Reduces hair fall and nourishes roots for women.",
                "link" => "https://eterneclinic.com/hair-regrowth-drip.html"
            ]
        ]
    ],
    "Slight hairline recession" => [
        "Male" => [
            [
                "name" => "Men's Hair GFC",
                "image" => "https://eterneclinic.com/assets/img/hair-lp-test/hair-gfc.webp",
                "description" => "Contains biotin and keratin to strengthen hair roots.",
                "link" => "https://eterneclinic.com/gfc-treatment.html"
            ],
            [
                "name" => "Men's Hair PRP",
                "image" => "https://eterneclinic.com/assets/img/hair-lp-test/eterne-signature-prp-men.webp",
                "description" => "Contains biotin and keratin to strengthen hair roots.",
                "link" => "https://eterneclinic.com/eterne-classic-prp-treatment.html"
            ],
            [
                "name" => "Men's QR678",
                "image" => "https://eterneclinic.com/assets/img/hair-lp-test/QR678.webp",
                "description" => "Contains biotin and keratin to strengthen hair roots.",
                "link" => "https://eterneclinic.com/qr-678-treatment.html"
            ],
            [
                "name" => "Men's Microneedling",
                "image" => "https://eterneclinic.com/assets/img/treatment/hair/male-hair-loss/mesomelt-infusion.webp",
                "description" => "Contains biotin and keratin to strengthen hair roots.",
                "link" => "https://eterneclinic.com/meso-melt-infusion-hair-treatments.html"
            ],
        ],
        "Female" => [
            [
                "name" => "Women's Hair GFC",
                "image" => "https://eterneclinic.com/assets/img/treatment/hair/female-hair-loss/hair-gfc.webp",
                "description" => "Contains biotin and keratin to strengthen hair roots.",
                "link" => "https://eterneclinic.com/gfc-treatment.html"
            ],
            [
                "name" => "Women's Hair PRP",
                "image" => "https://eterneclinic.com/assets/img/treatment/hair/female-hair-loss/prp.webp",
                "description" => "Contains biotin and keratin to strengthen hair roots.",
                "link" => "https://eterneclinic.com/eterne-classic-prp-treatment.html"
            ],
            [
                "name" => "Women's QR678",
                "image" => "https://eterneclinic.com/assets/img/concerns/hair/cover-page-678.webp",
                "description" => "Contains biotin and keratin to strengthen hair roots.",
                "link" => "https://eterneclinic.com/qr-678-treatment.html"
            ],
            [
                "name" => "Women's Microneedling",
                "image" => "https://eterneclinic.com/assets/img/treatment/hair/female-hair-loss/mesomelt-infusion.webp",
                "description" => "Contains biotin and keratin to strengthen hair roots.",
                "link" => "https://eterneclinic.com/meso-melt-infusion-hair-treatments.html"
            ],
        ]
    ],
    "Deepening hairline recession" => [
        "Male" => [
            [
                "name" => "Men's Hair GFC",
                "image" => "https://eterneclinic.com/assets/img/hair-lp-test/hair-gfc.webp",
                "description" => "Contains biotin and keratin to strengthen hair roots.",
                "link" => "https://eterneclinic.com/gfc-treatment.html"
            ],
            [
                "name" => "Men's Hair PRP",
                "image" => "https://eterneclinic.com/assets/img/hair-lp-test/eterne-signature-prp-men.webp",
                "description" => "Contains biotin and keratin to strengthen hair roots.",
                "link" => "https://eterneclinic.com/eterne-classic-prp-treatment.html"
            ],
            [
                "name" => "Men's QR678",
                "image" => "https://eterneclinic.com/assets/img/hair-lp-test/QR678.webp",
                "description" => "Contains biotin and keratin to strengthen hair roots.",
                "link" => "https://eterneclinic.com/qr-678-treatment.html"
            ],
            [
                "name" => "Men's Microneedling",
                "image" => "https://eterneclinic.com/assets/img/treatment/hair/male-hair-loss/mesomelt-infusion.webp",
                "description" => "Contains biotin and keratin to strengthen hair roots.",
                "link" => "https://eterneclinic.com/meso-melt-infusion-hair-treatments.html"
            ],
        ],
        "Female" => [
            [
                "name" => "Women's Hair GFC",
                "image" => "https://eterneclinic.com/assets/img/treatment/hair/female-hair-loss/hair-gfc.webp",
                "description" => "Contains biotin and keratin to strengthen hair roots.",
                "link" => "https://eterneclinic.com/gfc-treatment.html"
            ],
            [
                "name" => "Women's Hair PRP",
                "image" => "https://eterneclinic.com/assets/img/treatment/hair/female-hair-loss/prp.webp",
                "description" => "Contains biotin and keratin to strengthen hair roots.",
                "link" => "https://eterneclinic.com/eterne-classic-prp-treatment.html"
            ],
            [
                "name" => "Women's QR678",
                "image" => "https://eterneclinic.com/assets/img/concerns/hair/cover-page-678.webp",
                "description" => "Contains biotin and keratin to strengthen hair roots.",
                "link" => "https://eterneclinic.com/qr-678-treatment.html"
            ],
            [
                "name" => "Women's Microneedling",
                "image" => "https://eterneclinic.com/assets/img/treatment/hair/female-hair-loss/mesomelt-infusion.webp",
                "description" => "Contains biotin and keratin to strengthen hair roots.",
                "link" => "https://eterneclinic.com/meso-melt-infusion-hair-treatments.html"
            ],
        ]
    ],
    "Thinning or balding on the crown area" => [
        "Male" => [
            [
                "name" => "Men's Au-xosomes",
                "image" => "https://eterneclinic.com/assets/img/hair-lp-test/au-xosomes.webp",
                "description" => "Contains biotin and keratin to strengthen hair roots.",
                "link" => "https://eterneclinic.com/au-exosomes.html"
            ],
            [
                "name" => "Men's COMBAT98",
                "image" => "https://eterneclinic.com/assets/img/hair-lp-test/combat.webp",
                "description" => "Contains biotin and keratin to strengthen hair roots.",
                "link" => "https://eterneclinic.com/combat-ninety-eight-anti-dht-hair-treatment-nt.html"
            ],
            [
                "name" => "Men's QR678",
                "image" => "https://eterneclinic.com/assets/img/hair-lp-test/QR678.webp",
                "description" => "Contains biotin and keratin to strengthen hair roots.",
                "link" => "https://eterneclinic.com/qr-678-treatment.html"
            ],
            [
                "name" => "Men's FAAST",
                "image" => "https://eterneclinic.com/assets/img/hair-lp-test/faast-long-hair-transplant-men.webp",
                "description" => "Contains biotin and keratin to strengthen hair roots.",
                "link" => "https://eterneclinic.com/faast-fue-hair-transplant.html"
            ],
        ],
        "Female" => [
            [
                "name" => "Women's Au-xosomes",
                "image" => "https://eterneclinic.com/assets/img/hair-lp-dem/auxosomes-hair-women.webp",
                "description" => "Contains biotin and keratin to strengthen hair roots.",
                "link" => "https://eterneclinic.com/au-exosomes.html"
            ],
            [
                "name" => "Women's COMBAT98",
                "image" => "https://eterneclinic.com/assets/img/hair-lp-dem/combat-hair-women.webp",
                "description" => "Contains biotin and keratin to strengthen hair roots.",
                "link" => "https://eterneclinic.com/combat-ninety-eight-anti-dht-hair-treatment-nt.html"
            ],
            [
                "name" => "Women's QR678",
                "image" => "https://eterneclinic.com/assets/img/hair-lp-dem/QR678-women.webp",
                "description" => "Contains biotin and keratin to strengthen hair roots.",
                "link" => "https://eterneclinic.com/qr-678-treatment.html"
            ],
            [
                "name" => "Women's FAAST",
                "image" => "https://eterneclinic.com/assets/img/hair-lp-dem/faast-long-hair-women.webp",
                "description" => "Contains biotin and keratin to strengthen hair roots.",
                "link" => "https://eterneclinic.com/faast-no-shave-long-hair-fue-hair-transplant.html"
            ],
        ]
    ],
    "Scalp visibility with thinning at temples & crown" => [
        "Male" => [
            [
                "name" => "Men's Au-xosomes",
                "image" => "https://eterneclinic.com/assets/img/hair-lp-test/au-xosomes.webp",
                "description" => "Contains biotin and keratin to strengthen hair roots.",
                "link" => "https://eterneclinic.com/au-exosomes.html"
            ],
            [
                "name" => "Men's COMBAT98",
                "image" => "https://eterneclinic.com/assets/img/hair-lp-test/combat.webp",
                "description" => "Contains biotin and keratin to strengthen hair roots.",
                "link" => "https://eterneclinic.com/combat-ninety-eight-anti-dht-hair-treatment-nt.html"
            ],
            [
                "name" => "Men's QR678",
                "image" => "https://eterneclinic.com/assets/img/hair-lp-test/QR678.webp",
                "description" => "Contains biotin and keratin to strengthen hair roots.",
                "link" => "https://eterneclinic.com/qr-678-treatment.html"
            ],
            [
                "name" => "Men's FAAST",
                "image" => "https://eterneclinic.com/assets/img/hair-lp-test/faast-long-hair-transplant-men.webp",
                "description" => "Contains biotin and keratin to strengthen hair roots.",
                "link" => "https://eterneclinic.com/faast-fue-hair-transplant.html"
            ],
        ],
        "Female" => [
            [
                "name" => "Women's Au-xosomes",
                "image" => "https://eterneclinic.com/assets/img/hair-lp-dem/auxosomes-hair-women.webp",
                "description" => "Contains biotin and keratin to strengthen hair roots.",
                "link" => "https://eterneclinic.com/au-exosomes.html"
            ],
            [
                "name" => "Women's COMBAT98",
                "image" => "https://eterneclinic.com/assets/img/hair-lp-dem/combat-hair-women.webp",
                "description" => "Contains biotin and keratin to strengthen hair roots.",
                "link" => "https://eterneclinic.com/combat-ninety-eight-anti-dht-hair-treatment-nt.html"
            ]
        ]
    ],
    "Dominant bald patches with visible scalp" => [
        "Male" => [
            [
                "name" => "Men's FAAST",
                "image" => "https://eterneclinic.com/assets/img/hair-lp-test/hair-transpalant-men.webp",
                "description" => "Contains biotin and keratin to strengthen hair roots.",
                "link" => "https://eterneclinic.com/faast-no-shave-long-hair-fue-hair-transplant.html"
            ],
        ],
        "Female" => [
            [
                "name" => "Women's FAAST",
                "image" => "https://eterneclinic.com/assets/img/hair-lp-dem/faast-long-hair-women.webp",
                "description" => "Contains biotin and keratin to strengthen hair roots.",
                "link" => "https://eterneclinic.com/faast-no-shave-long-hair-fue-hair-transplant.html"
            ],
        ]
    ],
    
];

// Generate recommendations based on hair issues and gender
$recommendations = [];
$uniqueProducts = []; // To track unique product names

foreach ($products as $issue => $genderBasedProducts) {
    if (strpos($hair_issues, $issue) !== false) {
        if (isset($genderBasedProducts[$gender])) {
            foreach ($genderBasedProducts[$gender] as $product) {
                // Ensure the product is unique
                if (!in_array($product['name'], $uniqueProducts)) {
                    $recommendations[] = $product;
                    $uniqueProducts[] = $product['name'];
                }
            }
        }
    }
}

// Shuffle to randomize order
shuffle($recommendations);

// Limit to 4 unique recommendations
$recommendations = array_slice($recommendations, 0, 4);

// If no recommendations, provide a general recommendation
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
    <link href="assets/css/themify-icons.css" rel="stylesheet">
    <link href="assets/css/flaticon.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/owl.carousel.css" rel="stylesheet">
    <link href="assets/css/owl.theme.css" rel="stylesheet">
    <link href="assets/css/slick.css" rel="stylesheet">
    <link href="assets/css/slick-theme.css" rel="stylesheet">
    <link href="assets/css/swiper.min.css" rel="stylesheet">
    <link href="assets/css/owl.transitions.css" rel="stylesheet">
    <link href="assets/css/jquery.fancybox.css" rel="stylesheet">
    <link href="assets/css/odometer-theme-default.css" rel="stylesheet">
    <link href="assets/sass/style.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

    <title>Recommended Hair Care Products</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
        }
        .container{
            margin: 100px auto;
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
            color: #1a1729;
        }
        img {
            width: 100%;
            max-width: 280px;
            height: auto;
            margin: 20px auto;
        }
        .product h5.title{
            font-size: 20px;
        }
        .product p {
            color: #333;
        }
        .product a {
            display: block;
            margin-top: 10px;
            text-decoration: none;
            color: white;
            background: #c3b287;
            padding: 8px;
            border-radius: 5px;
        }
        .product a:hover {
            background: #a7966a;
        }
        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background:#4b4b4b;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .btn:hover {
            color: white;
            background:rgb(63, 61, 61);
        }
    </style>
</head>
<body>
    <div class="container ">
        <h2>Thank You, <?php echo htmlspecialchars($name); ?>!</h2>
        <p>Based on your responses, we recommend the following hair care products:</p>
        <div class="products">
            <?php foreach ($recommendations as $product) { ?>
                <div class="product">
                    <h5 class="title"><?php echo htmlspecialchars($product["name"]); ?></h5>
                    <img src="<?php echo htmlspecialchars($product["image"]); ?>" alt="">
                    <p><?php echo htmlspecialchars($product["description"]); ?></p>
                    <a href="<?php echo htmlspecialchars($product["link"]); ?>" target="_blank">View Product</a>
                </div>
            <?php } ?>
        </div>

        <a href="index.html" class="btn">Go Back to Home</a>
        <a href="steps-form.html" class="btn">Reset / Re-Test</a>
    </div>

<!-- All JavaScript files
================================================== -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.bundle.min.js"></script>
<!-- Plugins for this template -->
<script src="assets/js/modernizr.custom.js"></script>
<script src="assets/js/jquery-plugin-collection.js"></script>
<!-- Custom script for this template -->
<script src="assets/js/script.js"></script>
<script src="assets/js/hair-test.js"></script>

<script>
    window.addEventListener("load", function() {
    if (performance.navigation.type === 1) {
        // Redirect to home page on refresh
        window.location.href = "index.html"; // Change to your home page URL
        }
    });

    window.addEventListener("popstate", function () {
        window.location.href = "index.html"; // Replace with your home page URL
    });


</script>

</body>
</html>
