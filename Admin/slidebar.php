<?php
include('session.php');
$_SESSION['pageStore'] = "overview.php";

//if(!isset($_SESSION['login_id']))
//{
//	header("location: login.php"); //Redirecting to login page 
//}

?>

<nav class="fd-sidebar fd-collapse fd-white fd-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="fd-container fd-row">
    <div class="fd-col s4">
      <img src="image/admin1.png" class="fd-circle fd-margin-right" style="width:46px">
    </div>
    <div class="fd-col s8 fd-bar">
      <span>Welcome, <strong><?php echo $session_fullName; ?></strong></span>
      <a href="editprofit.php"><i class="fa fa-github-alt" style="font-size:24px;"></i></a>


    </div>
  </div>
  <hr>
  <div class="fd-container">

  </div>
  <div class="fd-bar-block">
    <a href="overview.php" class="fd-bar-item fd-button fd-padding"><i class="fa fa-users fa-fw"></i>Overview</a>
    <a href="addproduct.php" class="fd-bar-item fd-button fd-padding"><i class="fa fa-plus-circle"></i>  Adds</a>
    <a href="productlist.php" class="fd-bar-item fd-button fd-padding"><i class="fa fa-edit fa-fw"></i>Edits</a>
    <a href="viewproduct.php" class="fd-bar-item fd-button fd-padding"><i class="fa fa-eye fa-fw"></i>Views</a>
    <a href="logout.php" class="fd-bar-item fd-button fd-padding"><i class="fa fa-sign-out"></i>Sign Out</a><br><br>
  </div>
</nav>