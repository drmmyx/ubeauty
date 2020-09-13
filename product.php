<?php
ob_start();
session_start();
include('dbconfig.php');
error_reporting(0);

if (!(isset($_SESSION['cart']))) {
    $_SESSION['cart'];
}

$out = "";
if (isset($_GET['product_ID'])) {
    $product_ID = $_GET['product_ID'];
    $num = $_GET['num'];

    if ($num > 0 && filter_var($num, FILTER_VALIDATE_INT)) {
        if (isset($_SESSION['cart'][$product_ID])) {
            $_SESSION['cart'][$product_ID] += $num;
        } else {
            $_SESSION['cart'][$product_ID] = $num;
        }
    } else {
        $out = "wrong input";
    }
}

// if (!(isset($_SESSION['wishlist']))) {
//     $_SESSION['wishlist'];
// }

// $out = "";
// if (isset($_GET['product_ID'])) {
//     $product_ID = $_GET['product_ID'];
//     $num = $_GET['num'];

//     if ($num > 0 && filter_var($num, FILTER_VALIDATE_INT)) {
//         if (isset($_SESSION['wishlist'][$product_ID])) {
//             $_SESSION['wishlist'][$product_ID] += $num;
//         } else {
//             $_SESSION['wishlist'][$product_ID] = $num;
//         }
//     } else {
//         $out = "wrong input";
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

    <link rel="stylesheet" type="text/css" href="login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">

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
                                <input type="hidden" name="product_Name" id="product_Name" value="<?php echo $row["product_Name"]; ?>" />
                                <input type="hidden" name="product_Price" id="product_Price" value="<?php echo $row["product_Price"]; ?>" />

                                <?php
                                if (array_key_exists('add_to_cart', $_POST)) {
                                    addItemToCart($row, $_POST['quantity']);
                                    header('Location:cart.php');
                                    // exit();
                                    // echo "<script>window.location.href='cart.php';</script>";
                                    // echo "<script>window.location.href='product.php'?product_ID=" . $row['product_ID'] . ";</script>";
                                }
                                if (array_key_exists('clear', $_POST))
                                    clearSession();
                                // echo "<script>window.location.href='product.php'?product_ID=" . $row['product_ID'] . ";</script>";

                                // if (array_key_exists('add_to_wishlist', $_POST)) {
                                //     addItemToWL($row);
                                // }


                                // if (isset($_GET["WLbtn"])) {

                                //     $pid = $_GET['product_ID'];
                                //     // $pimage = $_POST["image"];
                                //     // $pcategory = $_POST["category"];
                                //     // $pprice = $_POST["price"];
                                //     // $pdescription = $_POST["description"];
                                //     // $pname = $_POST["name"];

                                //     $result = mysqli_query($conn, "SELECT * FROM wishlist where product_ID = '$pid'");
                                //     if (mysqli_num_rows($result) != 0) {
                                // 
                                ?>
                                <!-- <script>
                                            alert("The product is already add.");
                                        </script> -->
                                <?php
                                // } else {
                                //     mysqli_query($conn, "INSERT INTO wishlist(product_ID, user_ID)VALUES('$pid', 1)");
                                // }


                                ?>

                                <!-- <script type="text/javascript">
                                        alert("<?php //echo $row['product_Name']; 
                                                ?> saved");
                                    </script> -->

                                <?php




                                ?>
                                <form method="post">
                                    <div class="mb-5">
                                        <div class="input-group mb-3" style="max-width: 120px;">
                                            <div class="input-group-prepend">
                                                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                                            </div>
                                            <input name="quantity" id="num" type="text" class="form-control text-center" value="1" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                            <div class="input-group-append">
                                                <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                                            </div>
                                        </div>
                                        <?php //echo $out; 
                                        ?>
                                    </div>

                                    <p>
                                        <!-- <input type="submit" name="clear" class="button" value="clear" /> -->
                                        <!-- <a href="cart.php" value="add_to_cart"> -->
                                        <input class="buy-now btn btn-sm btn-primary" type="submit" name="add_to_cart" class="button" value="Add To Cart" />
                                        <!-- </a> -->
                                        <th><a href="wishlist.php?product_ID=<?php echo $row['product_ID']; ?>" class="buy-now btn btn-sm btn-outline-primary"><i class="fa fa-heart-o"></i> Wishlist</a></th>
                                        <!-- <th>
                                            <a>
                                                <input class="buy-now btn btn-sm btn-outline-primary" type="submit" name="WLbtn" id="wl" class="button" value="Wishlist">
                                                <span class="focus-input100" data-placeholder="&#xe813;">Wishlist</span>
                                                <i class="fa fa-heart-o"></i> Wishlist
                                            </a>
                                        </th> -->
                                    </p>
                                </form>
                            </div>
                        </div>

                    </div>

                </div>

        <?php
            }
        } else {
            echo "0 results";
        }

        ?>


        <div class="site-section block-3 site-blocks-2 bg-light">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-7 site-section-heading text-center pt-4">
                        <h2>Featured Products</h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <?php
                        $sql = "SELECT * FROM `product` where product_ID = 1043";
                        $result = $conn->query($sql);
                        if ($result->num_rows > 0) {
                            // output data of each row
                            while ($row = $result->fetch_assoc()) {
                            }
                        } else {
                            echo "0 results";
                        }
                        ?>
                        <div class="nonloop-block-3 owl-carousel">
                            <?php
                            $sql = "SELECT * FROM `product` where product_ID = 1043";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo '
                                    <div class="item">
                                    <div class="block-4 text-center">
                                        <figure class="block-4-image">
                                        <a style="font-family:KaiTi;font-style:italic;" href="product.php?product_ID=1043">
                                            <img src="' . $row['product_Image'] . '" alt="Image placeholder" class="img-fluid">
                                        </a>
                                        </figure>
                                        <div class="block-4-text p-4">
                                        <h3><a style="font-family:KaiTi;font-style:italic;" href="product.php?product_ID=1043">' . $row['product_Brand'] . '</a></h3>
                                        <p class="mb-0">' . $row['product_Name'] . '</p>
                                        <p style="color:grey;" class="font-weight-bold">RM' . $row['product_Price'] . '</p>
                                        </div>
                                    </div>
                                    </div>';
                                }
                            } ?>

                            <?php
                            $sql = "SELECT * FROM `product` where product_ID = 1054";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo '
                                        <div class="item">
                                        <div class="block-4 text-center">
                                            <figure class="block-4-image">
                                            <a style="font-family:KaiTi;font-style:italic;" href="product.php?product_ID=1043">
                                                <img src="' . $row['product_Image'] . '" alt="Image placeholder" class="img-fluid">
                                            </a>
                                            </figure>
                                            <div class="block-4-text p-4">
                                            <h3><a style="font-family:KaiTi;font-style:italic;" href="product.php?product_ID=1054">' . $row['product_Brand'] . '</a></h3>
                                            <p class="mb-0">' . $row['product_Name'] . '</p>
                                            <p style="color:grey;" class="font-weight-bold">RM' . $row['product_Price'] . '</p>
                                            </div>
                                        </div>
                                        </div>';
                                }
                            } ?>

                            <?php
                            $sql = "SELECT * FROM `product` where product_ID = 1005";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo '
                                        <div class="item">
                                        <div class="block-4 text-center">
                                            <figure class="block-4-image">
                                            <a style="font-family:KaiTi;font-style:italic;" href="product.php?product_ID=1005">
                                                <img src="' . $row['product_Image'] . '" alt="Image placeholder" class="img-fluid">
                                            </a>
                                            </figure>
                                            <div class="block-4-text p-4">
                                            <h3><a style="font-family:KaiTi;font-style:italic;" href="product.php?product_ID=1043">' . $row['product_Brand'] . '</a></h3>
                                            <p class="mb-0">' . $row['product_Name'] . '</p>
                                            <p style="color:grey;" class="font-weight-bold">RM' . $row['product_Price'] . '</p>
                                            </div>
                                        </div>
                                        </div>';
                                }
                            } ?>

                            <?php
                            $sql = "SELECT * FROM `product` where product_ID = 1063";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo '
                                        <div class="item">
                                        <div class="block-4 text-center">
                                            <figure class="block-4-image">
                                            <a style="font-family:KaiTi;font-style:italic;" href="product.php?product_ID=1063">
                                                <img src="' . $row['product_Image'] . '" alt="Image placeholder" class="img-fluid">
                                            </a>
                                            </figure>
                                            <div class="block-4-text p-4">
                                            <h3><a style="font-family:KaiTi;font-style:italic;" href="product.php?product_ID=1043">' . $row['product_Brand'] . '</a></h3>
                                            <p class="mb-0">' . $row['product_Name'] . '</p>
                                            <p style="color:grey;" class="font-weight-bold">RM' . $row['product_Price'] . '</p>
                                            </div>
                                        </div>
                                        </div>';
                                }
                            } ?>

                            <?php
                            $sql = "SELECT * FROM `product` where product_ID = 1017";
                            $result = $conn->query($sql);
                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    echo '
                                        <div class="item">
                                        <div class="block-4 text-center">
                                            <figure class="block-4-image">
                                            <a style="font-family:KaiTi;font-style:italic;" href="product.php?product_ID=1017">
                                                <img src="' . $row['product_Image'] . '" alt="Image placeholder" class="img-fluid">
                                            </a>
                                            </figure>
                                            <div class="block-4-text p-4">
                                            <h3><a style="font-family:KaiTi;font-style:italic;" href="product.php?product_ID=1043">' . $row['product_Brand'] . '</a></h3>
                                            <p class="mb-0">' . $row['product_Name'] . '</p>
                                            <p style="color:grey;" class="font-weight-bold">RM' . $row['product_Price'] . '</p>
                                            </div>
                                        </div>
                                        </div>';
                                }
                            } ?>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
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