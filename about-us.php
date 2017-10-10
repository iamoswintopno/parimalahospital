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
					<h1>about us</h1>
					
					<nav class="bread-crumbs">
						<a href="#">About Us</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
						<a href="#">History</a>&nbsp;&nbsp;<i class="fa fa-angle-right"></i>&nbsp;
						
					</nav>
				</div>
			</section>
			<!--/ page title -->

			<main class="page-content">
				<div class="grid-row">
					<div class="grid-col grid-col-5">
						<!-- philosophy -->
						<section class="widget">	
							<div class="widget-title">Our Philosophy</div>
							
							<div class="wpb_text_column wpb_content_element">
								<div class="wpb_wrapper">			
									<img src="pic/our-phylosophy.jpg" width="260" height="246" alt="" class="alignleft">
									<h1>
									<b>Nullam convallis volutpat nunc, gravida vestibulum</b>
									</h1>
									<p>
									Mauris interdum et. Nuncv tortor facilisis quis. Donec tempor erat vel scelerisque posuere.Nam elementum elit eget tellus faucibus euismod. Aliquam turpis nibh, dictum eu consequat ac, facilisis eu elit.
									</p>
									<br/>
									<h1>
									<b>Nulla nec rutrum tortor, in fermentum nisl</b>
									</h1>
									<p>
									Accumsan pulvinar scelerisque tincidunt, adipiscing eget risus. Nunc elit dolor, feugiat in faucibus luctus, vulputate at dui. Morbi condimentum augue in nisl gravida iaculis. Donec feugiat accumsan est, vitae aliquam nibh hendrerit in. Phasellus felis tellus, aliquet et malesuada id., luctus ac purus. In quis ligula non ipsum posuere dignissim. Phasellus felis tellus, aliquet et malesuada id., luctus ac purus. In quis ligula non ipsum posuere dignissim. 
									</p><br>
								</div>
								<button class="wpb_button wpb_wpb_button wpb_btn-arrow-right wpb_regularsize float-right">read more</button>
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
				<div class="grid-row">
					<!-- doctors carousel -->
					<section class="widget doctors-carousel doctors">
						<div class="widget-title">Our Doctors</div>
						<div id="doctors-carousel" class="owl-carousel">
							<div class="item">
								<div class="pic">
									<img src="pic/doctor-1.jpg" width="270" height="270" alt="Dr. Butcher House">
									<div class="links">
										<ul>
											<li><a href="#" class="fa fa-skype"></a></li>
											<li><a href="#" class="fa fa-twitter"></a></li>
											<li><a href="#" class="fa fa-facebook"></a></li>
										</ul>
									</div>
								</div>
								<h3>Dr. Butcher House</h3>
								<p>Ophthomologist</p>
							</div>
							<div class="item">
								<div class="pic">
									<img src="pic/doctor-2.jpg" width="270" height="270" alt="Dr. Brick Wall">
									<div class="links">
										<ul>
											<li><a href="#" class="fa fa-skype"></a></li>
											<li><a href="#" class="fa fa-twitter"></a></li>
											<li><a href="#" class="fa fa-facebook"></a></li>
										</ul>
									</div>
								</div>
								<h3>Dr. Brick Wall</h3>
								<p>Dermatologist</p>
							</div>
							<div class="item">
								<div class="pic">
									<img src="pic/doctor-3.jpg" width="270" height="270" alt="Dr. Sno White">
									<div class="links">
										<ul>
											<li><a href="#" class="fa fa-skype"></a></li>
											<li><a href="#" class="fa fa-twitter"></a></li>
											<li><a href="#" class="fa fa-facebook"></a></li>
										</ul>
									</div>
								</div>
								<h3>Dr. Sno White</h3>
								<p>Neorologist</p>
							</div>
							<div class="item">
								<div class="pic">
									<img src="pic/doctor-4.jpg" width="270" height="270" alt="Dr. Mangle Taleebin">
									<div class="links">
										<ul>
											<li><a href="#" class="fa fa-skype"></a></li>
											<li><a href="#" class="fa fa-twitter"></a></li>
											<li><a href="#" class="fa fa-facebook"></a></li>
										</ul>
									</div>
								</div>
								<h3>Dr. Mangle Taleebin</h3>
								<p>Surgeon</p>
							</div>
							<div class="item">
								<div class="pic">
									<img src="pic/doctor-2.jpg" width="270" height="270" alt="Dr. Brick Wall">
									<div class="links">
										<ul>
											<li><a href="#" class="fa fa-skype"></a></li>
											<li><a href="#" class="fa fa-twitter"></a></li>
											<li><a href="#" class="fa fa-facebook"></a></li>
										</ul>
									</div>
								</div>
								<h3>Dr. Brick Wall</h3>
								<p>Dermatologist</p>
							</div>
							<div class="item">
								<div class="pic">
									<img src="pic/doctor-4.jpg" width="270" height="270" alt="Dr. Mangle Taleebin">
									<div class="links">
										<ul>
											<li><a href="#" class="fa fa-skype"></a></li>
											<li><a href="#" class="fa fa-twitter"></a></li>
											<li><a href="#" class="fa fa-facebook"></a></li>
										</ul>
									</div>
								</div>
								<h3>Dr. Mangle Taleebin</h3>
								<p>Surgeon</p>
							</div>
							<div class="item">
								<div class="pic">
									<img src="pic/doctor-3.jpg" width="270" height="270" alt="Dr. Sno White">
									<div class="links">
										<ul>
											<li><a href="#" class="fa fa-skype"></a></li>
											<li><a href="#" class="fa fa-twitter"></a></li>
											<li><a href="#" class="fa fa-facebook"></a></li>
										</ul>
									</div>
								</div>
								<h3>Dr. Sno White</h3>
								<p>Neorologist</p>
							</div>
							<div class="item">
								<div class="pic">
									<img src="pic/doctor-1.jpg" width="270" height="270" alt="Dr. Butcher House">
									<div class="links">
										<ul>
											<li><a href="#" class="fa fa-skype"></a></li>
											<li><a href="#" class="fa fa-twitter"></a></li>
											<li><a href="#" class="fa fa-facebook"></a></li>
										</ul>
									</div>
								</div>
								<h3>Dr. Butcher House</h3>
								<p>Ophthomologist</p>
							</div>
						</div>
					</section>
					<!--/ doctors carousel -->
					</div>
					<div class="grid-row">
						<!-- callout -->
						<div class="callout wpb_content_element">
							<div class="icon"><i class="fa fa-user-md"></i></div>
							<div class="callout-wrapper">
								<div class="callout-content">
									<div class="title">Clinico strives to provide a high standard</div>
									<div class="subtitle">Morbi justo dolor, auctor non ornare quis, bibendum ut nibh. Duis aute irure dolor in reprehenderit.</div>
								</div>
								<div class="callout-button">
									<a href="#" class="button">Make an appointment</a>
								</div>
							</div>
						</div>
						<!--/ callout -->
					</div>
					<div class="grid-row">
						<div class="grid-col grid-col-4">
						<!-- categories -->
						<section class="widget widget-sevices">
							<div class="widget-title">Why Choose Clinico?</div>
							<ul>
								<li><i class="fa fa-bookmark"></i><a href="#">Integer ullamcorper ultricies eros eu consequat.</a></li>
								<li><i class="fa fa-bookmark"></i><a href="#">Nullam sit amet enim cursus.</a></li>
								<li><i class="fa fa-bookmark"></i><a href="#">Phasellus a dapibus lorem.</a></li>
								<li><i class="fa fa-bookmark"></i><a href="#">Vestibulum pretium consectetur dui quis.</a></li>
								<li><i class="fa fa-bookmark"></i><a href="#">Etiam gravida neque quis quam pulvinar.</a></li>
							</ul>
						</section>
						<!--/ categories -->
						</div>
						<div class="grid-col grid-col-4">
						<!-- help -->
						<section class="widget widget-comments">
							<div class="widget-title">Quick Help For You</div>
							<div id="help-carousel" class="owl-carousel">
								<div class="item">
									<ul>
										<li>
											<img src="pic/doctor-1.jpg" alt="">
											<p><span class="date">Sed purus purus, tincidunt</span><br>Bmolestie ut eros. Fusce blandit, sapien eu sollicitudin consectetur, ligula tellus. Fusce blandit, sapien eu sollicitudin.</p>
										</li>
										<li>
											<img src="pic/doctor-2.jpg" alt="">
											<p><span class="date">Sed purus purus</span><br>Bmolestie ut eros. Fusce blandit, sapien eu sollicitudin consectetur, ligula tellus. Fusce blandit, sapien eu sollicitudin.</p>
										</li>
									</ul>
								</div>
								<div class="item">
									<ul>
										<li>
											<img src="pic/doctor-3.jpg" alt="">
											<p><span class="date">Tincidunt purus purus</span><br>Bmolestie ut eros. Fusce blandit, sapien eu sollicitudin consectetur, ligula tellus. Fusce blandit, sapien eu sollicitudin.</p>
										</li>
										<li>
											<img src="pic/doctor-4.jpg" alt="">
											<p><span class="date">Purus purus, tincidunt</span><br>Bmolestie ut eros. Fusce blandit, sapien eu sollicitudin consectetur, ligula tellus. Fusce blandit, sapien eu sollicitudin.</p>
										</li>
									</ul>
								</div>
								<div class="item">
									<ul>
										<li>
											<img src="pic/doctor-2.jpg" alt="">
											<p><span class="date">Bmolestie tincidunt</span><br>Bmolestie ut eros. Fusce blandit, sapien eu sollicitudin consectetur, ligula tellus. Fusce blandit, sapien eu sollicitudin.</p>
										</li>
										<li>
											<img src="pic/doctor-3.jpg" alt="">
											<p><span class="date">Fusce purus, tincidunt</span><br>Bmolestie ut eros. Fusce blandit, sapien eu sollicitudin consectetur, ligula tellus. Fusce blandit, sapien eu sollicitudin.</p>
										</li>
									</ul>
								</div>
							</div>
						</section>
						<!--/ help -->
						</div>
						<div class="grid-col grid-col-4">
							<!-- testimonial -->
							<div class="widget testimonial">
								<div class="clearfix">
									<img src="pic/testimonial-1.jpg" width="96" height="96" alt="">
									<p>Sed purus purus, tincidunt eget malesuada et, molestie ut eros. Fusce blandit, sapien eu sollicitudin consectetur, ligula tellus pulvinar. Urna, quis facilisis magna dolor ac lacus. Mauris congue nec nisi sit amet malesuada. Vivamus sodales nunc et pulvinar bibendum. Morbi quis erat non odio suscipit imperdiet quis.</p>
								</div>
								<div class="author">Kate White, The flu</div>
							</div>
							<!--/ testimonial -->
						</div>
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