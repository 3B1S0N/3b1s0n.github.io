<!DOCTYPE html>
<html lang="en">

<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	
	<!-- DESCRIPTION -->
	<meta name="description" content="Go Inside" />
	
	<!-- OG -->
	<meta property="og:title" content="Go Inside" />
	<meta property="og:description" content="Go Inside" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- PAGE TITLE HERE ============================================= -->
	<title>GoInside Register </title>
	
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	
	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="../LoginAssets/assets/css/assets.css">
	
	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="../LoginAssets/assets/css/typography.css">
	
	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="../LoginAssets/assets/css/shortcodes/shortcodes.css">
	
	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="../LoginAssets/assets/css/style.css">
	<link class="skin" rel="stylesheet" type="text/css" href="../LoginAssets/assets/css/color/color-1.css">
	
</head>
<body id="bg">
<div class="page-wraper">
	<div id="loading-icon-bx"></div>
	<div class="account-form">
		<div class="account-head">
			<a href="../index.php"><img src="../LoginAssets/images/sideborder.jpg" style = "height:900px"   alt=""></a>
		</div>
		<div class="account-form-inner">
			<div class="account-container">
				<div class="heading-bx left">
					<h2 class="title-head">Sign Up <span>Now</span></h2>
					<p>Login To Your Account <a href="login.php">Click here</a></p>
				</div>	
				<!-- INSERT FORM ACTION HERE -->
				<form class="contact-bx" action="./registerProcessor.php" method="POST">
					<div class="row placeani">
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>First Name</label>
									<input name="fname" type="text" required="" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Last Name</label>
									<input name="lname" type="text" required="" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Address</label>
									<input name="address" type="text" required="" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Country</label>
									<input name="country" type="text" required="" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>City</label>
									<input name="city" type="text" required="" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Phone Number</label>
									<input name="contact" type="tel" required="" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group">
									<label>Your Email Address</label>
									<input name="email" type="email" required="" class="form-control">
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group"> 
									<label>Your Password</label>
									<input name="password" type="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
								</div>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="form-group">
								<div class="input-group"> 
									<label>Confirm Password</label>
									<input name="confirmPassword" type="password" class="form-control" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
								</div>
							</div>
						</div>
						<div class="col-lg-12 m-b30">
							<button name="submit" type="submit" value="Submit" class="btn button-md">Sign Up</button>
						</div>
						
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- External JavaScripts -->
<script src="../LoginAssets/assets/js/jquery.min.js"></script>
<script src="../LoginAssets/assets/vendors/bootstrap/js/popper.min.js"></script>
<script src="../LoginAssets/assets/vendors/bootstrap/js/bootstrap.min.js"></script>
<script src="../LoginAssets/assets/vendors/bootstrap-select/bootstrap-select.min.js"></script>
<script src="../LoginAssets/assets/vendors/bootstrap-touchspin/jquery.bootstrap-touchspin.js"></script>
<script src="../LoginAssets/assets/vendors/magnific-popup/magnific-popup.js"></script>
<script src="../LoginAssets/assets/vendors/counter/waypoints-min.js"></script>
<script src="../LoginAssets/assets/vendors/counter/counterup.min.js"></script>
<script src="../LoginAssets/assets/vendors/imagesloaded/imagesloaded.js"></script>
<script src="../LoginAssets/assets/vendors/masonry/masonry.js"></script>
<script src="../LoginAssets/assets/vendors/masonry/filter.js"></script>
<script src="../LoginAssets/assets/vendors/owl-carousel/owl.carousel.js"></script>
<script src="../LoginAssets/assets/js/functions.js"></script>
<script src="../LoginAssets/assets/js/contact.js"></script>
<script src='../LoginAssets/assets/vendors/switcher/switcher.js'></script>
</body>

</html>
