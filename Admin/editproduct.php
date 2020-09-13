<? include('../dbconfig.php'); ?>
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

  #loading {
    position: fixed;
    width: 100%;
    height: 100vh;
    background: white url('image/loading.gif') no-repeat center;
    z-index: 99999;
  }
</style>

<body class="fd-light-grey" onload="setTimeout(myFunction, 2000);">
  <!-- <div id="loading"></div> -->
  <!-- Top container -->
  <div class="fd-bar fd-top fd-pink fd-large" style="z-index:4">
    <span class="fd-bar-item fd-left"><img src="image/logo1.jpeg" style="width:29px"> UBEAUTY</span>
  </div>

  <!-- Sidebar/menu -->
  <?php include('slidebar.php'); ?>

  <!-- !PAGE CONTENT! -->
  <div class="fd-main" style="margin-left:300px;margin-top:43px;">

    <!-- Header -->
    <header class="fd-container" style="padding-top:22px">
      <h3><b>Edit Product</b></h3>
    </header>
    <?php
    //get product_ID 
    if (isset($_GET["product_ID"])) {
      $pid = $_GET["product_ID"];
      $result = mysqli_query($conn, "SELECT * from product where product_ID=$pid");
      $row = mysqli_fetch_assoc($result);
    }
    //submit 
    if (isset($_POST["updatebtn"])) {

      // $pimage = $_POST["image"];
      $pcategory = $_POST["category"];
      $pprice = $_POST["price"];
      $pdescription = $_POST["description"];
      $pname = $_POST["name"];

      mysqli_query($conn, "UPDATE product SET product_Name = '$pname', product_Price = '$pprice',  product_description = '$pdescription' , category_ID = '$pcategory'where product_ID = '$pid'");

      header("location:productlist.php"); //redirect user back to productlist.php

    ?>
      <script type="text/javascript">
        alert("<?php echo $pname; ?> saved");
      </script>
    <?php
    }
    ?>
    <div style="padding:10px;">
      <form name="menu" method="post" action="">
        <fieldset style="padding:2%">

          <label> Product Code: <?php echo $row['product_ID']; ?></label>
          <br><br><label>Product image: <br></label>
          <br><img src="../<?php echo $row['product_Image']; ?>" style="width:10%;">
          <br><br><label>Product Category: <br></label>
          <select name="category" size="1" style="width:100%;border-radius:5px;border-style:groove;height:30px;">
            <option value="2" <?php if ($row['category_ID'] == "2") echo "selected"; ?>>Facemask</option>
            <option value="3" <?php if ($row['category_ID'] == "3") echo "selected"; ?>>Eyemask</option>
            <option value="1" <?php if ($row['category_ID'] == "1") echo "selected"; ?>>Lipmask</option>
          </select>
          <br><br><label>Product Name: <br></label>
          <input type="text" name="name" placeholder="Enter product name" value="<?php echo $row['product_Name']; ?>" style="width:100%;height:36px;border-radius:5px;border-style:groove;">
          <br><br><label>Product Brand: <br></label>
          <input type="text" name="brand" placeholder="Enter product brand" value="<?php echo $row['product_Brand']; ?>" style="width:100%;height:36px;border-radius:5px;border-style:groove;">
          <br><br><label>Product Package: <br></label>
          <input type="text" name="package" placeholder="Enter product package" value="<?php echo $row['product_Package']; ?>" style="width:100%;height:36px;border-radius:5px;border-style:groove;">
          <br><br><label>Product Price: <br></label>
          <input type="text" name="price" placeholder="RM" value="<?php echo $row['product_Price']; ?>" style="width:100%;height:36px;border-radius:5px;border-style:groove;">
          <br><br><label>Product Quantity: <br></label>
          <input type="text" name="name" placeholder="Enter product quantity" value="<?php echo $row['product_Qty']; ?>" style="width:100%;height:36px;border-radius:5px;border-style:groove;">
          <br><br><label>Product Description:<br></label>
          <textarea name="description" rows="3" cols="40" style="border-radius:6px;width:100%;border-radius:5px;border-style:groove;"><?php echo $row['product_Description']; ?></textarea>

          <br><br><input type="submit" name="updatebtn" value="Update" style="background-color: #21759b;border-radius:7px;border-color:#298cba;float:right;color:white;">

        </fieldset>
      </form>
    </div>

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

  <script>
    var preloader = document.getElementById('loading');

    function myFunction() {
      preloader.style.display = 'none'
    }
  </script>

</body>

</html>