<!doctype html>
<!-- Martex - Software, App, SaaS & Startup Landing Pages Pack design by DSAThemes (http://www.dsathemes.com) -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">


<!-- Mirrored from dsathemes.com/html/martex/files/demo-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 08 Jun 2023 13:14:18 GMT -->
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DSAThemes">
	<meta name="description" content="Martex - Software, App, SaaS & Startup Landing Pages Pack">
	<meta name="keywords" content="Responsive, HTML5, DSAThemes, Landing, Software, Mobile App, SaaS, Startup, Creative, Digital Product">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- SITE TITLE -->
	<title>Martex - Software, App, SaaS & Startup Landing Pages Pack</title>

	<!-- FAVICON AND TOUCH ICONS -->
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" sizes="152x152" href="images/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="120x120" href="images/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="76x76" href="images/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
	<link rel="icon" href="images/apple-touch-icon.png" type="image/x-icon">

	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet">

	<!-- BOOTSTRAP CSS -->
	<link href="/_web/css/bootstrap.min.css" rel="stylesheet">

	<!-- FONT ICONS -->
	<link href="/_web/css/flaticon.css" rel="stylesheet">

	<!-- PLUGINS STYLESHEET -->
	<link href="/_web/css/menu.css" rel="stylesheet">
	<link id="effect" href="/_web/css/dropdown-effects/fade-down.css" media="all" rel="stylesheet">
	<link href="/_web/css/magnific-popup.css" rel="stylesheet">
	<link href="/_web/css/owl.carousel.min.css" rel="stylesheet">
	<link href="/_web/css/owl.theme.default.min.css" rel="stylesheet">
	<link href="/_web/css/lunar.css" rel="stylesheet">

	<!-- ON SCROLL ANIMATION -->
	<link href="/_web/css/animate.css" rel="stylesheet">

	<!-- TEMPLATE CSS -->
	<link href="/_web/css/style.css" rel="stylesheet">

	<!-- RESPONSIVE CSS -->
	<link href="/_web/css/responsive.css" rel="stylesheet">

</head>



<body>


	<!-- PRELOADER SPINNER
	============================================= -->
	<div id="loading" class="loading--pink">
		<div id="loading-center"><span class="loader"></span></div>
	</div>


	<!-- PAGE CONTENT
	============================================= -->
	<div id="page" class="page font--jakarta">


		<!-- HEADER
		============================================= -->
		<header id="header" class="tra-menu navbar-light white-scroll">
			<div class="header-wrapper">


				<!-- MOBILE HEADER -->
				<div class="wsmobileheader clearfix">
					<span class="smllogo"><img src="/_web/images/logo-pink.png" alt="mobile-logo"></span>
					<a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
				</div>


				<?= $this->include('layout/frontend/navbar');; ?>


			</div>     <!-- End header-wrapper -->
		</header>	<!-- END HEADER -->

		<?= $this->renderSection('content'); ?>
<?= $this->include('layout/frontend/footer') ?>