<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <?php require_once "parts/style.php" ?>
</head>

<body class="home-2">

	<!-- START PRELOADER -->
	<div id="page-preloader">
		<div class="preloader-wrench"></div>
	</div>
	<!-- END PRELOADER --> 
    
	<!-- START HEADER SECTION -->
	<?php require_once "parts/top_bar.php" ?>
	<!-- END HEADER SECTION -->
	
	<!-- START SLIDER SECTION -->
	<?php include "parts/sliders.php" ?>
	<!-- END SLIDER SECTION  -->
	
	<!-- START ABOUT SECTION -->
    <?php include "parts/about.php" ?>
    <!-- END ABOUT SECTION -->
	
	<!-- START SERViCE SECTION -->
   <?php include "parts/service.php" ?>
    <!-- END SERViCE SECTION -->
	
	<!-- START GALLERY SECTION -->
	<?php include "parts/gallery.php" ?>
    <!-- END GALLERY SECTION -->
	
	
	<!-- START VIDEO & FAQ -->
	<?php include "parts/video_faq.php" ?>
    <!-- END VIDEO & FAQ -->
	
	<!-- START DOCTOR SECTION -->
	<?php include "parts/daoctor.php" ?>
    <!-- END DOCTOR SECTION -->
	
	<!-- START BLOG SERCTION -->
	<?php include "parts/blog.php" ?>
    <!-- END BLOG SERCTION -->
	
	<!-- SINGLE DOCTOR PROMO -->
	<?php include "parts/blog.php" ?>
	<!-- END SINGLE DOCTOR PROMO -->
	
    <!-- START FOOTER -->
 <?php include "parts/footer.php" ?>
    <!-- END FOOTER -->
	
	
    <?php include "parts/js.php" ?>
</body>

</html>