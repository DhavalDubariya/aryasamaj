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
			include 'parts/sidebar.php'
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
						<h1 class="mb-3">Contact</h1>
						<ul class="bread-crumb">
							<li><a href="#" class="bc-active">HOMEPAGE</a></li>
							<li><a href="#">CONTACT</a></li>
						</ul>

					</div>
					<div class="slide-img-wrapper" data-animation="slideInUp" data-delay=".2s">
						<img src="images/nexOUT_women_08.png" alt="Hero Girl">
					</div>
				</div>
				</div><!-- End .hero-single -->
			</div><!-- End .container -->
		</section><!-- End .hero -->

		<!-- End .hero -->

		<section class="contact white-area">
			<div class="container">
				<div class="row">
					<div class="col-12 align-center">
						<span>Call us</span>
						<h2>OR FILL THE FORM.</h2>
					</div>
					<div class="col-xl-4 col-sm-12">
						<div class="contact-item">
							<span class="contact-icon">
								<i class="fas fa-phone"></i>
			
							</span>
							<span class="contact-item-title">
								+123 1500-543-4590
							</span>
							<p>Don’t hesitate to contact us!</p>
						</div>

					<div class="contact-item">
							<span class="contact-icon">
			
								<i class="far fa-envelope-open"></i>

							</span>
							<span class="contact-item-title">
								hello@themeflex.com
							</span>
							<p>Emaill Adress</p>
						</div>
					<div class="contact-item">
							<span class="contact-icon">
								<i class="fas fa-map-marker-alt"></i>
							</span>
							<span class="contact-item-title">
								321 Car World, 2nd Break
							</span>
							<p>Company Headquarters</p>
						</div>
					</div>
					<div class="col-xl-8 col-sm-12">
						<form id="contact-us" action="http://www.themeflex.com/nexout-html/dark/en/contacts.php" method="post">
							<div class="row">
								<div class="col-6 mb-4">
									<input type="text" name="name" placeholder="Name" class="requiredField">
								</div>
								<div class="col-6 mb-4">
									<input type="text" name="email" placeholder="Email" class="requiredField">
								</div>
								<div class="col-6">
									<input type="text" name="website" placeholder="Website">
								</div>
								<div class="col-6">
									<input type="text" name="phonenumber" placeholder="Phone Number">
								</div>
								<div class="col-12 mt-4">
									<textarea name="message" class="requiredField"></textarea>
								</div>
								<div class="col-12 mt-4">
									<button type="submit" class="button red">SEND MESSAGE</button>
								</div>
							</div>
							<input type="hidden" name="submitted" id="submitted" value="true" />
						</form>
					</div>
				</div>
			</div>
		</section>
		<section class="map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d12607.438222270473!2d144.9573901142005!3d-37.816758498830424!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1str!2str!4v1545513268831" height="500" allowfullscreen></iframe>
			<div class="container">
				<div class="row">
					<div class="col-12">
						<div class="map-description white-area align-center">
				<h3>We cover a large range of creative <strong>digital projects</strong>, platforms, <br>
and campaigns to create experiences.</h3>
						</div>
					</div>
				</div>
			</div>	
		</section>
		<div class="clearfix"></div>

		<!-- ~~~~~~~~~~~~~~~ Footer ~~~~~~~~~~~~~~~ -->
		<?php
			include 'parts/footer.php'
		?>

	</div><!-- End .wrap -->

	<!-- ~~~~~~~~~~~~~~~ Overlay Nav ~~~~~~~~~~~~~~~ -->
		<?php
			include 'parts/navbar.php'
		?>
	<!-- End .nav-wrapper -->

	<!-- ~~~~~~~~~~~~~~~ Ajax ~~~~~~~~~~~~~~~ -->
		<?php
			include 'parts/ajex.php'
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

<!-- Mirrored from www.themeflex.com/nexout-html/dark/en/contact-page.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Sep 2020 07:08:20 GMT -->
</html>