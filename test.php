<?php
include('dbconfig.php');

if (isset($_POST['search'])) {
    $search = $_POST['search'];
    $search = preg_replace("#[^0-9a-z]#i", "", $search);
    $searchoriginal = $search;
    $search = strtolower($search);
    $search = trim($search);
    $search = strval($search);

    //$search = explode("", $search);
    //$countsearchterms = count($search);

    $query = mysqli_query("$conn", "SELECT * FROM product WHERE product_Name LIKE '%$search%' OR product_Brand LIKE '%$search%' ") or die("could not search!");
    $count = mysqli_num_rows($query);
    if ($count == 0) {
        $output = 'There was no search results!';
    } else {
        while ($row = mysqli_fetch_array($query)) {
            // $pname = $row['product_Name'];
            // $pbrand = $row['product_Brand'];
            // $id = $row['product_ID'];

            // $output .= '<div>' . $pname . '' . $pbrand . '</div>';
            echo '<div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                <div class="block-4 text-center border">
                  <figure class="block-4-image">
                    <a href="product.php?product_ID=' . $row['product_ID'] . '"><img style="width:238px; height:151px;" src="' . $row['product_Image'] . '" alt="Image placeholder" class="img-fluid"></a>
                  </figure>
                  <div class="block-4-text p-4" style="width:238px; height:150px;">
                    <h3><a href="">' . $row['product_Brand'] . '</a></h3>
                    <p class="mb-0" >' . $row['product_Name'] . '</p>
                    <p class="text-primary font-weight-bold">RM' . $row['product_Price'] . '</p>
                  </div>
                </div>
              </div>';
        }
    }
}
?>
<form action="" method="POST" class="site-block-top-search">
    <span class="icon icon-search2"></span>
    <input type="text" name="search" class="form-control border-0" placeholder="Search">
</form>

<?php
session_start();
include('dbconfig.php');
error_reporting(0);
?>
<?php
// if (isset($_POST["add_to_cart"])) {
//     if (isset($_SESSION["shopping_cart"])) {
//         $item_array_id = array_column($_SESSION["shopping_cart"], "product_ID");
//         if (!in_array($_GET["product_ID"], $item_array_id)) {
//             $count = count($_SESSION["shopping_cart"]);
//             $item_array = array(
//                 'product_ID'              =>    $_GET["product_ID"],
//                 'product_Name'            =>    $_POST["product_Name"],
//                 'product_Price'           =>    $_POST["product_Price"],
//                 'product_Quantity'        =>    $_POST["num"]
//             );
//             $_SESSION["shopping_cart"][$count] = $item_array;
//         } else {
//             echo '<script>alert("Item Already Added")</script>';
//         }
//     } else {
//         $item_array = array(
//             'product_ID'              =>    $_GET["product_ID"],
//             'product_Name'            =>    $_POST["product_Name"],
//             'product_Price'           =>    $_POST["product_Price"],
//             'product_Quantity'        =>    $_POST["num"]
//         );
//         $_SESSION["shopping_cart"][0] = $item_array;
//     }
// }

// if (isset($_GET["action"])) {
//     if ($_GET["action"] == "delete") {
//         foreach ($_SESSION["shopping_cart"] as $keys => $values) {
//             if ($values["item_id"] == $_GET["id"]) {
//                 unset($_SESSION["shopping_cart"][$keys]);
//                 echo '<script>alert("Item Removed")</script>';
//                 echo '<script>window.location="cart.php"</script>';
//             }
//         }
//     }
// }
// if (!empty($_GET["action"])) {
//     switch ($_GET["action"]) {
//             // 2. adding products to shopping cart
//         case "add":
//             if (!empty($_POST["quantity"])) {
//                 $productByCode = $conn->query("SELECT * FROM product WHERE product_ID='" . $_GET["product_ID"] . "'");
//                 $itemArray = array($productByCode[0]["product_ID"] => array('product_Name' => $productByCode[0]["product_Name"], 'product_ID' => $productByCode[0]["product_ID"], 'quantity' => $_POST["quantity"], 'product_Price' => $productByCode[0]["product_Price"], 'product_Image' => $productByCode[0]["product_Image"]));

