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
    <h5>Product Status</h5>
  </div>
  <div class="fd-bar-block">
    <a href="overview.php" class="fd-bar-item fd-button fd-padding"><i class="fa fa-users fa-fw"></i>Overview</a>
    <a href="addproduct.php" class="fd-bar-item fd-button fd-padding"><i class="fa fa-plus-circle"></i>  Adds</a>
    <a href="editproduct.php" class="fd-bar-item fd-button fd-padding"><i class="fa fa-edit fa-fw"></i>Edits</a>
    <a href="viewproduct.php" class="fd-bar-item fd-button fd-padding fd-blue"><i class="fa fa-eye fa-fw"></i>Views</a>
    <a href="login.php" class="fd-bar-item fd-button fd-padding"><i class="fa fa-sign-out"></i>Sign Out</a><br><br>
  </div>
</nav>

<!-- !PAGE CONTENT! -->
<div class="fd-main" style="margin-left:300px;margin-top:43px;">

<!-- Header -->
  <header class="fd-container" style="padding-top:22px">
    <h3><b>Product Status</b></h3>
  </header>

<div style="padding:10px;">

<table id="customers">
  <tr>
    <th>Order Name</th>
    <th>Status</th>
    <th>Order Date & Time</th>
    <th>Customer</th>
    <th>Address</th>
    <th>Cost</th>
    <th>Quantity</th>
    <th>Shipping Status</th>
  </tr>
  
  <tr>
    <td>JM Solution Honey Luminous Royal Propolis Mask</td>
    <td style="color:green;">Paid</td>
    <td>4 July 2020 14:10:21</td>	
    <td>Marry</td>	
    <td>Lot PTB 17648, Jalan Langkasuka, Johor Bahru,80350 Larkin, Johor, Malaysia</td>	
    <td>75.00</td>	
    <td style="text-align:center;">1</td>	
    <td style="color:green;text-align:center;">Shipping</td>
  </tr>

  <tr>
    <td>Nature Republic Aqua Collagen Solution Hydrogel Eye Patch</td>
    <td style="color:green;">Paid</td>
    <td>20 Jun 2020 13:49:34</td>	
    <td>Alice</td>	
    <td>75 Kg Sg Ramal Luar, 43000 Kajang, Selangor, Malaysia</td>	
    <td>46.50</td>	
    <td style="text-align:center;">5</td>
    <td style="color:green;text-align:center;">Shipped</td>	
  </tr>

  <tr>
    <td>Klavuu Nourishing Care Lip Sleeping Mask</td>
    <td style="color:red;">Cancel</td>
    <td>12 July 2020 19:34:47</td>	
    <td>Chloe</td>	
    <td>No.123-12, Jalan Ayer Keroh,<br> 75450, Melaka, Malaysia</td>	
    <td>94.00</td>	
    <td style="text-align:center;">2</td>	
    <td style="color:red;text-align:center;"></td>
  </tr>

  <tr>
    <td>Dr.Morita Q10 Repairing And Firming Facial Mask</td>
    <td style="color:red;">Pending</td>
    <td>23 Jun 2020 12:57:54</td>	
    <td>Sunnie</td>	
    <td>PT 179-184, Jalan Sultan Yahya Petra Lundang, 15150 Kota Bharu, Kelantan</td>	
    <td>60.00</td>	
    <td style="text-align:center;">3</td>	
    <td style="color:red;text-align:center;">Pending</td>
  </tr>

  <tr>
    <td>Mirae Ex8 Minutes Instant Soothing Mask</td>
    <td style="color:green;">Paid</td>
    <td>22 July 2020 19:11:21</td>	
    <td>Apple</td>	
    <td>Lot PT 1547 & PT Jalan Sultan Mohamad, Kuala Terengganu 21000 Malaysia</td>	
    <td>31.90</td>	
    <td style="text-align:center;">1</td>	
    <td style="color:green;text-align:center;">Shipping</td>
  </tr>

  <tr>
    <td>Petitfee Black Pearl & Gold Hydrogel Eyepatch </td>
    <td style="color:green;">Paid</td>
    <td>21 Jun 2020 10:04:54</td>	
    <td>Yuki</td>	
    <td>No A-7 (GF) Lorong Tun Ismail 6, 25000 Kuantan, Pahang</td>	
    <td>148.00</td>	
    <td style="text-align:center;">2</td>	
    <td style="color:green;text-align:center;">Shipping</td>
  </tr>


</table>
<p>Total result: 6</p>
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

</body>
</html>
