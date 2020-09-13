<?php
ob_start();
// session_start();
include('dbconfig.php');
error_reporting(0);

// if (isset($_GET['remove'])) {
//   unset($_SESSION['cart'][$product_ID]);
// }

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <title>Cart - UBEAUTY</title>
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


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

</head>

<body>

  <div class="site-wrap">
    <?php include 'header.php'; ?>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Cart</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <?php
            //print_r($_POST);
            if (array_key_exists('delete_from_cart', $_POST)) {
              deleteItemFromCart($_POST['key']);
              header('Location:cart.php');
            }

            if (array_key_exists('change_quantity', $_POST)) {
              changeQuantity($_POST['key'], $_POST['quantity']);
              header('Location:cart.php');
            }

            ?>
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-quantity">Quantity</th>
                    <th class="product-total">Total</th>
                    <th class="product-remove">Remove</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                  $grand = 0;
                  $total = 0;
                  foreach ($_SESSION['cart'] as $key => $val) {
                    // $sql = "SELECT * FROM `product` WHERE product_ID=$key";
                    // $result = $conn->query($sql);
                    // $row->product = mysqli_fetch_assoc($result);
                    $row = $val;
                    $sub = $val * $row->product_Price * $row->quantity;
                    $grand += $sub;
                  ?>
                    <form method="post">
                      <tr>
                        <td class="product-thumbnail">
                          <img src="<?php echo $row->product_Image; ?>" alt="Image" class="img-fluid">
                        </td>
                        <td class="product-name">
                          <h2 class="h5 text-black"><?php echo $row->product_Name; ?></h2>
                        </td>
                        <td>RM <?php echo $row->product_Price; ?></td>
                        <td>
                          <div class="input-group mb-3" style="max-width: 120px;">
                            <div class="input-group-prepend">
                              <button class="btn btn-outline-primary js-btn-minus" name="change_quantity" type="button">&minus;</button>
                            </div>
                            <input type="text" name="quantity" id="quantity" class="form-control text-center" value="<?php echo $row->quantity; ?>" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                            <div class="input-group-append">
                              <button class="btn btn-outline-primary js-btn-plus" name="change_quantity" type="submit">&plus;</button>

                            </div>
                            <input syle="padding:right;" class="btn btn-outline-primary " type="submit" name="change_quantity" class="button" value="√" />
                          </div>

                        </td>
                        <td>RM <?php echo $sub; ?></td>


                        <td><a href="#" name="remove" id="remove">
                            <input type="text" name='key' style="display:none" value="<?php echo $key ?>" />
                            <input class="btn btn-primary btn-sm" type="submit" name="delete_from_cart" class="button" value="X" />
                          </a></td>



                      </tr>
                    </form>
                  <?php
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </form>
        </div>

        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <!-- <div class="col-md-6 mb-3 mb-md-0">
                <a href="cart.php" button class="btn btn-primary btn-sm btn-block">Update Cart</button></a>
              </div>
              <div class="col-md-6">
                <a href="shop.php" button class="btn btn-outline-primary btn-sm btn-block">Continue Shopping</button></a>
              </div> -->
            </div>
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase">Cart Totals</h3>
                  </div>
                </div>
                <!-- <div class="row mb-3">
                  <div class="col-md-6">
                    <span class="text-black">Subtotal</span>
                  </div>
                  <div class="col-md-6 text-right">
                   <strong class="text-black">RM102.00</strong> 
                    <strong class="text-black">RM <?php //echo $sub; 
                                                  ?></strong>
                  </div>
                </div> -->
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <!-- <strong class="text-black">RM102.00</strong> -->
                    <strong class="text-black">RM <?php echo $grand; ?></strong>
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12">
                    <?php

                    if (array_key_exists('checkout', $_POST)) {
                      addItemToCart($row, $_POST['quantity']);
                      header('Location:checkout.php');
                    }
                    ?>

                    <button name="checkout" class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='checkout.php'">Proceed To Checkout</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- <?php
            //   } else {
            //     echo "empty";
            //   }
            // }
            ?> -->
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