<?php 
session_start();
$_SESSION['page']="index";

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Parimala Health Care Services, Bangalore</title>
		
		<!-- metas -->
		<meta charset="utf-8">
		<meta name="author" content="http://themeforest.net/user/CreativeWS/portfolio">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
		<!--/ metas -->
		
		<!-- favicon -->
		<link rel="shortcut icon" href="img/blue/favicon.ico">
		<!--/ favicon -->
		
		<!-- styles -->
		<link rel="stylesheet" type="text/css" href="css/layerslider.css">
		<link rel="stylesheet" type="text/css" href="css/fullwidth/skin.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
		<link rel="stylesheet" type="text/css" href="css/jquery.fancybox.css">
		<link rel="stylesheet" type="text/css" href="css/styles.css">
		<link rel="stylesheet" type="text/css" href="css/color-blue.css">
		<link rel="stylesheet" type="text/css" href="tuner/css/styles.css">
		<!--/ styles -->
		
		<!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
	</head>
	
	<body>
		<div class="page page-boxed">

			<!-- page header -->
			<?php include "header.php";?>
			<!--/ page header -->

			<!-- page title -->
			<section class="page-title">
				<div class="grid-row clearfix">
					<h1>Our Doctors</h1>
					
					<nav class="bread-crumbs">
						<a href="#">About Us</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
						<a href="#">Core Team</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
						
					</nav>
				</div>
			</section>
			<!--/ page title -->
			
			<!-- page content -->
			<main class="page-content">
				<div class="grid-row">
					<!-- doctors -->
					<section id="doctors" class="doctors">
						<div class="widget-title">Meet Our Team</div>
						
						<select class="filter">
							<option value=".item">All doctors</option>
							<option value=".item1">Ophthalmologist</option>
							<option value=".item2">Dermatologist</option>
							<option value=".item3">Neurologist</option>
							<option value=".item4">Surgeon</option>
						</select>
						
						<div class="grid">			
							<div class="item item1">
								<div class="pic">
									<img src="pic/doctor-1.jpg" alt="Dr. Butcher House">
									<!--<div class="links">
										<ul>
											<li><a href="#" class="fa fa-skype"></a></li>
											<li><a href="#" class="fa fa-twitter"></a></li>
											<li><a href="#" class="fa fa-facebook"></a></li>
										</ul>
									</div>-->
								</div>
								<h3>Dr. Butcher House</h3>
								<p>Ophthalmologist</p>
							</div>
							<div class="item item2">
								<div class="pic">
									<img src="pic/doctor-2.jpg" alt="Dr. Brick Wall">
									<!--<div class="links">
										<ul>
											<li><a href="#" class="fa fa-skype"></a></li>
											<li><a href="#" class="fa fa-twitter"></a></li>
											<li><a href="#" class="fa fa-facebook"></a></li>
										</ul>
									</div>-->
								</div>
								<h3>Dr. Brick Wall</h3>
								<p>Dermatologist</p>
							</div>
							<div class="item item3">
								<div class="pic">
									<img src="pic/doctor-3.jpg" alt="Dr. Sno White">
									<!--<div class="links">
										<ul>
											<li><a href="#" class="fa fa-skype"></a></li>
											<li><a href="#" class="fa fa-twitter"></a></li>
											<li><a href="#" class="fa fa-facebook"></a></li>
										</ul>
									</div>-->
								</div>
								<h3>Dr. Sno White</h3>
								<p>Neurologist</p>
							</div>
							<div class="item item4">
								<div class="pic">
									<img src="pic/doctor-4.jpg" alt="Dr. Mangle Taleebin">
									<!--<div class="links">
										<ul>
											<li><a href="#" class="fa fa-skype"></a></li>
											<li><a href="#" class="fa fa-twitter"></a></li>
											<li><a href="#" class="fa fa-facebook"></a></li>
										</ul>
									</div>-->
								</div>
								<h3>Dr. Mangle Taleebin</h3>
								<p>Surgeon</p>
							</div>
							
							
							
						</div>
					</section>
					<!--/ doctors -->
				</div>
			</main>
			<!--/ page content -->

			<!-- page footer -->
			<?php include "footer.php";?>

		</div>
		
		<!-- scripts -->
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui.min.js"></script>
		<script type="text/javascript" src="js/jquery.migrate.min.js"></script>
		<script type="text/javascript" src="js/owl.carousel.min.js"></script>
		<script type="text/javascript" src="js/jquery.isotope.min.js"></script>
		<script type="text/javascript" src="js/jquery.fancybox.pack.js"></script>
		<script type="text/javascript" src="js/jquery.fancybox-media.js"></script>
		<script type="text/javascript" src="js/jquery.flot.js"></script>
		<script type="text/javascript" src="js/jquery.flot.pie.js"></script>
		<script type="text/javascript" src="js/jquery.flot.categories.js"></script>
		<script type="text/javascript" src="js/greensock.js"></script>
		<script type="text/javascript" src="js/layerslider.transitions.js"></script>
		<script type="text/javascript" src="js/layerslider.kreaturamedia.jquery.js"></script>

	<!-- Superscrollorama -->		
		<script type="text/javascript" src="js/jquery.superscrollorama.js"></script>
		<script type="text/javascript" src="js/TweenMax.min.js"></script>
		<script type="text/javascript" src="js/TimelineMax.min.js"></script>
	<!--/ Superscrollorama -->
	
		<script type="text/javascript" src="js/jquery.ui.core.min.js"></script>
		<script type="text/javascript" src="js/jquery.ui.widget.min.js"></script>
		<script type="text/javascript" src="js/jquery.ui.tabs.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-tabs-rotate.js"></script>
		<script type="text/javascript" src="js/jquery.ui.accordion.min.js"></script>
		<script type="text/javascript" src="js/jquery.tweet.js"></script>
	<!-- EASYPIECHART -->
		<script type="text/javascript" src="js/jquery.easypiechart.js"></script>
	<!--/ EASYPIECHART -->
		<script type="text/javascript" src="js/scripts.js"></script>
		<!--/ scripts -->
		
		
	</body>
</html>