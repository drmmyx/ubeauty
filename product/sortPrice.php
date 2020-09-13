<?php
/* code by webdevtrick ( https://webdevtrick.com ) */
session_start();
$connect = mysqli_connect("localhost", "root", "", "ubeauty");

// If the user clicked the add to cart button on the product page we can check for the form data
if (isset($_POST['product_ID'], $_POST['quantity']) && is_numeric($_POST['product_ID']) && is_numeric($_POST['quantity'])) {
    // Set the post variables so we easily identify them, also make sure they are integer
    $product_id = (int)$_POST['product_ID'];
    $quantity = (int)$_POST['quantity'];
    // Prepare the SQL statement, we basically are checking if the product exists in our databaser
    $stmt = $pdo->prepare('SELECT * FROM products WHERE product_ID = ?');
    $stmt->execute([$_POST['product_ID']]);
    // Fetch the product from the database and return the result as an Array
    $product = $stmt->fetch(PDO::FETCH_ASSOC);
    // Check if the product exists (array is not empty)
    if ($product && $quantity > 0) {
        // Product exists in database, now we can create/update the session variable for the cart
        if (isset($_SESSION['cart']) && is_array($_SESSION['cart'])) {
            if (array_key_exists($product_ID, $_SESSION['cart'])) {
                // Product exists in cart so just update the quanity
                $_SESSION['cart'][$product_ID] += $quantity;
            } else {
                // Product is not in cart so add it
                $_SESSION['cart'][$product_ID] = $quantity;
            }
        } else {
            // There are no products in cart, this will add the first product to cart
            $_SESSION['cart'] = array($product_ID => $quantity);
        }
    }
    // Prevent form resubmission...
    header('location: sortPrice.php?page=cart');
    exit;
}

// Remove product from cart, check for the URL param "remove", this is the product id, make sure it's a number and check if it's in the cart
if (isset($_GET['remove']) && is_numeric($_GET['remove']) && isset($_SESSION['cart']) && isset($_SESSION['cart'][$_GET['remove']])) {
    // Remove the product from the shopping cart
    unset($_SESSION['cart'][$_GET['remove']]);
}

// Update product quantities in cart if the user clicks the "Update" button on the shopping cart page
if (isset($_POST['update']) && isset($_SESSION['cart'])) {
    // Loop through the post data so we can update the quantities for every product in cart
    foreach ($_POST as $k => $v) {
        if (strpos($k, 'quantity') !== false && is_numeric($v)) {
            $product_ID = str_replace('quantity-', '', $k);
            $quantity = (int)$v;
            // Always do checks and validation
            if (is_numeric($product_ID) && isset($_SESSION['cart'][$id]) && $quantity > 0) {
                // Update new quantity
                $_SESSION['cart'][$product_ID] = $quantity;
            }
        }
    }
    // Prevent form resubmission...
    header('location: sortPrice.php?page=cart');
    exit;
}

// Send the user to the place order page if they click the Place Order button, also the cart should not be empty
if (isset($_POST['placeorder']) && isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
    header('Location: sortPrice.php?page=placeorder');
    exit;
}

// Check the session variable for products in cart
$products_in_cart = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
$products = array();
$subtotal = 0.00;
// If there are products in cart
if ($products_in_cart) {
    // There are products in the cart so we need to select those products from the database
    // Products in cart array to question mark string array, we need the SQL statement to include IN (?,?,?,...etc)
    $array_to_question_marks = implode(',', array_fill(0, count($products_in_cart), '?'));
    $stmt = $pdo->prepare('SELECT * FROM products WHERE product_ID IN (' . $array_to_question_marks . ')');
    // We only need the array keys, not the values, the keys are the id's of the products
    $stmt->execute(array_keys($products_in_cart));
    // Fetch the products from the database and return the result as an Array
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);
    // Calculate the subtotal
    foreach ($products as $product) {
        $subtotal += (float)$product['product_Price'] * (int)$products_in_cart[$product['product_ID']];
    }
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Shopping Cart In PHP and MySql | Webdevtrick.com</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
    <br />
    <div class="container">
        <br />
        <br />
        <br />
        <h3 align="center">Shoping Cart With PHP And MySql | Source Code By <a href="https://webdevtrick.com">Webdevtrick.com</a></h3><br />
        <br /><br />
        <?php
        $query = "SELECT * FROM product ORDER BY product_ID ASC";
        $result = mysqli_query($connect, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
        ?>
                <div class="col-md-4">
                    <form method="post" action="sortPrice.php?action=add&product_ID=<?php echo $row["product_ID"]; ?>">
                        <div style="border:3px solid #5cb85c; background-color:whitesmoke; border-radius:5px; padding:16px;" align="center">
                            <img src="<?php echo $row["product_Image"]; ?>" class="img-responsive" /><br />

                            <h4 class="text-info"><?php echo $row["product_Name"]; ?></h4>

                            <h4 class="text-danger">$ <?php echo $row["product_Price"]; ?></h4>

                            <input type="text" name="quantity" value="1" class="form-control" />

                            <input type="hidden" name="hidden_name" value="<?php echo $row["product_Name"]; ?>" />

                            <input type="hidden" name="hidden_price" value="<?php echo $row["product_Price"]; ?>" />

                            <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

                        </div>
                    </form>
                </div>
        <?php
            }
        }
        ?>


        <div class="cart content-wrapper">
            <h1>Shopping Cart</h1>
            <form action="index.php?page=cart" method="post">
                <table>
                    <thead>
                        <tr>
                            <td colspan="2">Product</td>
                            <td>Price</td>
                            <td>Quantity</td>
                            <td>Total</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (empty($products)) : ?>
                            <tr>
                                <td colspan="5" style="text-align:center;">You have no products added in your Shopping Cart</td>
                            </tr>
                        <?php else : ?>
                            <?php foreach ($products as $product) : ?>
                                <tr>
                                    <td class="img">
                                        <a href="index.php?page=product&product_ID=<?= $product['product_ID'] ?>">
                                            <img src="<?= $product['product_Image'] ?>" width="50" height="50" alt="<?= $product['product_Name'] ?>">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="index.php?page=product&product_ID=<?= $product['product_ID'] ?>"><?= $product['product_Name'] ?></a>
                                        <br>
                                        <a href="index.php?page=cart&remove=<?= $product['product_ID'] ?>" class="remove">Remove</a>
                                    </td>
                                    <td class="price">&dollar;<?= $product['product_Price'] ?></td>
                                    <td class="quantity">
                                        <input type="number" name="quantity-<?= $product['product_ID'] ?>" value="<?= $products_in_cart[$product['product_ID']] ?>" min="1" max="<?= $product['product_Qty'] ?>" placeholder="Quantity" required>
                                    </td>
                                    <td class="price">&dollar;<?= $product['product_Price'] * $products_in_cart[$product['product_ID']] ?></td>
                                </tr>
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </tbody>
                </table>
                <div class="subtotal">
                    <span class="text">Subtotal</span>
                    <span class="price">&dollar;<?= $subtotal ?></span>
                </div>
                <div class="buttons">
                    <input type="submit" value="Update" name="update">
                    <input type="submit" value="Place Order" name="placeorder">
                </div>
            </form>
        </div>


    </div>
    <br />
</body>

</html>