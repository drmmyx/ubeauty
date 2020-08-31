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
#loading{position: fixed;width: 100%;height: 100vh;background: white url('image/loading.gif') no-repeat center;z-index:99999;}
</style>
<body class="fd-light-grey" onload="setTimeout(myFunction, 2000);">
<div id="loading"></div>
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
    <h5>Dashboard</h5>
  </div>
  <div class="fd-bar-block">
    <a href="overview.php" class="fd-bar-item fd-button fd-padding fd-blue"><i class="fa fa-users fa-fw"></i>Overview</a>
    <a href="addproduct.php" class="fd-bar-item fd-button fd-padding"><i class="fa fa-plus-circle"></i>  Adds</a>
    <a href="editproduct.php" class="fd-bar-item fd-button fd-padding"><i class="fa fa-edit fa-fw"></i>Edits</a>
    <a href="viewproduct.php" class="fd-bar-item fd-button fd-padding"><i class="fa fa-eye fa-fw"></i>Views</a>
    <a href="login.php" class="fd-bar-item fd-button fd-padding"><i class="fa fa-sign-out"></i>Sign Out</a><br><br>
  </div>
</nav>

<!-- !PAGE CONTENT! -->
<div class="fd-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="fd-container" style="padding-top:22px">
    <h3><b>My Dashboard</b></h3>
  </header>

  <div class="fd-row-padding fd-margin-bottom">
    <div class="fd-quarter">
      <div class="fd-container fd-red fd-padding-16">
	  <div class="fd-left"><i class="fas fa-grin-beam fd-xxxlarge"></i></div>
        <div class="fd-right">
          <h3>9</h3>
        </div>
        <div class="fd-clear"></div>
        <h4>Eyemask</h4>
      </div>
    </div>
    <div class="fd-quarter">
      <div class="fd-container fd-blue fd-padding-16">
	  <div class="fd-left"><i class="fas fa-grin-hearts fd-xxxlarge"></i></div>
        <div class="fd-right">
          <h3>25</h3>
        </div>
        <div class="fd-clear"></div>
        <h4>Facemask</h4>
      </div>
    </div>
    <div class="fd-quarter">
      <div class="fd-container fd-teal fd-padding-16">
	  <div class="fd-left"><i class="fas fa-smile-wink fd-xxxlarge"></i></div>
        <div class="fd-right">
          <h3>6</h3>
        </div>
        <div class="fd-clear"></div>
        <h4>Lipmask</h4>
      </div>
    </div>	

	<a href="viewproduct.php"><div class="fd-quarter">
      <div class="fd-container fd-orange fd-text-white fd-padding-16">
        <div class="fd-left"><i class="fa fa-eye fd-xxxlarge"></i></div>
        <div class="fd-right">
          <h3>72</h3>
        </div>
        <div class="fd-clear"></div>
        <h4>View All</h4>
      </div>
    </div></a>
  </div>

  <hr>
  <div class="fd-container">
    <h5>Mask Sales Report</h5>
    <p>Eyemask</p>
    <div class="fd-grey">
      <div class="fd-container fd-center fd-padding fd-blue" style="width:35%">35%</div>
    </div>

    <p>Lunch</p>
    <div class="fd-grey">
      <div class="fd-container fd-center fd-padding fd-blue" style="width:67%">67%</div>
    </div>

    <p>Dinner</p>
    <div class="fd-grey">
      <div class="fd-container fd-center fd-padding fd-blue" style="width:20%">20%</div>
    </div>
  </div>
  <hr>

  <div class="fd-container">
    <h5>Area</h5>
    <table class="fd-table fd-striped fd-bordered fd-border fd-hoverable fd-white">
      <tr>
        <td>Selangor</td>
        <td>27%</td>
      </tr>
      <tr>
        <td>Negeri Sembilan</td>
        <td>10%</td>
      </tr>
      <tr>
        <td>Johor Bahru</td>
        <td>9%</td>
      </tr>
      <tr>
        <td>Malacca</td>
        <td>11%</td>
      </tr>
      <tr>
        <td>Pahang</td>
        <td>13%</td>
      </tr>
      <tr>
        <td>Kelantan</td>
        <td>20%</td>
      </tr>
	  <tr>
        <td>Terengganu</td>
        <td>10%</td>
      </tr>
    </table>
  </div>
  <hr>

  <br>
  <div class="fd-container fd-dark-grey fd-padding-32">
    <div class="fd-row">
      <div class="fd-container fd-third">
        <h5 class="fd-bottombar fd-border-blue">Website</h5>
        <p><a href="../index.php" target="_blank" style="text-decoration:none;">Home</a></p>
        <p><a href="../shop1.php" target="_blank" style="text-decoration:none;">Shop</a></p>
        <p><a href="../sales.php" target="_blank" style="text-decoration:none;">Sales</a></p>
      </div>
      <div class="fd-container fd-third">
        <h5 class="fd-bottombar fd-border-blue">Our Details</h5>
	   <p><a href="../about.php" target="_blank" style="text-decoration:none;">About Us</a></p>
      </div>
      <div class="fd-container fd-third">
        <h5 class="fd-bottombar fd-border-blue">Contact & Share</h5>
        <p><a href="../contact.php" target="_blank" style="text-decoration:none;">Contact Us</a></p>
        <p><a href="#" style="text-decoration:none;">More</a></p>
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
	
	function myFunction(){
		preloader.style.display = 'none'
	}
	
</script>

</body>
</html>
