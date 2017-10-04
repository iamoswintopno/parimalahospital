 <?php 
 $page=$_SESSION['page'];
 ?>

<!-- page header -->
			<header class="page-header main-page">
				<!-- logo -->
				<section id="logo" class="logo">
					<div>
						<a href="index.php"><img src="img/blue/parimala-health-care-logo.png" width="190" height="50" alt="Parimala Health Care"></a>
					</div>
				</section>
				<!--/ logo -->
				
				<!-- main nav -->
				<nav class="main-nav">
					<ul>
						<li class='<?Php if($page=='index') echo "active" ; else echo"current-1"; ?>'><a href="index.php"><i class="fa fa-plus"></i>Home</a></li>
						<li><a href="about-us.php"><i class="fa fa-plus"></i>About Us</a>
						<ul>
								<li><a href="about-us.php">History</a></li>
								<li><a href="mission-vision.php">Mission & Vision</a></li>
								<li><a href="core-team.php">Core Team</a></li>
							</ul>
						</li>
						<li><a href="#"><i class="fa fa-plus"></i>Departments</a>
						<ul>
								<li><a href="#">Core Speciality</a></li>
								<li><a href="#">Diagnostics</a></li>
								<li><a href="#">Cosmetology</a></li>
								<li><a href="#">Medical Specialities </a></li>
								<li><a href="#">Surgical Specialities</a></li>
								<li><a href="#">Women's Center</a></li>
								<li><a href="#">Advanced Paediatrics</a></li>
								<li><a href="#">Eye & Ear Care</a></li>
								<li><a href="#">Anaesthesia</a></li>

							</ul>
						</li>	
						<li><a href="amenities.php"><i class="fa fa-plus"></i>Patient Services</a>
						<ul>
								<li><a href="amenities.php">Amenties</a></li>
								<li><a href="contact-us.php">Make an Enquiry</a></li>
								
							</ul>
						</li>	
						<li><a href="contact-us.php"><i class="fa fa-plus"></i>Contact Us</a></li>
					</ul>
				</nav>
				<!--/ main nav -->
				
				<!-- mobile nav -->
				<nav id="mobile-main-nav" class="mobile-main-nav">
					<i class="fa fa-bars"></i><a href="#" class="opener">Navigation</a>
					<ul>
						<li><a href="index.php"><i class="fa fa-plus"></i>Home</a></li>
						<li><a href="#"><i class="fa fa-plus"></i>About Us</a></li>
						<li><a href="#"><i class="fa fa-plus"></i>Departments</a></li>	
						<li><a href="#"><i class="fa fa-plus"></i>Patient Services</a></li>	
						<li><a href="#"><i class="fa fa-plus"></i>Contact Us</a></li>
					</ul>
				</nav>
				<!--/ mobile nav -->
			</header>
			<!--/ page header -->