//                 if (!empty($_SESSION["cart_item"])) {
//                     if (in_array($productByCode[0]["product_ID"], array_keys($_SESSION["cart_item"]))) {
//                         foreach ($_SESSION["cart_item"] as $k => $v) {
//                             if ($productByCode[0]["product_ID"] == $k) {
//                                 if (empty($_SESSION["cart_item"][$k]["quantity"])) {
//                                     $_SESSION["cart_item"][$k]["quantity"] = 0;
//                                 }
//                                 $_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
//                             }
//                         }
//                     } else {
//                         $_SESSION["cart_item"] = array_merge($_SESSION["cart_item"], $itemArray);
//                     }
//                 } else {
//                     $_SESSION["cart_item"] = $itemArray;
//                 }
//             }
//             break;
//             //--------------------------------------------------------------------------------------
//             //4. removing or clearing cart item--------------------------------------------------------
//         case "remove":
//             if (!empty($_SESSION["cart_item"])) {
//                 foreach ($_SESSION["cart_item"] as $k => $v) {
//                     if ($_GET["code"] == $k)
//                         unset($_SESSION["cart_item"][$k]);
//                     if (empty($_SESSION["cart_item"]))
//                         unset($_SESSION["cart_item"]);
//                 }
//             }
//             break;
//         case "empty":
//             unset($_SESSION["cart_item"]);
//             break;
//             //--------------------------------------------------------------------------------
//     }
// }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Body Breakfast Intensive Lip Mask</title>
    <link rel="shortcut icon" type="image/jpeg" href="image/logo1.jpeg">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    <style>
        .checked {
            color: orange;
        }
    </style>
</head>

<body>

    <div class="site-wrap">
        <?php include 'header.php'; ?>
        <?php
        $id = $_GET['product_ID'];
        $sql = "SELECT * FROM `product` WHERE product_ID=$id";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {

        ?>

                <div class=" bg-light py-3">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black"><?php echo $row['product_Name'] ?></strong></div>
                        </div>
                    </div>
                </div>

                <div class="site-section">
                    <div class="container">
                        <form method="post" action="product.php?action=add&product_ID=<?php echo $row['product_ID']; ?> >
                        <div class=" row">
                            <div class="col-md-6">
                                <img name="product_Image" src="<?php echo $row['product_Image']; ?>" alt="Image" class="img-fluid">
                            </div>
                            <div class="col-md-6">
                                <h3 style="font-family:Bernard MT Condensed; color:gray;"><?php echo $row['product_Brand']; ?></h3>
                                <h2 style="font-family:Bernard MT Condensed;" class="text-black"><?php echo $row['product_Name'] . $row['product_Package']; ?></h2>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star "></span>
                                <span class="fa fa-star "></span>
                                <p style="font-size:21px;font-family:Eras Medium ITC;" class="mb-4"><?php echo $row['product_Description']; ?>
                                    <hr>
                                </p>
                                <p class="text-primary h4">RM<?php echo $row['product_Price']; ?></p>
                                <input type="hidden" name="name" value="<?php echo $row["product_Name"]; ?>" />
                                <input type="hidden" name="price" value="<?php echo $row["product_Price"]; ?>" />
                                <!-- <input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" /> -->
                                <div class="mb-5">
                                    <div class="input-group mb-3" style="max-width: 120px;">
                                        <div class="input-group-prepend">
                                            <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                                        </div>
                                        <input name="num" type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                                        </div>
                                    </div>

                                </div>
                                <p><a href="cart.php" class="buy-now btn btn-sm btn-primary" value="add_to_cart">Add To Cart</a>
                                    <th><a href="wishlist.php" class="buy-now btn btn-sm btn-outline-primary"><i class="fa fa-heart-o"></i> Wishlist</a></th>
                                </p>
                            </div>
                    </div>
                    </form>
                </div>

    </div>

<?php
            }
        } else {
            echo "0 results";
        }

?>
<!-- <div id="shopping-cart">
    <div class="txt-heading">Shopping Cart</div>

    <a id="btnEmpty" href="product.php?action=empty">Empy Cart</a>
    <?php
    // if (isset($_SESSION["cart_item"])) {
    //     $total_quantity = "0";
    //     $total_price = "0";
    ?>
        <table class="tbl-cart" cellpadding="10" cellspacing="1">
            <tbody>
                <tr>
                    <th style="text-align:left;">Name</th>
                    <th style="text-align:left;">Code</th>
                    <th style="text-align:right;" width="5%">Quantity</th>
                    <th style="text-align:right;" width="10%">Unit Price</th>
                    <th style="text-align:right;" width="10%">Price</th>
                    <th style="text-align:center;" width="5%">Remove</th>
                </tr>
                <?php
                // foreach ($_SESSION["cart_item"] as $item) {
                //     $item_price = $item["quantity"] * $item["price"];
                ?>
                    <tr>
                        <td><img src="<?php echo $item["image"]; ?>" class="cart-item-image" /><?php echo $item["name"]; ?></td>
                        <td><?php echo $item["code"]; ?></td>
                        <td style="text-align:right;"><?php echo $item["quantity"]; ?></td>
                        <td style="text-align:right;"><?php echo "$ " . $item["price"]; ?></td>
                        <td style="text-align:right;"><?php echo "$ " . number_format($item_price, 2); ?></td>
                        <td style="text-align:center;"><a href="index.php?action=remove&code=<?php echo $item["code"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
                    </tr>
                <?php
                    // $total_quantity += $item["quantity"];
                    // $total_price += ($item["price"] * $item["quantity"]);
                }
                ?>

                <tr>
                    <td colspan="2" align="right">Total:</td>
                    <td align="right"><?php echo $total_quantity; ?></td>
                    <td align="right" colspan="2"><strong><?php echo "$ " . number_format($total_price, 2); ?></strong></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    <?php
    // } else {
    ?>
        <div class="no-records">Your Cart is Empty</div>
    <?php
    }
    ?>

