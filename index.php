<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	
	
	<title>NexOut - Creative Portfolio Theme</title>

	<!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="keywords" content="HTML,CSS,XML,JavaScript">
    <meta name="author" content="NexOut Theme">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php
    	include 'jcb/css.php'
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
		<?php
			include 'parts/hero.php'
		?>
		<!-- End .hero -->

		<!-- ~~~~~~~~~~~~~~~ Masonry Grid ~~~~~~~~~~~~~~~ -->
		<?php
			include 'parts/mainbody.php'
		?>
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

<!-- Mirrored from www.themeflex.com/nexout-html/dark/en/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Sep 2020 07:07:13 GMT -->
</html>