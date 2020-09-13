<?php

include('session.php');
$_SESSION['pageStore'] = "overview.php";

if (!isset($_SESSION['login_id'])) {
  header("location: login.php"); //Redirecting to login page 
}

?>
<!DOCTYPE html>
<html>
<title>UBEAUTY Admin</title>
<link rel="shortcut icon" type="image/jpeg" href="image/logo1.jpeg">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="Css/admincss.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <!--<header class="fd-container" style="padding-top:5px">
      <h3><b>Add Product</b></h3>
    </header>-->
    <style>
      .collapse-panel {
        display: block;
        vertical-align: top;
        height: auto !important;
      }

      .collapse-panel a {
        font-family: "Lucida Console", Monaco, monospace;
        font-size: 16pt;
        font-weight: bolder;
        text-decoration: none;
      }

      .collapse-panel-content {
        display: none;
        height: auto;
      }

      .show {
        display: none;
      }

      .hide:target+.show {
        display: inline;
      }

      .hide:target {
        display: none;
      }

      .hide:target~.collapse-panel-content {
        display: inline;
      }
    </style>
    <div>
      <div>
        <div class="collapse-panel">
          <a href="#hide1" class="hide" id="hide1" style="font-size:25px; padding-top:5px;">+</a>
          <a href="#show1" class="show" id="show1" style="font-size:25px; padding-top:5px;">-</a>
          <span style="font-size:25px;">Add Category</span>
          <div class="collapse-panel-content">
            <div style="padding:10px;">
              <form name="menu" method="post" action="">
                <fieldset style="padding:2%">
                  <label>Category ID:
                    <input type="text" name="id" required placeholder="Enter category id" style="height: 25px;border-radius: 4px;width: 15%;">
                  </label>
                  <br><br><label>Category Name: <br></label>
                  <input type="text" name="name" required placeholder="Enter category name" style="width:100%;height:36px;border-radius:5px;">

                  <br><br><input type="submit" name="submitbtn" value="Submit" style="background-color: #21759b;border-radius:7px;border-color:#298cba;float:right;color:white;">

                </fieldset>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div>
      <div>
        <div class="collapse-panel">
          <a href="#hide2" class="hide" id="hide2" style="font-size:25px;">+</a>
          <a href="#show2" class="show" id="show2" style="font-size:25px;">-</a>
          <span style="font-size:25px;">Add Product</span>
          <div class="collapse-panel-content">
            <div>
              <div>
                <div style="padding:10px;">
                  <form name="menu" method="post" action="">
                    <fieldset style="padding:2%">
                      <label>Product ID:
                        <input type="text" name="id" required placeholder="Enter product id" style="height: 25px;border-radius: 4px;width: 15%;">
                      </label>
                      <br><br><label>Upload product image: <br></label>
                      <input type="file" name="image" required>
                      <br><br><label>Product Category: <br></label>
                      <select name="category" size="1" style="width:100%;border-radius:5px;height:30px;" required>
                        <option value="2">FaceMask</option>
                        <option value="1">Lip Mask</option>
                        <option value="3">Eye Mask</option>
                      </select>
                      <br><br><label>Product Name: <br></label>
                      <input type="text" name="name" required placeholder="Enter product name" style="width:100%;height:36px;border-radius:5px;">
                      <br><br><label>Product Brand: <br></label>
                      <input type="text" name="brand" style="width:100%;height:36px;border-radius:5px;" required>
                      <br><br><label>Product Package: <br></label>
                      <input type="text" name="package" style="width:100%;height:36px;border-radius:5px;" required>
                      <br><br><label>Product Price: <br></label>
                      <input type="text" name="price" placeholder="RM" style="width:100%;height:36px;border-radius:5px;" required>
                      <br><br><label>Product Stock: <br></label>
                      <input type="text" name="stock" value="99" style="width:100%;height:36px;border-radius:5px;" required>
                      <br><br><label>Product Description:<br></label>
                      <textarea name="description" rows="3" cols="40" placeholder="Description......" style="border-radius:6px;width:100%;border-radius:5px;" required></textarea>

                      <br><br><input type="submit" name="submitbtn" value="Submit" style="background-color: #21759b;border-radius:7px;border-color:#298cba;float:right;color:white;">

                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
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
  </script>

  <script>
    var preloader = document.getElementById('loading');

    function myFunction() {
      preloader.style.display = 'none'
    }
  </script>

</body>

</html>
<?php
if (isset($_POST["submitbtn"])) {
  $pid = $_POST["id"];
  $pimage = $_POST["image"];
  $pcategory = $_POST["category"];
  $pprice = $_POST["price"];
  $pdescription = $_POST["description"];
  $pname = $_POST["name"];
  mysqli_query($conn, "INSERT INTO product(product_ID, product_Image, product_Description, product_Price, category_ID, product_Name)VALUES('$pid','$pimage', '$pdescription', '$pprice', '$pcategory', '$pname')");
?>
  <script type="text/javascript">
    alert("<?php echo $pname; ?> saved");
  </script>
<?php
}
?>