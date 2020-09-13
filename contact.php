<!DOCTYPE html>
<html lang="en">

<head>
  <title>Contact Us</title>
  <link rel="shortcut icon" type="image/jpeg" href="image/logo1.jpeg">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">
  <link rel="stylesheet" href="css/jquery-ui.css">
  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">


  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/style.css">

  <!-- <link rel="stylesheet" href="login.css"> -->

</head>

<body>

  <div class="site-wrap">
    <?php include 'header.php'; ?>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Contact</strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 style="font-family:Franklin Gothic Heavy;font-size:40px;font-style:italic;" class="h3 mb-3 text-black">Get In Touch</h2>
          </div>
          <div class="col-md-7">

            <!-- <div class="center">
              <input type="checkbox" id="show">
              <label for="show" class="show-btn">View Form</label>

              <div class="container">
                <label for="show" class="close-btn fas fa-times" title="close"></label>
                <div class="text">Login Form</div>

                <form action="#">
                  <div class="data">
                    <label>Email Address</label>
                    <input type="text" required>
                  </div>
                  <div class="data">
                    <label>Password</label>
                    <input type="password" required>
                  </div>
                  <div class="forgot-pass">
                    <a href="forget_password.php">Forgot Password?</a>
                  </div>
                  <div class="btn">
                    <div class="inner">
                    </div>
                    <button type="submit">login</button>
                  </div>
                  <div class="signup-link">
                    Don't have an account? <a href="signup.php">Signup Here</a>
                  </div>
                </form>

              </div>

            </div> -->
            <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
              Launch demo modal
            </button> -->
            <!-- <button class="icon icon-person" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal"></button>

            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="align-ite">
              <div class="modal-dialog" role="document" style="position:fixed; top:50%; left:50%; margin-top:-50px; margin-left:-100px;">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form>
                      Email Address:
                      <br><input type="email" name="email">
                      <br>
                      Password:
                      <br><input type="password" namae="password">
                    </form>
                  </div>
                  <div class="modal-footer">
                    <-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> 
                    <button type="button" class="btn btn-primary">Login</button>
                  </div>
                </div>
              </div>
            </div> -->

            <form action="#" method="post">

              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" style="font-family:Kristen ITC" class="text-black">First Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_fname" name="c_fname" required>
                  </div>
                  <div class="col-md-6">
                    <label for="c_lname" style="font-family:Kristen ITC" class="text-black">Last Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="c_lname" name="c_lname" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_email" style="font-family:Kristen ITC" class="text-black">Email Address <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" id="c_email" name="c_email" placeholder="example@gmail.com" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_subject" style="font-family:Kristen ITC" class="text-black">Mobile number </label>
                    <input type="text" class="form-control" id="c_subject" name="c_subject">
                  </div>
                </div>

                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_message" style="font-family:Kristen ITC" class="text-black">Description </label>
                    <textarea name="c_message" id="c_message" cols="30" rows="7" class="form-control"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" class="btn btn-primary btn-lg btn-block" value="Send Message">
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php include 'footer.php'; ?>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>

</body>

</html>