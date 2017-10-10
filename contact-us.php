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
			
			<!-- quick search 
			<form id="quick-search" class="quick-search">
				<fieldset>
					<legend>Quick Search:</legend>
					
					<input type="text" placeholder="Search by name">
					
					<select>
						<option value="0">Speciality</option>
						<option value="1">Ophthomologist</option>
						<option value="2">Dermatologist</option>
						<option value="3">Neorologist</option>
						<option value="4">Surgeon</option>
					</select>
					
					<select>
						<option value="0">Locations</option>
						<option value="1">Primary Health Care</option>
						<option value="2">Gynaecological Clinic</option>
						<option value="3">Diagnosis With Precise</option>
						<option value="4">Cardiac Clinic</option>
						<option value="5">General Surgery</option>
					</select>
					
					<button type="submit">Search</button>
					<div class="switcher">
						<button id="quick-search-switcher" type="button">Find a doctor</button>
					</div>
				</fieldset>				
			</form>
		quick search -->

			<!-- page title -->
			<section class="page-title">
				<div class="grid-row clearfix">
					<h1>Contacts</h1>
					
					<nav class="bread-crumbs">
						<a href="index-2.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
						<a href="#">Contacts</a>
					</nav>
				</div>
			</section>
			<!--/ page title -->
			
			<!-- page content -->
			<main class="page-content">
				<div class="grid-row">
					<!-- map -->
					<section class="map">
						<div class="widget-title">Our Locations</div>
						<div id="" class="google-map">
						<iframe width="100%" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?ie=UTF8&amp;q=Parimala+Health+Care+Services&amp;fb=1&amp;gl=in&amp;hq=&amp;cid=12392094697798432586&amp;hnear=&amp;ll=12.899983,77.601017&amp;spn=0.006295,0.006295&amp;t=m&amp;iwloc=A&amp;output=embed"></iframe><br /><small><a href="https://maps.google.co.in/maps?ie=UTF8&amp;q=Parimala+Health+Care+Services&amp;fb=1&amp;gl=in&amp;hq=&amp;cid=12392094697798432586&amp;hnear=&amp;ll=12.899983,77.601017&amp;spn=0.006295,0.006295&amp;t=m&amp;iwloc=A&amp;source=embed" style="color:#0000FF;text-align:left">View Larger Map</a></small>
						</div>
					</section>
					<!--/ map -->
				</div>
				
				<div class="grid-row">
					<div class="grid-col grid-col-9">
						<!-- feedback -->
						<article class="feedback">
							<div class="widget-title">Make an Enquiry</div>
							<form action="#" id="contactform">
								<fieldset>
									<div class="clearfix">
										<div class="input">
											<label>Your name:</label>
											<input type="text" name="name">
										</div>
										<div class="input">
											<label>Your email:</label>
											<input type="text" name="email">
										</div>
									</div>
									<div class="clearfix">
										<div class="input">
											<label>Category:</label>
											<input type="text" name="category">
										</div>
										<div class="input">
											<label>Subject:</label>
											<input type="text" name="subject">
										</div>
									</div>
									<label>Message:</label>
									<textarea rows="6" name="message"></textarea>
									<div class="clearfix captcha">
											<button type="submit" class="button" value="Submit">Submit</button>
											
									</div>
								</fieldset>
							</form>							
						</article>
						<!--/ feedback -->
					</div>
					
					<div class="grid-col grid-col-3">						
						<!-- contacts -->
						<section class="widget widget-contacts">
							<div class="widget-title">Contact Details</div>
							<dl>
								<dt class="opened">Parimala Health Care Services</dt>
								<dd>
									<ul>
										<li><i class="fa fa-map-marker"></i>Bannerghatta Road, <br>Near-Kalyani Kala Mantap, <br>Bilekahalli
2nd Cross Road, <br>Sundar Ram Shetty Nagar, <br>Bilekahalli, <br>Bangalore - 560076 </li>
										<li><i class="fa fa-phone"></i>Call us: 080 2658 3117</li>
										<li><i class="fa fa-envelope"></i>E-mail: care@parimalahealthcare.com</li>
									</ul>
								</dd>
								
							</dl>
						</section>
						<!--/ contacts -->
						
						<!-- follow -->
						<section class="widget widget-follow">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							</ul>
						</section>
						<!--/ follow -->
					</div>
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