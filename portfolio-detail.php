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
					<div class="col-xl-6 offset-xl-1 flexfix">
						<h1 class="mb-3">Porfolio Detail</h1>
						<ul class="bread-crumb">
							<li><a href="#" class="bc-active">HOMEPAGE</a></li>
							<li><a href="#">PORTFOLIO LIST</a></li>
						</ul>

					</div>
					<div class="slide-img-wrapper" data-animation="slideInUp" data-delay=".2s">
						<img src="images/portfolio-list.png" alt="Portfolio List">
					</div>
				</div>
				</div><!-- End .hero-single -->
			</div><!-- End .container -->
		</section><!-- End .hero -->

		<section class="portfolio-detail container">
				<div class="row">
					<div class="col-12 mb-xl-5 mb-0 mb-md-5 mb-sm-5">
						<div class="white-area">
							<img class="align-center" src="images/nexout_ProjectDetails_01.png" alt="Portfolio Detail">
							<span class="seperator"></span>
							<div class="col-10 offset-1">
								<h2 class="align-center">Our Design: The Good, the Bad, and the Ugly</h2>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
							</div>
							<span class="seperator"></span>
						</div>
					</div>
					<div class="col-12 mb-3">
						<div class="gallery-wrapper">
							<img class="align-center" src="images/nexout_ProjectDetails_02.png" alt="Portfolio Detail 1">
						</div>
					</div>
					<div class="col-6 mb-3">
						<div class="gallery-wrapper">
							<img class="align-center" src="images/nexout_ProjectDetails_03.png" alt="Portfolio Detail 2">
						</div>
					</div>
					<div class="col-6 mb-3">
						<div class="gallery-wrapper">
							<img class="align-center" src="images/nexout_ProjectDetails_04.png" alt="Portfolio Detail 3">
						</div>
					</div>


					<div class="col-6 mb-3 ">
						<div class="page-nav">
							<a class="nav-left" href="portfolio-detail.html"><span>BLACKPORT LOGO DESIGN</span> <span class="prev">Prev</span></a>
						</div>
					</div>
					<div class="col-6 mb-3 page-nav">
						<div class="page-nav">
							<a class="nav-right" href="portfolio-detail.html"><span>VINTAGE BOOK STORE LOGO DESIGN</span> <span class="next">Next</span></a>
						</div>
					</div>

				</div>
		</section>
		<div class="clearfix"></div>
		
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

<!-- Mirrored from www.themeflex.com/nexout-html/dark/en/portfolio-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Sep 2020 07:08:45 GMT -->
</html>