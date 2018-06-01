<?php
	session_start(1);
if(!isset($_SESSION['loggedin'])){
	header('location: login.php');
}

?>
<!DOCTYPE HTML>
<!--
	Intensify by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Courvice</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
		
					
	
	</head>
	<body>

		<!-- Header -->
			
			<header id="header">
				<nav class="left">
					<a href="#menu"><span>Menu</span></a>
				</nav>
				
				<a href="index.html" class="logo">Courvice</a>
				
				<nav class="right1">
					<a href="index.php" id="log" class="button alt">Log out</a>
					<script type="text/javascript">
					document.getElementById("log").onclick = function(){
						<?php
							unset($_SESSION['loggedin']); 
					?>
					};
					
					</script>
					<?php
					echo "<p>Welcome ".$_SESSION['user']."</p>"; 
					?>
				</nav>
				
			</header>
		<!-- Menu -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<li><a href="courier.php">Courier</a></li>
					<li><a href="elements.html">Franchises</a></li>
					<li><a href="feedback.php">Feedback</a></li>
				</ul>
				<ul class="actions vertical">
					<li><a href="#" class="button fit">Login</a></li>
				</ul>
			</nav>

		<!-- Banner -->
			<section id="banner">
				<div class="content">
					<h1>Courvice Welcomes you</h1>
					<p>When you ship with Courvice Express– you’re shipping with specialists in national shipping and courier delivery services!<br> With our wide range of express parcel and package services, along with shipping and tracking solutions to fit your needs – learn how Courvice Express can deliver!</p>
					<ul class="actions">
						<li><a href="#one" class="button scrolly">Get Started</a></li>
					</ul>
				</div>
			</section>

		<!-- One -->
			<section id="one" class="wrapper">
				<div class="inner flex flex-3">
					<div class="flex-item left">
						<div>
							<h3>Fast Service</h3>
							<p>Courvice provides fastest service<br /> We will bring you your courier as early as possible.</p>
						</div>
						<div>
							<h3 style="margin-left: 140px">Affordable Rates</h3>
							<p>We have resonable rates<br /></p>
						</div>
					</div>
					<div class="flex-item image fit round">
						<img src="images/pic01.jpg" alt="" />
					</div>
					<div class="flex-item right">
						<div>
							<h3>Door-to-Door</h3>
							<p>We provide addition Door-to-Door service<br />Our Delivery boy will pick and drop courier on your convinience.</p>
						</div>
						<div>
							<h3>Track Order</h3>
							<p>You will be provided facility to track your order.</p>
						</div>
					</div>
				</div>
			</section>

		<!-- Two -->
			<section id="two" class="wrapper style1 special">
				<div class="inner">
					<h2>Today's Offer</h2>
					<figure>
					    <blockquote>
					        "This is the lucky Wednesday... You will get 10% off on booking courier today. Valid for one day only "
					    </blockquote>
					</figure>
				</div>
			</section>

		<!-- Three -->
			<section id="three" class="wrapper">
			<h1>Customer Reviews</h1>
				<div class="inner flex flex-3">
					<div class="flex-item box">
						<div class="image fit">
							<img src="images/pic02.jpg" alt="" />
						</div>
						<div class="content">
							<h3>Hirva</h3>
							<p>Very Good Service Provided</p>
						</div>
					</div>
					<div class="flex-item box">
						<div class="image fit">
							<img src="images/pic03.jpg" alt="" />
						</div>
						<div class="content">
							<h3>Mardav</h3>
							<p>I'll love to book my courier again from here.</p>
						</div>
					</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<h2>Get In Touch</h2>
					<ul class="actions">
						<li><span class="icon fa-phone"></span> <a href="#">(02692) 1234-5678</a></li>
						<li><span class="icon fa-envelope"></span> <a href="#">abc@xyz.com</a></li>
						<li><span class="icon fa-map-marker"></span> 123 Somewhere Road, Anand, Gujarat India</li>
					</ul>
				</div>
				<div class="copyright">
					&copy; courvice. <a href="book.html">Services</a>.
				</div>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
</body>
</html>