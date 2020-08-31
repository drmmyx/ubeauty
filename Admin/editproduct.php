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
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
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
      <span>Welcome, <strong>Alicia</strong></span><br>
      
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
    <h3><b>Product List</b></h3>
  </header>

<div style="padding:10px;">

<table id="customers">
  <tr>
    <th>Name</th>
    <th>Category</th>
    <th>Price</th>
    <th>Date</th>
  </tr>
  
  <tr>
    <td style="color:#21759b;"><a href="editproduct1.php" style="text-decoration:none;">JM Solution Honey Luminous Royal Propolis Mask</a></td>
    <td>Facemask</td>
    <td>RM 75.00</td>
    <td>1 July 2020</td>
  </tr>
  
   <tr>
    <td style="color:#21759b;"><a href="editproduct2.php" style="text-decoration:none;">Laneige Lip Sleeping Mask[Berry] 20g</a></td>
    <td>Lipmask</td>
    <td>RM 65.00</td>
    <td>25 Jun 2020</td>
  </tr>
  
   <tr>
    <td style="color:#21759b;"><a href="editproduct3.php" style="text-decoration:none;">A'pieu Real Big Yogurt One-Bottle [Apple]</a></td>
    <td>Facemask</td>
    <td>RM 3.45</td>
    <td>17 Aug 2020</td>
  </tr>
  
  <tr>
    <td style="color:#21759b;"><a href="editproduct4.php" style="text-decoration:none;">Jayjun Eye Gel Patch 1.4g</a></td>
    <td>Eyemask</td>
    <td>RM 80.00</td>
    <td>5 Aug 2020</td>
  </tr>
  


</table>
<p>Total result: 4</p>
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
