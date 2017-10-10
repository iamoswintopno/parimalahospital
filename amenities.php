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
<!--/ HEADERS -->

			<!-- page title -->
			<section class="page-title">
				<div class="grid-row clearfix">
					<h1>Amenities</h1>
					
					<nav class="bread-crumbs">
						<a href="#">Patient Services</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
						<a href="#">Amenities</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
						
					</nav>
				</div>
			</section>
			<!--/ page title -->

			<main class="page-content">
				<div class="grid-row">
					<div class="grid-col grid-col-5">
						<!-- philosophy -->
						<section class="widget">	
							<div class="widget-title">Admission</div>
							
							<div class="wpb_text_column wpb_content_element">
								<div class="wpb_wrapper">			
									<div class="widget-title"></div>
									<h1>
									<b>Registration</b>
									</h1>
									<p align="justified">
									<ul>
									<li> If you are coming for consultation to Parimala Hospital for the first time, you will need to complete a one time registration. Kindly complete the initial patient record and please supply all requested data accurately.</li>
									<li> A hospital file will be created and a UHID card (Unique Hospital Identification Card) will be issued to you.</li>
									</ul>
									</p><br/>
									<h1>
									<b>Admission</b>
									</h1>
									<p align="justified">
									<ul>
									<li> Your treating physician or consulting doctor has advised you to be admitted in the hospital for medical treatment. For this you or your representative will need to meet the personnel at the front desk to complete the admission formalities.</li>
									<li> At the front desk, you will be requested to complete an admission form which will require necessary information to be filled in order to register you as an inpatient. The admission form also includes a consent section which is an approval for the hospital staff to provide you medical treatment and care.</li>
									<li> In case of children below 12 years of age, the parents or guardian will be required to complete the admission form and the consent.</li>
									<li> In case payment is to be made by an insurance company, you need to produce the pre authorization letter at the front desk.</li>
									</ul>
									</p><br/>
									
									<div class="widget-title">Facilities</div>
									<h1>
									<b></b>
									</h1>
									<p align="justified">
									<ul>
									<li> Intercontinental Food</li>
									<li> Parking</li>
									<li> Internet</li>
									<li> Laundry Services</li>
									<li> Telecommunication Services</li>
									<li> Interpretation Services</li>
									<li> Bank & ATM</li>
									<li> Money Transfer & Currency Exchange</li>
									<li> Cafe Coffee Day</li>
									</ul>
									</p><br/>
									<br>
									<div class="widget-title"></div>
								</div>
							</div>
						</section>
						<!--/ philosophy -->
					</div>
					<div class="grid-col grid-col-4">
						<!-- departments -->
						<section class="widget widget-departments">
							<div class="widget-title">Popular Procedures</div>
							<dl>
								<dt class="opened"><i class="fa fa-check"></i>Primary Health Care</dt>
								<dd>Sed purus purus, tincidunt eget malesuada et, molestie ut eros. Fusce blandit, sapien eu sollicitudin consectetur, ligula tellus.</dd>
								<dt><i class="fa fa-check"></i>Gynaecological Clinic</dt>
								<dd>Donec lacinia suscipit magna, et pulvinar tortor facilisis quis. Donec tempor erat vel scelerisque posuere.</dd>
								<dt><i class="fa fa-check"></i>Diagnosis With Precise</dt>
								<dd>Nam elementum elit eget  tellus faucibus euismod. Aliquam turpis nibh, dictum eu consequat ac, facilisis eu elit. Pellentesque pellentesque orci quam, nec tempus nibh congue ut.</dd>
								<dt><i class="fa fa-check"></i>Cardiac Clinic</dt>
								<dd>Nulla nec rutrum tortor, in fermentum nisl.accumsan pulvinar scelerisque tincidunt, adipiscing eget risus.</dd>
								<dt><i class="fa fa-check"></i>General Surgery</dt>
								<dd>Sed purus purus, tincidunt eget malesuada et, molestie ut eros. Fusce blandit, sapien eu sollicitudin consectetur, ligula tellus pulvinar. Urna, quis facilisis magna dolor ac lacus.</dd>
								<dt><i class="fa fa-check"></i>Rehabilitation Studio</dt>
								<dd>Sed purus purus, tincidunt eget malesuada et, molestie ut eros. Fusce blandit, sapien eu sollicitudin consectetur, ligula tellus pulvinar. Urna, quis facilisis magna dolor ac lacus.</dd>
							</dl>
						</section>
						<!--/ departments -->
					</div>
					<hr>
				</div>
				
					
					
			</main>



<!-- FOOTERS -->
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