</div> -->
<!-- <?php
        // if (!empty($_SESSION["shopping_cart"])) {
        //     $total = 0;
        //     foreach ($_SESSION["shopping_cart"] as $keys => $values) {
        ?>
        <tr>
            <td class="product-thumbnail">
                <img src="<?php echo $values["product_Image"]; ?>" alt="Image" class="img-fluid">
            </td>
            <td class="product-name">
                <h2 class="h5 text-black"><?php echo $values["product_Name"]; ?></h2>
            </td>
            <td><?php echo $values["product_Price"]; ?></td>
            <td>
                <div class="input-group mb-3" style="max-width: 120px;">
                    <div class="input-group-prepend">
                        <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                    </div>
                    <input type="text" class="form-control text-center" value="<?php echo $values["product_quantity"]; ?>" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                    </div>
                </div>

            </td>
            <td><?php echo number_format($values["quantity_Quantity"] * $values["product_Price"], 2); ?></td>
            <td><a href="cart.php?action=delete&product_ID=<?php echo $value["product_ID"]; ?>" class="btn btn-primary btn-sm">X</a></td>
        </tr>
    <?php
                $total = $total + ($value["product_Quantity"] * $value["product_Price"]);
            }
    ?>
    <tr>
        <td colspan="3" align="right">Total</td>
        <td align="right">$ <?php echo number_format($total, 2); ?></td>
        <td></td>
    </tr>
<?php
        }

?> -->



<div class="site-section block-3 site-blocks-2 bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7 site-section-heading text-center pt-4">
                <h2>Featured Products</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="nonloop-block-3 owl-carousel">
                    <div class="item">
                        <div class="block-4 text-center">
                            <figure class="block-4-image">
                                <img src="image/facemask/JM Solution Honey Luminous Royal Propolis Mask.png" alt="Image placeholder" class="img-fluid">
                            </figure>
                            <div class="block-4-text p-4">
                                <h3><a style="font-family:KaiTi;font-style:italic;" href="Facemask_JM Solution Honey Luminous Royal Propolis Mask.php">JM SOLUTION</a></h3>
                                <p class="mb-0">Water Luminous Avocado Oil Ampoule Mask</p>
                                <p style="color:grey;" class="font-weight-bold">RM89.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="block-4 text-center">
                            <figure class="block-4-image">
                                <img src="image/facemask/Mirae Ex8 Minutes Instant Moisturizing Mask.png" alt="Image placeholder" class="img-fluid">
                            </figure>
                            <div class="block-4-text p-4">
                                <h3><a style="font-family:KaiTi;font-style:italic;" href="Facemask_Mirae Ex8 Minutes Instant Moisturizing Mask.php">Mirae</a></h3>
                                <p class="mb-0">Ex8 Minutes Instant Moisturizing Mask</p>
                                <p style="color:grey;" class="font-weight-bold">RM31.90</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="block-4 text-center">
                            <figure class="block-4-image">
                                <img src="image/eyemask/Jayjun Eye Gel Patch.png" alt="Image placeholder" class="img-fluid">
                            </figure>
                            <div class="block-4-text p-4">
                                <h3><a style="font-family:KaiTi;font-style:italic;" href="Eyemask_Jayjun.php">JAYJUN</a></h3>
                                <p class="mb-0">Eye Gel Patch</p>
                                <p style="color:grey;" class="font-weight-bold">RM94.90</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="block-4 text-center">
                            <figure class="block-4-image">
                                <img src="image/lipmask/Klavuu Nourishing Care Lip Sleeping Pack.png" alt="Image placeholder" class="img-fluid">
                            </figure>
                            <div class="block-4-text p-4">
                                <h3><a style="font-family:KaiTi;font-style:italic;" href="Lipmask_Klavuu Nourishing Care Lip Sleeping Mask.php">KLAVUU</a></h3>
                                <p class="mb-0">Nourishing Care Lip Sleeping Mask</p>
                                <p style="color:grey;" class="font-weight-bold">RM47.00</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="block-4 text-center">
                            <figure class="block-4-image">
                                <img src="image/lipmask/Skin Food Avocado & Olive Lip Mask.png" alt="Image placeholder" class="img-fluid">
                            </figure>
                            <div class="block-4-text p-4">
                                <h3><a style="font-family:KaiTi;font-style:italic;" href="Lipmask_Skin Food Avocado & Olive Lip Mask.php">SKIN FOOD</a></h3>
                                <p class="mb-0">Avocado & Olive Lip Mask</p>
                                <p style="color:grey;" class="font-weight-bold">RM25.90</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>
</div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>

<script src="js/main.js"></script>

</body>

</html>