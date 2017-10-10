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
		<meta name="author" content="">
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

			<!-- slider -->
			<div class="slider-wrapper">
				<section class="slider" id="slider">
					<div class="ls-slide" data-ls="transition2d:9;slidedelay:7000;">					
						<img src="pic/medical-slide-1.jpg" alt="" class="ls-bg">
						
						<div class="intro ls-l" data-ls="offsetyin:top;offsetxin:0;durationin:2000;offsetyout:bottom;offsetxout:0;durationout:1000;" style="left:80%;top:35%;">
							<span class="icon fa fa-heart"></span>
							<h2><span>SYMPTOM</span>CHECKER</h2>
							<p></p>
							<div class="buttons">
								<a href="#" class="prev"><i class="fa fa-angle-left"></i></a><!--
								--><a href="#" class="button">Read More</a><!--
								--><a href="#" class="next"><i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="ls-slide" data-ls="transition2d:40;slidedelay:7000;">				
						<img src="pic/medical-slide-2.jpg" alt="" class="ls-bg">
						
						<div class="intro ls-l" data-ls="scalexin:0.3;scaleyin:0.3;rotatexin:180;offsetxin:0;durationin:2000;durationout:2000;scalexout:2;scaleyout:2;offsetxout:0;fadeout:true;showuntil:3000;" style="left:80%;top:35%;">
							<span class="icon fa fa-comments"></span>
							<h2><span>HELP</span>ONLINE</h2>
							<p></p>
							<div class="buttons">
								<a href="#" class="prev"><i class="fa fa-angle-left"></i></a><!--
								--><a href="#" class="button">Read More</a><!--
								--><a href="#" class="next"><i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
					<div class="ls-slide" data-ls="transition2d:11;slidedelay:7000;">
						<img src="pic/medical-slide-3.jpg" alt="" class="ls-bg">
						
						<div class="intro ls-l" data-ls="skewxin:30;skewyin:0;offsetxin:right;fadein:false;durationin:2000;durationout:1000;offsetxout:right;offsetyout:0;fadeout:true;" style="left:80%;top:35%;">
							<span class="icon fa fa-flask"></span>
							<h2><span>LAB</span>TESTING</h2>
							<p></p>
							<div class="buttons">
								<a href="#" class="prev"><i class="fa fa-angle-left"></i></a><!--
								--><a href="#" class="button">Read More</a><!--
								--><a href="#" class="next"><i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
				</section>
			</div>
			<!--/ slider -->
			
			<!-- page content -->
			<main class="page-content">
				<div class="grid-row">
					<!-- benefits -->
					<section class="benefits">
						<ul>
							<li>
								<div class="pic"><i class="fa fa-heart"></i></div>
								<div class="text">
									<h2>Heart Rate</h2>
									<p>Heart rate is the speed of the heartbeat, specifically the number of heartbeats per unit of time. </p>
									<a href="#" class="more"></a>
								</div>
							</li>
							<li>
								<div class="pic"><i class="fa fa-flask"></i></div>
								<div class="text">
									<h2>Lab Test</h2>
									<p>As part of a regular checkup, to get a diagnosis, or perhaps to provide a benchmark.</p>
									<a href="#" class="more"></a>
								</div>
							</li>
							<li>
								<div class="pic"><i class="fa fa-stethoscope"></i></div>
								<div class="text">
									<h2>Symptom Check</h2>
									<p>Pinpoint your pain and check your health symptoms and signs with Parimala Health Care.</p>
									<a href="#" class="more"></a>
								</div>
							</li>
							<li>
								<div class="pic"><i class="fa fa-comments-o"></i></div>
								<div class="text">
									<h2>Online Help</h2>
									<p>Appointment for Consultation / Further Treatment.</p>
									<a href="#" class="more"></a>
								</div>
							</li>
						</ul>
					</section>
					<!--/ benefits -->
				</div>
				
				<div class="grid-row">
					<!-- services -->
					<section class="services">
						<ul>
							<li>
								<a class="pic"><i class="fa fa-leaf"></i></a>
								<h2><a href="#">Transplant Services</a></h2>
								<p>Transplantation is a procedure that is done to replace one of your organs with a healthy one from someone else.</p>
								<a href="#" class="more fa fa-long-arrow-right"></a>
							</li>
							<li>
								<a class="pic"><i class="fa fa-user-md"></i></a>
								<div class="text">
									<h2><a href="#">Qualified Doctors</a></h2>
									<p>We have highly qualififed doctors and surgeons. Care of the emergency patient and a Senior Nurse for Professional Development.</p>
									<a href="#" class="more fa fa-long-arrow-right"></a>
								</div>
							</li>
							<li>
								<a class="pic"><i class="fa fa-clock-o"></i></a>
								<h2><a href="#">24 Hours Service</a></h2>
								<p>The Emergency Department offers a full 24-hour service, seeing around. There is also a large team of medical and nursing staff.</p>
								<a href="#" class="more fa fa-long-arrow-right"></a>
							</li>
							<li>
								<a class="pic"><i class="fa fa-ambulance"></i></a>
								<div class="text">
									<h2><a href="#">Emergency Departments</a></h2>
									<p>There is also a large team of medical and nursing staff, many of whom have received intensive training in the care of the emergency.</p>
									<a href="#" class="more fa fa-long-arrow-right"></a>
								</div>
							</li>
						</ul>
					</section>
					<!--/ services -->	
				</div>
				
				<div class="grid-row">
					<!-- doctors carousel -->
					<section class="widget doctors-carousel doctors">
						<div class="widget-title">Our Doctors</div>
						<div id="doctors-carousel" class="owl-carousel">
							<div class="item">
								<div class="pic">
									<img src="pic/doctor-1.jpg" width="270" height="270" alt="Dr. Butcher House">
									<!--<div class="links">
										<ul>
											<li><a href="#" class="fa fa-skype"></a></li>
											<li><a href="#" class="fa fa-twitter"></a></li>
											<li><a href="#" class="fa fa-facebook"></a></li>
										</ul>
									</div>-->
								</div>
								<h3>Dr. Butcher House</h3>
								<p>Ophthomologist</p>
							</div>
							<div class="item">
								<div class="pic">
									<img src="pic/doctor-2.jpg" width="270" height="270" alt="Dr. Brick Wall">
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
							<div class="item">
								<div class="pic">
									<img src="pic/doctor-3.jpg" width="270" height="270" alt="Dr. Sno White">
									<!--<div class="links">
										<ul>
											<li><a href="#" class="fa fa-skype"></a></li>
											<li><a href="#" class="fa fa-twitter"></a></li>
											<li><a href="#" class="fa fa-facebook"></a></li>
										</ul>
									</div>-->
								</div>
								<h3>Dr. Sno White</h3>
								<p>Neorologist</p>
							</div>
							<div class="item">
								<div class="pic">
									<img src="pic/doctor-4.jpg" width="270" height="270" alt="Dr. Mangle Taleebin">
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
							<div class="item">
								<div class="pic">
									<img src="pic/doctor-2.jpg" width="270" height="270" alt="Dr. Brick Wall">
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
							<div class="item">
								<div class="pic">
									<img src="pic/doctor-4.jpg" width="270" height="270" alt="Dr. Mangle Taleebin">
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
							<div class="item">
								<div class="pic">
									<img src="pic/doctor-3.jpg" width="270" height="270" alt="Dr. Sno White">
									<!--<div class="links">
										<ul>
											<li><a href="#" class="fa fa-skype"></a></li>
											<li><a href="#" class="fa fa-twitter"></a></li>
											<li><a href="#" class="fa fa-facebook"></a></li>
										</ul>
									</div>-->
								</div>
								<h3>Dr. Sno White</h3>
								<p>Neorologist</p>
							</div>
							<div class="item">
								<div class="pic">
									<img src="pic/doctor-1.jpg" width="270" height="270" alt="Dr. Butcher House">
									<!--<div class="links">
										<ul>
											<li><a href="#" class="fa fa-skype"></a></li>
											<li><a href="#" class="fa fa-twitter"></a></li>
											<li><a href="#" class="fa fa-facebook"></a></li>
										</ul>
									</div>-->
								</div>
								<h3>Dr. Butcher House</h3>
								<p>Ophthomologist</p>
							</div>
						</div>
					</section>
					<!--/ doctors carousel -->
				</div>
				
				<div class="grid-row">
					<div class="grid-col grid-col-4">
						<!-- departments -->
						<section class="widget widget-departments">
							<div class="widget-title">Departments</div>
							<dl>
								<dt><i class="fa fa-medkit"></i>Primary Health Care</dt>
								<dd></dd>
								<dt><i class="fa fa-user-md"></i>Gynaecological Clinic</dt>
								<dd></dd>
								<dt><i class="fa fa-stethoscope"></i>Diagnosis With Precise</dt>
								<dd></dd>
								<dt><i class="fa fa-heart"></i>Cardiac Clinic</dt>
								<dd></dd>
								<dt><i class="fa fa-scissors"></i>General Surgery</dt>
								<dd></dd>
								<dt class="opened"><i class="fa fa-wheelchair"></i>Rehabilitation Studio</dt>
								<dd></dd>
							</dl>
						</section>
						<!--/ departments -->
					</div>
					
					<div class="grid-col grid-col-4">
						<!-- sevices -->
						<section class="widget widget-sevices">
							<div class="widget-title">Our Medical Services</div>
							<ul>
								<li><i class="fa fa-bookmark"></i><a href="#"><i class="fa fa-angle-right"></i>Cardiothoracic Surgery</a></li>
								<li><i class="fa fa-bookmark"></i><a href="#"><i class="fa fa-angle-right"></i>Cardiovascular Diseases</a></li>
								<li><i class="fa fa-bookmark"></i><a href="#"><i class="fa fa-angle-right"></i>Ophthalmology</a></li>
								<li><i class="fa fa-bookmark"></i><a href="#"><i class="fa fa-angle-right"></i>Dermatology</a></li>
								<li><i class="fa fa-bookmark"></i><a href="#"><i class="fa fa-angle-right"></i>General Surgery</a></li>
								<li><i class="fa fa-bookmark"></i><a href="#"><i class="fa fa-angle-right"></i>Consultative & Diagnostic</a></li>
							</ul>
						</section>
						<!--/ sevices -->
					</div>
					
					<div class="grid-col grid-col-4">
						<!-- appointment -->
						<section class="widget widget-appointment">
							<div class="widget-title">Make an Appointment</div>
							<form action="#">
								<div class="row">
									<input type="text" placeholder="Full Name">
									<i class="fa fa-user"></i>
								</div>
								<div class="row">
									<input type="tel" placeholder="Phone Nomber">
									<i class="fa fa-phone"></i>
								</div>
								<div class="row">
									<input type="email" placeholder="Email Address">
									<i class="fa fa-envelope"></i>
								</div>
								<div class="row">
									<input type="text" placeholder="Appointment Date">
									<i class="fa fa-calendar"></i>
								</div>
								<div class="row">
									<textarea cols="30" rows="5" placeholder="Message"></textarea>
									<i class="fa fa-align-left"></i>
								</div>
								<button class="button button-primary">Send Message</button>
							</form>
						</section>
						<!--/ appointment -->	
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