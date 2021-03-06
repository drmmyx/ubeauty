<?php
include('../dbconfig.php');

// if (isset($_GET["product_ID"])) {
//   $pid = $_GET["product_ID"];
//   $result = mysqli_query($conn, "SELECT * from product where product_ID=$pid");
//   $row = mysqli_fetch_assoc($result);
//   echo $result;
// }
?>

<!DOCTYPE html>
<html>
<title>UBEAUTY Admin</title>
<link rel="shortcut icon" type="image/jpeg" href="image/logo1.jpeg">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="Css/admincss.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  html,
  body,
  h1,
  h2,
  h3,
  h4,
  h5 {
    font-family: "Raleway", sans-serif
  }
</style>

<body class="fd-light-grey">

  <!-- Top container -->
  <div class="fd-bar fd-top fd-pink fd-large" style="z-index:4">
    <span class="fd-bar-item fd-left"><img src="image/logo1.jpeg" style="width:29px"> UBEAUTY</span>
  </div>

  <!-- Sidebar/menu -->
  <nav class="fd-sidebar fd-collapse fd-white fd-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
    <div class="fd-container fd-row">
      <div class="fd-col s4">
        <img src="image/admin1.png" class="fd-circle fd-margin-right" style="width:46px">
      </div>
      <div class="fd-col s8 fd-bar">
        <span>Welcome, <strong><?php echo $session_fullName; ?></strong></span><br>

      </div>
    </div>
    <hr>
    <div class="fd-container">
      <h5>Edit Product</h5>
    </div>
    <div class="fd-bar-block">
      <a href="overview.php" class="fd-bar-item fd-button fd-padding"><i class="fa fa-users fa-fw"></i>Overview</a>
      <a href="addproduct.php" class="fd-bar-item fd-button fd-padding"><i class="fa fa-plus-circle"></i>  Adds</a>
      <a href="editproduct.php" class="fd-bar-item fd-button fd-padding fd-blue"><i class="fa fa-edit fa-fw"></i>Edits</a>
      <a href="viewproduct.php" class="fd-bar-item fd-button fd-padding"><i class="fa fa-eye fa-fw"></i>Views</a>
      <a href="login.php" class="fd-bar-item fd-button fd-padding"><i class="fa fa-sign-out"></i>Sign Out</a><br><br>
    </div>
  </nav>

  <!-- !PAGE CONTENT! -->
  <div class="fd-main" style="margin-left:300px;margin-top:43px;">

    <!-- Header -->
    <header class="fd-container" style="padding-top:22px">
      <h3><b>Edit Product</b></h3>
    </header>

    <?php
    // if (isset($_GET["product_ID"])) {
    $id = $_GET['product_ID'];
    $sql = "SELECT * FROM `product` WHERE product_ID=$id";
    $result = $conn->query($sql);
    // $row = mysqli_fetch_assoc($result);
    if ($result->num_rows > 0) {
      // output data of each row
      while ($row = $result->fetch_assoc()) {

        echo '
              <div style="padding:10px;">
                <form name="menu" method="post" action="">
                  <fieldset style="padding:2%">
                    <label>Upload product image: <br></label>
                    <input type="file" name="picture"><br><img src="' . $row['product_Image'] . '" style="width:10%;">
                    <br><br><label>Product Category: <br></label>
                    <select name="category" size="1" style="width:100%;border-radius:5px;border-style:groove;height:30px;">
                      <option value="2" ' . $row['category_ID'] . '>Facemask</option>
                      <option value="1" ' . $row['category_ID'] . '>Eyemask</option>
                      <option value="3" ' . $row['category_ID'] . '>Lipmask</option>
                    </select>
                    <br><br><label>Product Name: <br></label>
                    <input type="text" name="name" placeholder="Enter product name" value="' . $row['product_Name'] . '" style="width:100%;height:36px;border-radius:5px;border-style:groove;">
                    <br><br><label>Product Brand: <br></label>
                    <input type="text" name="name" placeholder="Enter product Brand" value="' . $row['product_Brand'] . '" style="width:100%;height:36px;border-radius:5px;border-style:groove;">
                    <br><br><label>Product price: <br></label>
                    <input type="text" name="price" placeholder="RM" value="' . $row['product_Price'] . '" style="width:100%;height:36px;border-radius:5px;border-style:groove;">
                    <br><br><label>Product Package: <br></label>
                    <input type="text" name="name" placeholder="Enter product package" value="' . $row['product_Package'] . '" style="width:100%;height:36px;border-radius:5px;border-style:groove;">
                    <br><br><label>Product Description:<br></label>
                    <textarea name="description" rows="3" cols="40" placeholder="' . $row['product_Description'] . '" style="border-radius:6px;width:100%;border-radius:5px;border-style:groove;"></textarea>

                    <br><br><input type="submit" name="updatebtn" value="Update" style="background-color: #21759b;border-radius:7px;border-color:#298cba;float:right;color:white;">

                  </fieldset>
                </form>
              </div>';
      }
    } else {
      echo "0 results";
    }


    ?>

    <!-- Footer -->
    <footer class="fd-container fd-padding-16 fd-light-grey">
      <p>Copyright © UBEAUTY 2020. Developed by <a href="../index.php" target="_blank">UBEAUTY </a></p>
    </footer>

    <!-- End page content -->
  </div>

  <script>
    // Get the Sidebar
    var mySidebar = document.getElementById("mySidebar");

    // Get the DIV with overlay effect
    var overlayBg = document.getElementById("myOverlay");
  </script>

</body>

</html>