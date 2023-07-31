<?php
if (isset($_POST["submit"])) {
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$from = 'Contact Form';
	$to = 'example@example.com';
	$subject = $_POST['subject'];

	$body = "From: $name\n E-Mail: $email\n Subject: $subject\n Message:\n $message";


	mail($to, $subject, $body, $from);
}

?>

<!DOCTYPE HTML>
<html lang="pt-br">

<head>
	<meta charset="UTF-8">
	<title>Your Mail Has Been Send Successfully.</title>
	<!-- Google Font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="assets/bootstrap/css/bootstrap.min.css" />
	<!-- Fontawesome -->
	<link href="assets/fontawesome/css/fontawesome.css" rel="stylesheet">
	<link href="assets/fontawesome/css/brands.css" rel="stylesheet">
	<link href="assets/fontawesome/css/solid.css" rel="stylesheet">
	<!-- slicknav -->
	<link rel="stylesheet" type="text/css" href="assets/css/slicknav.css" />
	<!-- Style -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css" />
	<!-- Responsive -->
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css" />

</head>

<body>

	<!-- Start Header -->
	<header id="header-area">
		<div class="container-fluid">
			<div class="row d-flex align-items-center">
				<div class="col-xl-3 col-lg-3 col-4">
					<div class="site-logo">
						<a href="index.html"><img src="assets/img/logo.png" alt="robotix" /></a>
					</div>
				</div><!-- End Col -->

				<div class="col-xl-6 col-lg-6 col-8 text-center">
					<nav class="navigation">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="services.html">Service</a></li>
							<li><a href="shop.html">Shop</a></li>
							<li><a href="blog.html">Blog</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</nav>
					<div id="mobile_menu"></div>
				</div><!-- End Col -->

				<div class="col-xl-3 col-lg-3 col-12 text-end d-none  d-lg-block">
					<a href="#" class="don_btn"><i class="fa-regular fa-heart"></i> Donation</a>
				</div><!-- End Col -->
			</div>
		</div>
	</header>
	<!-- End Header -->

	<!-- Start Main Banner Area -->
	<section class="main-banner-area" style="background-image: url('assets/img/slider/sl_bg_1.jpg');">
		<div class="container">
			<div class="banner-content">
				<h2>Thank You</h2>
			</div>
		</div>
	</section>
	<!-- End Main Banner Area -->

	<section class="thankyou-text section-padding">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 col-sm-12 col-xs-12 text-center">
					<div class="hero-text">
						<h2>Your Mail Has Been Send Successfully.</h2>
						<a class="main_btn" href="index.html">Back To Home</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- End Footer -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-lg-3 col-md-6 col-12">
					<div class="single-footer">
						<div class="footer-about">
							<a href="index.html" class="site-logo"><img src="assets/img/logo.png" alt="robotix" /></a>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus,
								luctus nec ullamcorper mattis pulvinar.
							</p>
							<ul>
								<li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
								<li><a href="#"><i class="fa-brands fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
								<li><a href="#"><i class="fa-brands fa-youtube"></i></a></li>
							</ul>
						</div>
					</div>
				</div><!-- End Col -->

				<div class="col-xl-3 col-lg-3 col-md-6 col-12">
					<div class="single-footer">
						<h3>Our Services</h3>
						<ul>
							<li><a href="#">Quran Memorization</a></li>
							<li><a href="#">Help the Poor Children</a></li>
							<li><a href="#">Mosque Devolopment</a></li>
							<li><a href="#">Special Child Care</a></li>

						</ul>
					</div>
				</div><!-- End Col -->

				<div class="col-xl-3 col-lg-3 col-md-6 col-12">
					<div class="single-footer">
						<h3>Useful Links</h3>
						<ul>
							<li><a href="#">About Us</a></li>
							<li><a href="#">Services</a></li>
							<li><a href="#">Contact</a></li>
							<li><a href="#">Donate Us</a></li>

						</ul>
					</div>
				</div><!-- End Col -->

				<div class="col-xl-3 col-lg-3 col-md-6 col-12">
					<div class="single-footer">
						<h3>Our Services</h3>
						<ul>
							<li>
								<i class="fa-solid fa-location-arrow"></i> Cercas Bajas, 79 08140 Caldes de Montbui - Spain
							</li>

							<li>
								<i class="fa-solid fa-phone"></i> +82898769
							</li>

							<li>
								<i class="fa-solid fa-envelope"></i> hello@yourdomain.com
							</li>
						</ul>
					</div>
				</div><!-- End Col -->

				<div class="col-12">
					<div class="copyright text-center">
						<p>
							@ Copyright <span id="curyear"></span> , robotix , All Right Reserved
						</p>
					</div>
				</div><!-- End Col -->
			</div>
		</div>
	</footer>
	<!-- End Footer -->

	<!-- Start progress-wrap -->
	<div class="progress-wrap">
		<svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
			<path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
		</svg>
	</div>
	<!-- End progress-wrap -->

	<!-- Latest jQuery -->
	<script src='assets/js/jquery.js'></script>
	<script src='assets/js/jquery.slicknav.js'></script>
	<script src="assets/js/script.js"></script>

</body>

</html>