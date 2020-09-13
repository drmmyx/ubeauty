<?php
// session_start();
include('dbconfig.php');

?>
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
                    <div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">User Profit</strong></div>
                </div>
            </div>
        </div>

        <div class="site-section">
            <div class="container">
                <div class="row">
                    <!-- <div class="col-md-12">
                        <h2 style=" font-size:40px;" class="h3 mb-3 text-black">User Profit</h2>
                    </div> -->
                    <form method="post" class="col-md-12">
                        <div class="col-md-10 mb-5 mb-md-0 col-md-12">
                            <h2 class="h3 mb-3 text-black">User Profit</h2>
                            <div class="p-3 p-lg-5 border">

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label class="text-black">First Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="c_fname" name="c_fname">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="text-black">Last Name <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="c_lname" name="c_lname">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label class="text-black">Company Name </label>
                                        <input type="text" class="form-control" id="c_diff_companyname" name="c_diff_companyname">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-12">
                                        <label class="text-black">Address <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="c_address" name="c_address">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class="col-md-6">
                                        <label class="text-black">State / Country <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="c_state_country" name="c_state_country">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="text-black">Postcode / Zip <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="c_postal_zip" name="c_postal_zip">
                                    </div>
                                </div>

                                <div class="form-group row mb-5">
                                    <div class="col-md-6">
                                        <label class="text-black">Email Address <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="c_email_address" name="c_email_address">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="text-black">Phone <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control" id="c_phone" name="c_phone" placeholder="Phone Number">
                                    </div>

                                </div>

                                <div class="form-group row">
                                    <div class="col-lg-12">
                                        <input type="submit" class="btn btn-primary btn-lg btn-block" value="Submit" id="submitbtn" name="submitbtn">
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
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

<?php
if (isset($_POST['submitbtn'])) {
    $fname = $_POST['c_fname'];
    $lname = $_POST['c_lname'];
    $company = $_POST['c_diff_companyname'];
    $address = $_POST['c_address'];
    $state = $_POST['c_state_country'];
    $postcode = $_POST['c_postal_zip'];
    $email = $_POST['c_email_address'];
    $phone = $_POST['c_phone'];

    mysqli_query($conn, "INSERT INTO customer(first_name, last_name, company_name, address, state, postcode, phone)
    VALUES('$fname','$lname', '$company', '$address', '$state', '$postcode', '$email', '$phone')");

?>
    <script type="text/javascript">
        alert("Profile saved");
    </script>
<?php
}
?>