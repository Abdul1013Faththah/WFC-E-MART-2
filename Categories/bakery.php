<?php

declare(strict_types=1);

require_once '../Includes/dbh.inc.php';
require_once '../Includes/config_session.inc.php';

function getBakeryProducts(object $pdo) {
    $query = "SELECT * FROM products WHERE category = 'bakery'";
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

$products = getBakeryProducts($pdo);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakery Products</title>
    <script src="https://kit.fontawesome.com/b262aa5062.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet"  type="text/css" href="../CSS/bakery.css"/>
</head>
<body>

    <?php include '../Includes/header.php'; ?>

    <div class="heading">
        <h1>bakery</h1>
        <p><a href="../User pages/home.php">home >></a> <a href="../User pages/all-products.php">products >></a>category >> bakery</p>
    </div>

    <section class="category">

            <h1 class="title">bakery <span> category </span></h1>

            <div class="box-container">

                <a href="../Categories/bread.php" class="box">
                    <img src="../Images/Icons/white-bread.png" alt="">
                    <h3>bread</h3>
                </a>
                <a href="../Categories/bun.php" class="box">
                    <img src="../Images/Icons/hot-cross-buns.png" alt="" >
                    <h3>bun</h3>
                </a>
                <a href="../Categories/savoury.php" class="box">
                    <img src="../Images/Icons/cheese.png" alt="">
                    <h3>savoury</h3>
                </a>

            </div>
            
        </section>

    <section class="products" style="margin-bottom: 10vh;">

        <div class="product-header">
            <h1 class="title">bakery <span> products </span></h1>
            <div class="sort">
                <div class="collection-sort">
                    <label for="sort-by">Sort by:</label>
                        <select id="sort-by">
                            <option value="default">Default</option>
                            <option value="brand">Brand</option>
                            <option value="price-low-high">Price: Low to High</option>
                            <option value="price-high-low">Price: High to Low</option>
                        </select>
                </div>
            </div>
        </div> 

        <div class="box-container">
            <?php foreach ($products as $product): ?>
                <div class="box">
                    <div class="icons">
                        <a href="../User pages/cart.php" class="fas fa-shopping-cart"></a>
                        <a href="../User pages/wishlist.php" class="fas fa-heart"></a>
                        <a href="../User pages/product.php" class="fas fa-eye"></a>
                    </div>
                    <div class="image">
                        <img src="<?php echo $product['image_url']; ?>" alt="">
                    </div>
                    <div class="content">
                        <h3><?php echo $product['product_name']; ?></h3>
                        <div class="price"><?php echo "Rs " . $product['price'] . "/-"; ?></div>

                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>


    <?php include '../Includes/footer.php'; ?>

    <script src="../JavaScript/nav-menu.js"></script>

</body>
</html>
