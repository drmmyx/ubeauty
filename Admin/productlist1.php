<?php
include('../dbconfig.php');
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
<script type="text/javascript">
  function confirmation() {
    var result;
    result = confirm("Do you want to delete this product");
    return result;
  }
</script>

<body class="fd-light-grey">

  <!-- Top container -->
  <div class="fd-bar fd-top fd-pink fd-large" style="z-index:4">
    <span class="fd-bar-item fd-left"><img src="image/logo1.jpeg" style="width:29px"> UBEAUTY</span>
  </div>

  <!-- Sidebar/menu -->
  <?php include 'slidebar.php'; ?>

  <!-- !PAGE CONTENT! -->
  <div class="fd-main" style="margin-left:300px;margin-top:43px;">

    <!-- Header -->
    <header class="fd-container" style="padding-top:22px">
      <h3><b>Product List</b></h3>
    </header>

    <div style="padding:10px;">

      <table id="customers">
        <tr>
          <th>ID</th>
          <th>Name</th>
          <th>Brand</th>
          <th>Price</th>
          <th>Stock</th>
          <th>Edit</th>
          <th>Delete</th>
        </tr>

        <?php

        $result = mysqli_query($conn, "SELECT * from product where product_isDeleted = 0");
        $count = mysqli_num_rows($result);

        while ($row = mysqli_fetch_assoc($result)) {
        ?>
          <tr>
            <td><?php echo $row['product_ID']; ?></td>
            <td style="color:#21759b;"><a href="" style="text-decoration:none;"><?php echo $row['product_Name']; ?></a></td>
            <td><?php echo $row['product_Brand']; ?></td>
            <td><?php echo $row['product_Price']; ?></td>
            <td><?php echo $row['product_Qty']; ?></td>
            <td><a href="product(edit).php?product_ID=<?php echo $row['product_ID']; ?>">Edit</a></td>
            <td><a href="productlist.php?id=<?php echo $row['product_ID']; ?>" onclick="return confimation();">Delete</a></td>
          </tr>
        <?php
        }
        ?>

        <?php
        //remove product from product list
        if (isset($_GET["id"])) {

          $pid = $_GET["id"];
          //update product table and set product_isDelete to 1
          mysqli_query($conn, "UPDATE product SET product_isDeleted=1 where product_ID='$pid'");
          //header("Location:product(list).php");
        }
        ?>

      </table>
      <p>Total result: <?php echo $count; ?></p>
    </div>


    <br><br><br><br><br><br><br><br><br><br><br><br>
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

</body>

</html>