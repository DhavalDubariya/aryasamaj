<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	
	<title>NexOut - Creative Ajax Portfolio Template</title>

	<!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="NexOut Theme">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php
    	include 'jcb/css.php';
    ?>
</head>
<body>
	<!-- Begin .wrap -->
	<div class="wrap">
		<!-- Begin .header -->
		<?php
			include 'parts/sidebar.php';
		?>
		<!-- End .header -->

		<!-- ~~~~~~~~~~~~~~~ Hero ~~~~~~~~~~~~~~~ -->
		<section class="hero">
			<div class="container">
				<div class="row position-absolute mt-xl-5 mt-3">
					<div class="col-xl-12 header-fixed">
  						<a class="logo" href="homepage-ajax.html"><img src="images/logo.png" alt="Nexout Logo"></a>
					</div>
				</div>
				<div class="parallax parallax-top">
					<img src="images/parallax_dark.png" alt="parallax img">
				</div>
				<div class="parallax parallax-right align-items-center">
					<img src="images/parallax_color.png" alt="parallax img">
				</div>
				<div class="mouse"></div>
				<div class="hero-single">
					<div class="row page-title align-items-center">
					<div class="col-xl-5 offset-xl-1 flexfix">
						<h1 class="mb-3">About Us</h1>
						<ul class="bread-crumb">
							<li><a href="#" class="bc-active">HOMEPAGE</a></li>
							<li><a href="#">ABOUT US</a></li>
						</ul>

					</div>
					<div class="slide-img-wrapper" data-animation="slideInUp" data-delay=".2s">
						<img src="images/nexOUT_women_04.png" alt="Hero Girl">
					</div>
				</div>
				</div><!-- End .hero-single -->
			</div><!-- End .container -->
		</section><!-- End .hero -->

		<section class="page-content about">
			<div class="container">
				<div class="row">
					<div class="col-xl-12 col-sm-12">
						<div class="about-img-wrapper mb-5">
							<img src="images/about%402x.png" alt="about us">
						</div>
					</div>
					<div class="col-xl-10 offset-xl-1 offset-sm-0 col-sm-12">
						<div class="about-head mb-5">
							My name is , <strong>Jerry Stephens</strong> <br> I am 28 years old and live in California.
						</div>
						<p class="mb-5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>

						<div class="call-out p-4 text-center mb-5">
							<p>We cover a large range of creative <strong>digital projects</strong>,<br> platforms,and campaigns to <strong>create</strong> experiences.</p>
						</div>

						<div class="clients page-head mb-5">
							<h3>Our Clients:</h3>
							<p>Proudly served some of the most famous brands:</p>
							<div class="row">
								<div class="col-md-4 col-xl-4  col-6 client">
									<a href="#">
										<img src="images/aboutme_logo_01.png" alt="Client Logo">
									</a>
								</div>
								<div class="col-md-4 col-xl-4  col-6 client">
									<a href="#">
										<img src="images/aboutme_logo_02.png" alt="Client Logo">
									</a>
								</div>
								<div class="col-md-4 col-xl-4  col-6 client">
									<a href="#">
										<img src="images/aboutme_logo_03.png" alt="Client Logo">
									</a>
								</div>
								<div class="col-md-4 col-xl-4  col-6 client">
									<a href="#">
										<img src="images/aboutme_logo_04.png" alt="Client Logo">
									</a>
								</div>
								<div class="col-md-4 col-xl-4  col-6 client">
									<a href="#"> 
										<img src="images/aboutme_logo_05.png" alt="Client Logo">
									</a>
								</div>
								<div class="col-md-4 col-xl-4  col-6 client">
									<a href="#">
										<img src="images/aboutme_logo_06.png" alt="Client Logo">
									</a>
								</div>
							</div>
						</div>

						<div class="skills page-head">
							<h3>Why to choose our skills?</h3>
							<p>Just some of the reasons  users choose us</p>
							<div class="row mt-5 skill-wrap">
								<div class="offset-1 col-2">
									<div class="skill-box" data-value="17%"><span>17%</span><span class="skill-value"></span></div>
									<span class="skill-description">Adobe Photoshop</span>
								</div>
								<div class="col-2">
									<div class="skill-box" data-value="70%"><span>70%</span><span class="skill-value"></span></div>
									<span class="skill-description">Adobe Premiere Pro</span>
								</div>
								<div class="col-2">
									<div class="skill-box" data-value="60%"><span>60%</span><span class="skill-value"></span></div>
									<span class="skill-description">Wordpress</span>
								</div>
								<div class="col-2">
									<div class="skill-box" data-value="40%"><span>40%</span><span class="skill-value"></span></div>
									<span class="skill-description">Html & Css</span>
								</div>
								<div class="col-2">
									<div class="skill-box" data-value="100%"><span>100%</span><span class="skill-value"></span></div>
									<span class="skill-description">Photography</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="black-space"></div>
		</section>

		<div class="clearfix"></div>

		<?php
			include 'parts/footer.php';
		?>
	</div><!-- End .wrap -->

	<!-- ~~~~~~~~~~~~~~~ Overlay Nav ~~~~~~~~~~~~~~~ -->
		<?php
			include 'parts/navbar.php';
		?>
	<!-- End .nav-wrapper -->

	<!-- ~~~~~~~~~~~~~~~ Ajax ~~~~~~~~~~~~~~~ -->
		<?php
			include 'parts/ajex.php';
		?>
	
	<!-- Javascripts -->
	<script src="js/jquery-3.3.1.min.js"></script>
	<script src="js/jquery.easing.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="js/imagesloaded.pkgd.min.js"></script>
	<script src="js/wow.js"></script>
	<script src="js/app.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-84288654-2"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-84288654-2');
</script>
</body>

<!-- Mirrored from www.themeflex.com/nexout-html/dark/en/about-us.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Sep 2020 07:08:57 GMT -->
</html>