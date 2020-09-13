<?php
session_start();
// $_SESSION['pageStore'] = "index.php";
include('dbconfig.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <title>U BEAUTY</title>
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

</head>

<body>

  <div class="site-wrap">
    <?php include 'header.php'; ?>

    <div class="site-blocks-cover" style="background-image: url(image/innisfree.jpg);" data-aos="fade">
      <div class="container">
        <div class="row align-items-start align-items-md-center justify-content-end">
          <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
            <h1 class="mb-2">Finding Your Perfect Mask</h1>
            <div class="intro-text text-center text-md-left">
              <p class="mb-4">Passing savings onto you every day with regular promotions bound to surprise you and your friends.</p>
              <p>
                <a href="shop.php" class="btn btn-sm btn-primary">Shop Now</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section site-section-sm site-blocks-1">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
            <div class="icon mr-4 align-self-start">
              <span class="icon-truck"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Free Shipping</h2>
              <p>Free shipping for orders above RM 150. Orders will be delivered within 3-5 business days within West Malaysia but 5-10 business days for East Malaysia.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
            <div class="icon mr-4 align-self-start">
              <span class="icon-refresh2"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Free Returns</h2>
              <p>Returning items is easy.
                Make sure your item is returnable with the following checklist which is within 30 days receipt, invoice available, original condition & tags intact, and original packaging.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
            <div class="icon mr-4 align-self-start">
              <span class="icon-help"></span>
            </div>
            <div class="text">
              <h2 class="text-uppercase">Customer Support</h2>
              <p>Tell us how we can help. Feel free to contact us when you are facing problem, we will answering customer questions, providing assistance with onboarding, troubleshooting, and upgrading customers to a new product or service.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section site-blocks-2">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
            <a class="block-2-item" href="productList.php?category_ID=3">
              <figure class="image">
                <img src="image/eye mask.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <span class="text-uppercase">mask</span>
                <h3>Eye</h3>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
            <a class="block-2-item" href="productList.php?category_ID=1">
              <figure class="image">
                <img src="image/lip mask2.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <span class="text-uppercase">mask</span>
                <h3>Lip</h3>
              </div>
            </a>
          </div>
          <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
            <a class="block-2-item" href="productList.php?category_ID=2">
              <figure class="image">
                <img src="image/face mask.jpg" alt="" class="img-fluid">
              </figure>
              <div class="text">
                <span class="text-uppercase">mask</span>
                <h3>Face</h3>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

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
    </div>

    <div class="site-section block-8">
      <div class="container">
        <div class="row justify-content-center  mb-5">
          <div class="col-md-7 site-section-heading text-center pt-4">
            <h2>Coupon Code!</h2>
          </div>
        </div>
        <div class="row align-items-center">
          <div class="col-md-12 col-lg-7 mb-5">
            <a href="#"><img src="image/1.jpg" alt="Image placeholder" class="img-fluid rounded"></a>
          </div>
          <div class="col-md-12 col-lg-5 text-center pl-md-5">
            <h2>COUPON CODE FOR UBEAUTY : UBEAUTY20 </h2>
            <p>How to use Promo Codes? Enter your promo code, hit the "Apply Coupon" button and watch your discount instantly be applied to your order. Only one coupon can be used per order.</p>

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