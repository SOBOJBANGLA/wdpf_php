<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico" />
    <title>Cleveland - Responsive Health And Medical Template</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Font  -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,700|Raleway:400,400i,500i,600,700" rel="stylesheet"> 
    <!-- flaticon icon -->
    <link rel="stylesheet" href="assets/fonts/icon-font.min.css">
    <!-- icofont icon -->
    <link rel="stylesheet" href="assets/fonts/icofont.css">
    <!--- meanmenu Css-->
    <link rel="stylesheet" href="assets/css/meanmenu.min.css" media="all" />
    <!-- animate CSS -->
    <link rel="stylesheet" href="assets/css/animate.css">
	<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="assets/css/extralayers.css" media="screen" />
    <!--- owl carousel Css-->
    <link rel="stylesheet" href="assets/owlcarousel/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/owlcarousel/css/owl.theme.default.min.css">
    <!-- venobox -->
    <link rel="stylesheet" href="assets/venobox/css/venobox.css" />
    <!-- Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- Responsive  CSS -->
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body class="home-2">

	<!-- START PRELOADER -->
	<div id="page-preloader">
		<div class="preloader-wrench"></div>
	</div>
	<!-- END PRELOADER --> 
    
	<!-- START HEADER SECTION -->
	<?php include "parts/front/header.php" ?>
	<!-- END HEADER SECTION -->
	
	<!-- START SLIDER SECTION -->
	<?php include "parts/front/slider.php" ?>
	<!-- END SLIDER SECTION  -->
	
	<!-- START ABOUT SECTION -->
	<?php include "parts/front/about.php" ?>
    <!-- END ABOUT SECTION -->
	
	<!-- START SERViCE SECTION -->
    <?php include "parts/front/service.php" ?>
    <!-- END SERViCE SECTION -->
	
	<!-- START GALLERY SECTION -->
    <?php include "parts/front/gallery.php" ?>
    <!-- END GALLERY SECTION -->
	
	
	<!-- START VIDEO & FAQ -->
	<?php include "parts/front/video.php" ?>
    <!-- END VIDEO & FAQ -->
	
	<!-- START DOCTOR SECTION -->
	<?php include "parts/front/doctor.php" ?>
    <!-- END DOCTOR SECTION -->
	
	<!-- START BLOG SERCTION -->
	<?php include "parts/front/blog.php" ?>
    <!-- END BLOG SERCTION -->
	
	<!-- SINGLE DOCTOR PROMO -->
	<?php include "parts/front/sin_doc.php" ?>
	<!-- END SINGLE DOCTOR PROMO -->
	
    <!-- START FOOTER -->
    <?php include "parts/front/footer.php" ?>
    <!-- END FOOTER -->
	
	
    <!-- Latest jQuery -->
    <script src="assets/js/jquery-2.2.4.min.js"></script>
    <!-- popper js -->
    <script src="assets/bootstrap/js/popper.min.js"></script>
    <!-- Latest compiled and minified Bootstrap -->
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <!-- meanmenu min js  -->
    <script src="assets/js/jquery.meanmenu.min.js"></script>
    <!-- Sticky JS -->
    <script src="assets/js/jquery.sticky.js"></script>
	<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
	<script src="rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
	<script src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<!-- gijgo js  -->
    <script src="assets/js/gijgo.js"></script>
    <!-- owl-carousel min js  -->
    <script src="assets/owlcarousel/js/owl.carousel.min.js"></script>
    <!-- jquery appear js  -->
    <script src="assets/js/jquery.appear.js"></script>
    <!-- countTo js -->
    <script src="assets/js/jquery.inview.min.js"></script>
    <!-- jquery mixitup js -->
    <script src="assets/js/jquery.mixitup.min.js"></script>
    <!-- venobox js -->
    <script src="assets/venobox/js/venobox.min.js"></script>
    <!-- scrolltopcontrol js -->
    <script src="assets/js/scrolltopcontrol.js"></script>
    <!-- WOW - Reveal Animations When You Scroll -->
    <script src="assets/js/wow.min.js"></script>
    <!-- scripts js -->
    <script src="assets/js/scripts.js"></script>
    <script>
            jQuery(document).ready(function() {			
            	jQuery('.tp-banner').show().revolution(
            	{
            		dottedOverlay:"none",
            		delay:16000,
            		startwidth:1170,
            		startheight:550,
            		hideThumbs:200,
            		
            		thumbWidth:100,
            		thumbHeight:50,
            		thumbAmount:5,
            		
            		navigationType:"bullet",
            		navigationArrows:"solo",
            		navigationStyle:"preview4",
            		
            		touchenabled:"on",
            		onHoverStop:"on",
            		
            		swipe_velocity: 0.7,
            		swipe_min_touches: 1,
            		swipe_max_touches: 1,
            		drag_block_vertical: false,
            								
            		parallax:"mouse",
            		parallaxBgFreeze:"on",
            		parallaxLevels:[7,4,3,2,5,4,3,2,1,0],
            								
            		keyboardNavigation:"off",
            		
            		navigationHAlign:"center",
            		navigationVAlign:"bottom",
            		navigationHOffset:0,
            		navigationVOffset:20,
            
            		soloArrowLeftHalign:"left",
            		soloArrowLeftValign:"center",
            		soloArrowLeftHOffset:20,
            		soloArrowLeftVOffset:0,
            
            		soloArrowRightHalign:"right",
            		soloArrowRightValign:"center",
            		soloArrowRightHOffset:20,
            		soloArrowRightVOffset:0,
            				
            		shadow:0,
            		fullWidth:"on",
            		fullScreen:"off",
            
            		spinner:"spinner4",
            		
            		stopLoop:"off",
            		stopAfterLoops:-1,
            		stopAtSlide:-1,
            
            		shuffle:"off",
            		
            		autoHeight:"off",						
            		forceFullWidth:"off",						
            									
            								
            		hideThumbsOnMobile:"off",
            		hideNavDelayOnMobile:1500,						
            		hideBulletsOnMobile:"off",
            		hideArrowsOnMobile:"off",
            		hideThumbsUnderResolution:0,
            		
            		hideSliderAtLimit:0,
            		hideCaptionAtLimit:0,
            		hideAllCaptionAtLilmit:0,
            		startWithSlide:0,
            		fullScreenOffsetContainer: ""	
            	});				
            });	//ready
            
       </script>
</body>

</html>