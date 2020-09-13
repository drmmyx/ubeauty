<?php
session_start();
include('dbconfig.php');
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Shop All - UBEAUTY</title>
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
	<style>
		/* Set a style for all buttons */
		button {
			color: black;
			font-size: 30px;
			border: none;
			cursor: pointer;
			float: right;
		}

		/* Float yes and no buttons and add an equal width */
		.yesbtn,
		.nobtn {
			float: left;
			width: 50%;
		}

		/* Add a color to the yes button */
		.yesbtn {
			background-color: #ccc;
			color: black;
		}

		/* Add a color to the no button */
		.nobtn {
			background-color: #f44336;
		}

		/* Add padding and center-align text to the container */
		.container_a {
			padding: 45px;
			text-align: center;
		}

		/* The Modal (background) */
		.modal {
			display: none;
			/* Hidden by default */
			position: relative;
			/* Stay in place */
			width: 100%;
			/* Full width */
			height: 100%;
			/* Full height */
			overflow: auto;
			/* Enable scroll if needed */
			background-color: #474e5d;

		}

		/* Modal Content/Box */
		.modal-content {
			background-color: #fefefe;
			margin: 1% auto 5% auto;
			/* 1% from the top, 5% from the bottom and centered */
			border: 1px solid #888;
			width: 100%;
			/* Could be more or less, depending on screen size */
		}


		/* The Modal Close Button (x) */
		.close {
			position: absolute;
			right: 35px;
			top: 15px;
			font-size: 40px;
			font-weight: bold;
			color: black;
		}

		.close:hover,
		.close:focus {
			color: #f44336;
			cursor: pointer;
		}

		/* Clear floats */
		.clearfix::after {
			content: "";
			clear: both;
			display: table;
		}

		/* Change styles for yes button and  button on extra small screens */
		@media screen and (max-width: 300px) {

			.yesbtn,
			.nobtn {
				width: 100%;
			}
		}

		*/
	</style>
</head>

<body>

	<div class="site-wrap">
		<?php include 'header.php'; ?>


		<div class="bg-light py-3">
			<div class="container">
				<div class="row">
					<div class="col-md-12 mb-0"><a href="index.php">Home</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Wishlist</strong></div>
				</div>
			</div>
		</div>

		<div class="site-section">
			<div class="container">

				<div class="row mb-5">
					<div class="col-md-9 order-2">

						<div class="row">
							<div class="col-md-12 mb-5">
								<div class="float-md-left mb-4">
									<h2 class="text-black h5">Wishlist</h2>
								</div>
							</div>
						</div>
						<form>
							<?php
							$id = $_GET['product_ID'];
							$sql = "SELECT * FROM `product` WHERE product_ID=$id";
							$result = $conn->query($sql);
							if ($result->num_rows > 0) {
								// output data of each row
								while ($row = $result->fetch_assoc()) {

							?>
									<div class="row mb-5">

										<div id="id01" class="modal">
											<form class="modal-content" action="/action_page.php">
												<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">×</span>
												<div class="container_a">
													<h4>Confirm remove this wishlist item?</h4>
													<div class="clearfix">
														<button type="button" onclick="document.getElementById('id01').style.display='none'" class="yesbtn">Yes</button>
														<button type="button" onclick="document.getElementById('id01').style.display='none'" class="nobtn">No</button>
													</div>
												</div>
											</form>
										</div>

										<div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
											<div class="block-4 text-center border">
												<button name="delete_from_WL">&#215 </button>
												<!-- <button name="delete_from_WL" onclick="document.getElementById('id01').style.display='block'">&#215 </button> -->

												<figure class="block-4-image">
													<a href="product.php?product_ID=<?php echo $row['product_ID']; ?>">
														<img src="<?php echo $row['product_Image']; ?>" alt="Image placeholder" class="img-fluid">
													</a>
												</figure>
												<div class="block-4-text p-4">
													<h3><a href="product.php?product_ID=<?php echo $row['product_ID']; ?>"><?php echo $row['product_Brand']; ?></a></h3>
													<p class="mb-0"><?php echo $row['product_Name']; ?></p>
													<!-- <p class="text-primary font-weight-bold" style="text-decoration:line-through">RM89.00</p> -->
													<p class="text-primary font-weight-bold">RM <?php echo $row['product_Price']; ?></p>
												</div>
											</div>
										</div>

										<!-- <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
									<div class="block-4 text-center border">
										<button onclick="document.getElementById('id01').style.display='block'">&#215 </button>
										<figure class="block-4-image">
											<a href="Eyemask_Au Fairy Bye-Bye.php"><img src="image/eyemask/Au Fairy Bye-Bye, Panda Eyes! Anti-Wrinkle Brightening Eye Mask.png" alt="Image placeholder" class="img-fluid"></a>
										</figure>
										<div class="block-4-text p-4">
											<h3><a href="Eyemask_Au Fairy Bye-Bye.php">AU FAIRY</a></h3>
											<p class="mb-0">Bye-Bye, Panda Eyes! Anti-Wrinkle Brightening Eye Mask</p>
											<p class="text-primary font-weight-bold" style="text-decoration:line-through">RM49.00</p>
											<p class="text-primary font-weight-bold">RM35.00</p>
										</div>
									</div>-->
									</div>
							<?php
								}
							}
							?>
						</form>
					</div>

				</div>
			</div>

		</div>
	</div>


	</div>
	<?php include 'footer.php'; ?>
	<script>
		// Get the modal
		var modal = document.getElementById('id01');

		// When the user clicks anywhere outside of the modal, close it
		window.onclick = function(event) {
			if (event.target == modal) {
				modal.style.display = "none";
			}
		}
	</script>
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