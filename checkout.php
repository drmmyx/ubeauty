<?php
session_start();
include('dbconfig.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>Checkout - UBEAUTY</title>
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
          <div class="col-md-12 mb-0"><a href="index.html">Home</a> <span class="mx-2 mb-0">/</span> <a href="cart.html">Cart</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Checkout</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">
            <div class="border p-4 rounded" role="alert">
              Returning customer? <a href="login.php">Click here</a> to login
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
            <h2 class="h3 mb-3 text-black">Billing Details</h2>
            <div class="p-3 p-lg-5 border">
              <form method="post">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">First Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fname" name="c_fname"><?php $row['first_name']; ?>
                  </div>
                  <div class="col-md-6">
                    <label for="c_lname" class="text-black">Last Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_lname" name="c_lname"><?php $row['last_name']; ?>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_diff_companyname" class="text-black">Company Name </label>
                    <input type="text" class="form-control" id="c_diff_companyname" name="c_diff_companyname"><?php $row['company']; ?>
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_address" class="text-black">Address <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_address" name="c_address" placeholder="Street address"><?php $row['address']; ?>
                  </div>
                </div>

                <!-- <div class="form-group">
                  <input type="text" class="form-control" placeholder="Apartment, suite, unit etc. (optional)"><?php $row['last_name']; ?>
                </div> -->

                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_state_country" class="text-black">State / Country <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_state_country" name="c_state_country"><?php $row['state']; ?>
                  </div>
                  <div class="col-md-6">
                    <label for="c_postal_zip" class="text-black">Postcode / Zip <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip"><?php $row['postcode']; ?>
                  </div>
                </div>

                <div class="form-group row mb-5">
                  <div class="col-md-6">
                    <label for="c_email_address" class="text-black">Email Address <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_email_address" name="c_email_address"><?php $row['email']; ?>
                  </div>
                  <div class="col-md-6">
                    <label for="c_phone" class="text-black">Phone <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="Phone Number"><?php $row['phone']; ?>
                  </div>
                </div>

                <div class="form-group">
                  <label for="c_order_notes" class="text-black">Order Notes</label>
                  <textarea name="c_order_notes" id="c_order_notes" cols="30" rows="5" class="form-control" placeholder="Write your notes here..."></textarea>
                </div>
              </form>
            </div>
          </div>

          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Coupon Code</h2>
                <div class="p-3 p-lg-5 border">

                  <label for="c_code" class="text-black mb-3">Enter your coupon code if you have one</label>
                  <div class="input-group w-75">
                    <input type="text" class="form-control" id="c_code" placeholder="Coupon Code" aria-label="Coupon Code" aria-describedby="button-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary btn-sm" type="button" id="button-addon2">Apply</button>
                    </div>
                  </div>

                </div>
              </div>
            </div>

            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class="h3 mb-3 text-black">Your Order</h2>
                <div class="p-3 p-lg-5 border">
                  <table class="table site-block-order-table mb-5">
                    <?php
                    // $grand = 0;
                    // $total = 0;
                    // foreach ($_SESSION['cart'] as $key => $val) {
                    //   $row = $val;
                    //   $sub = $val * $row->product_Price * $row->quantity;
                    //   $grand += $sub;
                    ?>
                    <thead>
                      <th>Product</th>
                      <th>Total</th>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Three-way Lifting & Whitening Eye Mask<strong class="mx-2">x</strong>2</td>
                        <!-- <td><?php $row->product_Name; ?><strong class="mx-2">x</strong>2</td> -->
                        <td>RM58.00</td>
                      </tr>
                      <tr>
                        <td>Anti-Wrinkle Brightening Eye Mask<strong class="mx-2">x</strong> 1</td>
                        <td>RM35.00</td>
                      </tr>
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Cart Subtotal</strong></td>
                        <td class="text-black">RM93.00</td>
                      </tr>
                      <tr>
                        <td class="text-black font-weight-bold"><strong>Order Total</strong></td>
                        <td class="text-black font-weight-bold"><strong>RM93.00</strong></td>
                      </tr>
                    </tbody>
                  </table>
                  <?php
                  // }
                  ?>
                  <!-- <div class="border p-3 mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button" aria-expanded="false" aria-controls="collapsebank">Direct Bank Transfer</a></h3>

                     <div class="collapse" id="collapsebank">
                      <div class="py-2">
                        <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                      </div>
                    </div> -->
                  <!-- </div> -->

                  <div class="border p-3 mb-3">
                    <h3 class="h6 mb-0">
                      <a class="d-block" data-toggle="collapse" href="#collapsecheque" role="button" aria-expanded="false" aria-controls="collapsecheque">
                        <!-- Debit or Credit Card -->
                        <h5>Payment</h5>
                      </a>
                    </h3>

                    <div class="collapse" id="collapsecheque">
                      <div class="py-2">
                        <!-- <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p> -->
                        <div class="col-50">
                          <!-- <h2 class="h3 mb-3 text-black">Payment</h2> -->
                          <label for="fname">Accepted Cards</label>
                          <div class="icon-container">
                            <i class="fa fa-cc-visa" style="color:navy; width:40px;"></i>
                            <i class="fa fa-cc-mastercard" style="color:red;"></i>
                          </div>
                          <label for="column-left">Bank:
                            <select name="bank">
                              <option value="Maybank">Maybank</option>
                              <option value="CIMB Bank">CIMB Bank</option>
                              <option value="Public Bank">Public Bank</option>
                              <option value="RHB Bank">RHB Bank</option>
                              <option value="Hong Leong Bank">Hong Leong Bank</option>
                              <option value="Am Bank">Am Bank</option>
                              <option value="HSBC Bank">HSBC Bank</option>
                              <option value="Affin Bank">Affin Bank</option>
                            </select>
                          </label>
                          <label for="cname">Name on Card</label>
                          <input type="text" id="cname" name="cardname" pattern="[a-zA-Z]+" title="Please enter your name on card" placeholder="Alvin Liew Jia Sai" required>
                          <label for="ccnum">Credit Card Number</label>
                          <input type="text" id="ccnum" name="cardnumber" placeholder="1012232212032187" pattern="[0-9]{13,16}" maxlength="16" required">
                          <label for="expmonth">Exp Month and Year</label>
                          <input type="text" id="expmonth" name="expmonth" pattern="(?:0[1-9]|1[0-2])/[0-9]{2}" placeholder="MM / YY" maxlength="5" required>
                          <label for="cvv">CVV</label>
                          <input type="text" id="cvv" name="cvv" placeholder="123" pattern="[0-9]{3}]" maxlength="3" required>

                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- <div class="border p-3 mb-5">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsepaypal" role="button" aria-expanded="false" aria-controls="collapsepaypal">Paypal</a></h3>

                     <div class="collapse" id="collapsepaypal">
                      <div class="py-2">
                        <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                      </div>
                    </div> -->
                  <!-- </div> -->

                  <div class="form-group">
                    <button class="btn btn-primary btn-lg py-3 btn-block" onclick="window.location='thankyou.php'">Place Order</button>
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- </form> -->
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