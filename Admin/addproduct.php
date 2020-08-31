<!DOCTYPE html>
<html>
<title>UBEAUTY Admin</title>
<link rel="shortcut icon" type="image/jpeg" href="image/logo1.jpeg">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="Css/admincss.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
    <h5>Add Product</h5>
  </div>
  <div class="fd-bar-block">
    <a href="overview.php" class="fd-bar-item fd-button fd-padding"><i class="fa fa-users fa-fw"></i>Overview</a>
    <a href="addproduct.php" class="fd-bar-item fd-button fd-padding fd-blue"><i class="fa fa-plus-circle"></i>  Adds</a>
    <a href="editproduct.php" class="fd-bar-item fd-button fd-padding"><i class="fa fa-edit fa-fw"></i>Edits</a>
    <a href="viewproduct.php" class="fd-bar-item fd-button fd-padding"><i class="fa fa-eye fa-fw"></i>Views</a>
    <a href="login.php" class="fd-bar-item fd-button fd-padding"><i class="fa fa-sign-out"></i>Sign Out</a><br><br>
  </div>
</nav>

<!-- !PAGE CONTENT! -->
<div class="fd-main" style="margin-left:300px;margin-top:43px;">

<!-- Header -->
  <header class="fd-container" style="padding-top:5px">
    <h3><b>Add Product</b></h3>
  </header>

<div style="padding:10px;">
<p style="font-style:italic;">Please fill up the information below.</p>
<form name="foodmenu">
		<fieldset style="padding:2%">
		<label>Upload product image: <br></label>
		<input type="file" name="food_picture" required>
		<br><br><label>Product Category: <br></label>
		<select name="food_category" size="1" style="width:100%;border-radius:5px;border-style:groove;height:30px;" required>
			<option value="FACE">FaceMask</option>
			<option value="LIP">Lip Mask</option>
			<option value="EYE">Eye Mask</option>
		</select>
		<br><br><label>Product Name: <br></label>
		<input type="text" name="food_name" required placeholder="Enter product name" style="width:100%;height:36px;border-radius:5px;border-style:groove;">
		<br><br><label>Product price: <br></label>
		<input type="text" name="food_price" placeholder="RM" style="width:100%;height:36px;border-radius:5px;border-style:groove;" required >	
		<br><br><label>Product Description:<br></label>
		<textarea name="food_introduction" rows="3" cols="40" placeholder="Description......" style="border-radius:6px;width:100%;border-radius:5px;border-style:groove;"></textarea>
		<br><br><label>Rating:<br></label>
		
			<input type="radio" name="rating" value=""> &nbsp <i class="fa fa-star"></i><br>
			<input type="radio" name="rating" value=""> &nbsp <i class="fa fa-star"></i><i class="fa fa-star"></i><br>
			<input type="radio" name="rating" value=""> &nbsp <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br>
			<input type="radio" name="rating" value=""> &nbsp <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><br>
			<input type="radio" name="rating" value=""> &nbsp <i class="fa fa-star"></i><i class="fa fa-star"><i class="fa fa-star"></i><i class="fa fa-star"></i></i><i class="fa fa-star"></i><br>
		<br><br><label>Promotion:</label>
		<input type="radio" name="promotion" value="Y"> Yes
		<input type="radio" name="promotion" value="N"> No
		<br><br><input type="submit" name="submitbtn" value="Submit" style="background-color: #21759b;border-radius:7px;border-color:#298cba;float:right;color:white;">
		
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

</script>

</body>
</html>
