<?php
include('dbconfig.php');
include('cartSession.php');
// if (isset($_POST['search'])) {
//   $searchq = $_POST['search'];
//   $searchq = preg_replace("#[^0-9a-z]#i", "", $searchq);

//   $query = mysqli_query("SELECT * FROM product WHERE product_Name LIKE '%$searchq%' OR product_Brand LIKE '%$searchq%' ") or die("could not search!");
//   $count = mysqli_num_rows($query);
//   if ($count == 0) {
//     $output = 'There was no search results!';
//   } else {
//     while ($row = mysqli_fetch_array($query)) {
//       $pname = $row['product_Name'];
//       $pbrand = $row['product_Brand'];
//       $id = $row['product_ID'];

//       $output .= '<div>' . $pname . '' . $pbrand . '</div>';
//     }
//   }
// }
?>
<header class="site-navbar" role="banner">
  <div class="site-navbar-top">
    <div class="container">
      <div class="row align-items-center">

        <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
          <form action="" method="POST" class="site-block-top-search">
            <span class="icon icon-search2"></span>
            <input type="text" name="search" class="form-control border-0" placeholder="Search">
          </form>
        </div>

        <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
          <div class="site-logo">
            <a href="index.php" class="js-logo-clone">U Beauty</a>
          </div>
        </div>

        <div class="col-6 col-md-4 order-3 order-md-3 text-right">
          <div class="site-top-icons">
            <ul>
              <!-- <li><a href="#myModal" class="trigger-btn" data-toggle="modal">Click to Open Login Modal</a></li> -->

              <!-- <div id="myModal" class="modal fade">
                    <div class="modal-dialog modal-login">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title">Member Login</h4>
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                          <form action="/examples/actions/confirmation.php" method="post">
                            <div class="form-group">
                              <i class="fa fa-user"></i>
                              <input type="text" class="form-control" placeholder="Username" required="required">
                            </div>
                            <div class="form-group">
                              <i class="fa fa-lock"></i>
                              <input type="password" class="form-control" placeholder="Password" required="required">
                            </div>
                            <div class="form-group">
                              <input type="submit" class="btn btn-primary btn-block btn-lg" value="Login">
                            </div>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <a href="#">Forgot Password?</a>
                        </div>
                      </div>
                    </div>
                  </div> -->
              <!-- <button class="icon icon-person" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" style="border:white; background:white;"></button></li> -->

              <!-- <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="align-ite">
                    <div class="modal-dialog" role="document" style="position:fixed; top:50%; left:45%; margin-top:-50px;">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h3 class="modal-title" id="exampleModalLabel">Login</h3>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form style="text-align: left;">
                            Email Address:
                            <br><input type="email" name="email">
                            <br>
                            Password:
                            <br><input type="password" namae="password">
                          </form>
                        </div>
                        <div class="modal-footer">
                           <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
                          <button type="button" class="btn btn-primary" style="margin:auto;">Login</button>
                        </div>
                      </div>
                    </div>
                  </div> -->
              <li><a href="signup.php">Signup</a></li>
              <li><a href="login.php">Login</a></li>
              <!-- <li><a>Wan Tian</a></li> -->
              <li><a href="profile.php"><span class="icon icon-person"></span></a></li>
              <li><a href="wishlist.php"><span class="icon icon-heart-o"></span></a></li>
              <li>
                <a href="cart.php" class="site-cart">
                  <span class="icon icon-shopping_cart"></span>
                  <!-- <span class="count"><?php ?></span> -->
                </a>
              </li>
              <li><a href="#"><span class="icon icon-sign-out"></span></a></li>
              <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </div>
  <nav class="site-navigation text-right text-md-center" role="navigation">
    <div class="container">
      <ul class="site-menu js-clone-nav d-none d-md-block">
        <li><a href="index.php">Home</a></li>
        <li><a href="shop.php">Shop</a></li>
        <li class="has-children">
          <a href="#">Catalogue</a>
          <ul class="dropdown">
            <!-- <li><a href="productList.php?category_ID=3&page=1">Eye Mask</a></li>
            <li><a href="productList.php?category_ID=1&page=1">Lip Mask</a></li>
            <li><a href="productList.php?category_ID=2&page=1">Face Mask</a></li> -->
            <li><a href="productList.php?category_ID=3">Eye Mask</a></li>
            <li><a href="productList.php?category_ID=1">Lip Mask</a></li>
            <li><a href="productList.php?category_ID=2">Face Mask</a></li>
          </ul>
        </li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </div>
  </nav>
</header>