<!doctype html>
<html lang="en-US">
<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="images/jpeg" href="image/logo1.jpeg">
  <title>Customer Profile</title>
  <link rel="stylesheet" href="Css/profile.css">
  <link rel="stylesheet" href="Css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
  <script>
  function send()
  {
	alert("Your profile are successfully saved !");
  }
  </script>
</head>
<style>
body{background-image: url("Image/admin-background2.jpg")}
#w{
    font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif !important;
    color: #313131 !important;
    font-size: 62.5% !important;
    line-height: 1 !important ;}
</style>

<body onload="setTimeout(myFunction, 2000);">

 <div class="fd-top">
  <div class="fd-bar fd-white fd-padding fd-card" style="letter-spacing:4px;border:4px solid ;border-radius:7px;background-color: pink;">
    <class="fd-bar-item fd-button" style="text-decoration:none;">UBEAUTY <img src="image/logo1.jpeg" style="width:40px; height:34px;">
  
  </div>
</div>

<br><br><br>
  <div id="w">
    <div id="content" class="clearfix" style="box-shadow: 7px 10px #f1f1f1;border-radius:5px;">
	<a href="overview.php"><i class="fa fa-arrow-circle-o-left" style="float:left;font-size:36px;"></i></a>
      <div id="userphoto"><img src="image/profile.jpg" alt="Customer Profile" style="width:150px;"></div>
      <h1 style="font-family:Algerian;">HI, Alicia</h1>

      <nav id="profiletabs">
        <ul class="clearfix">
          <li><a href="#bio" class="sel">Account Details</a></li>         
          <li><a href="#settings">Order Tracking</a></li>
		 <li><a href="#activity">History</a></li>
        </ul>
      </nav>
      
      <section id="bio">
        <p>Your profile details:</p>
        
        <p class="setting"><span>First Name <i class="fa fa-pencil-square-o" style="font-size:24px;"></i></span>
			<input type="text" name="first_name" placeholder="Enter your first name" value="Alicia">
		</p>
		
        <p class="setting"><span>Last Name <i class="fa fa-pencil-square-o" style="font-size:24px;"></i></span>
			<input type="text" name="last_name" placeholder="Enter your last name" value="Yee">
		</p>
        
        <p class="setting"><span>Email <i class="fa fa-pencil-square-o" style="font-size:24px;"></i></span> 
			<input type="text" name="email" placeholder="Enter your email address" value="aliciayee1029@gmail.com">
		</p>
        
        <p class="setting"><span>Contact Number <i class="fa fa-pencil-square-o" style="font-size:24px;"></i></span> 
			<input type="text" name="contact_number" placeholder="Enter your contact number" value="016-3478912">
		</p>
        
        <p class="setting"><span>Address <i class="fa fa-pencil-square-o" style="font-size:24px;"></i></span>
			<input type="text" name="address" placeholder="Enter your address" value="1st Floor, No.100-1, Jalan Junid, 75450, Melaka, Malaysia">
        </p>
		
		<p class="setting"><span>Password <i class="fa fa-pencil-square-o" style="font-size:24px;"></i></span> 
			<input type="text" name="password" placeholder="Enter your password" value="*********">
		</p>
	
	   <input type="submit" name="submitbtn" value="Save Profile" style="float:right;font-size:14px;" onclick="send()">
      </section>
      
      <section id="activity" class="hidden">
        <p>Order History:</p>
        
        <p class="activity">@22 Jun 2020 19:11:21 - Order Dr.Jart+ Dermask Soothing Hydra Solution &nbsp &nbsp &nbsp &nbsp Quantity - 1 &nbsp &nbsp &nbsp &nbsp Price - RM 55.00</p>
        
        <p class="activity">@21 Jun 2020 13:34:15 - Order Cherry Blossom Lip Mask &nbsp &nbsp &nbsp &nbsp Quantity - 2 &nbsp &nbsp &nbsp &nbsp Price - RM 19.80</p>
        
        <p class="activity">@20 Jun 2020 09:45:12 - Order JM Solution MAMA Pureness Firming Up Mask &nbsp &nbsp &nbsp &nbsp Quantity - 1 &nbsp &nbsp &nbsp &nbsp Price - RM 89.00</p>

        <p class="activity">@17 Jun 2020 16:56:43 - Order Nature Republic Snail Solution 10,000 Hydrogel Eye Patch &nbsp &nbsp &nbsp &nbsp Quantity - 3 &nbsp &nbsp &nbsp &nbsp Price - RM 33.60</p>

      </section>
      
      
      <section id="settings" class="hidden">
        <p>Order Tracking:</p>
        <table>
		
		<tr>
            <th style="font-size:15px !important;">Product Name</th>
            <th style="font-size:15px !important;">Status</th>
            <th style="font-size:15px !important;">Order Date & Time</th>
            <th style="font-size:15px !important;">Cost</th>
            <th style="font-size:15px !important;">Quantity</th>
          </tr>
		
          <tr>
            <td style="font-size:13px !important;">Cherry Blossom Lip Mask</td>
            <td style="font-size:13px !important;"><span style="color:green;">Shipping</span></td>
            <td style="font-size:13px !important;">22 July 2020 19:11:21</td>
            <td style="font-size:13px !important;">RM 19.80 </td>
            <td style="font-size:13px !important;"> 2 </td>

          </tr>

        </table>
      </section>
	  
    </div><!-- @end #content -->
  </div><!-- @end #w -->
<script type="text/javascript">
$(function(){
  $('#profiletabs ul li a').on('click', function(e){
    e.preventDefault();
    var newcontent = $(this).attr('href');
    
    $('#profiletabs ul li a').removeClass('sel');
    $(this).addClass('sel');
    
    $('#content section').each(function(){
      if(!$(this).hasClass('hidden')) { $(this).addClass('hidden'); }
    });
    
    $(newcontent).removeClass('hidden');
  });
});
</script>

</body>
</html>