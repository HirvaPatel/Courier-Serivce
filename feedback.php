<?php
session_start(1);
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Feedback</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				<nav class="left">
					<a href="#menu"><span>Menu</span></a>
				</nav>
				<a href="index.php" class="logo">Feedback</a>
				<nav class="right" style="margin-right: 10em">
					<a href="login.php" class="button alt">Log in</a>
				</nav>
				<nav class="right" style="float:right">
					<a href="index.php" class="button alt">Log out</a>
				</nav>
			</header>

		<!-- Menu -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<li><a href="courier.php">Prepare Courier</a></li>
					<li><a href="track.php">Track your Courier</a></li>
				</ul>
			</nav>

		<!-- Main -->
		<section id="content">
		<h2 align="center">Feedback Form</h2>
		<div class="featured-item">
			<form style="margin-left:25em; margin-top:5em;width:500px" method="post">
			<h3><strong>Enter Name </strong></h3>
			<input type="text" name="f_name" placeholder="Enter Your Name">
			<br>
			<br>
			<h3><strong>Enter City </strong></h3>
			<input type="text" name="city" placeholder="Enter Your City">
			<br>
			<br>
			<h3><strong>Enter FeedBack </strong></h3> 
			<input type="text" name="feedback" placeholder="Enter Your Feedback">
			<br>
			<br>
			<input style="margin-left:100px" type="submit" class="track" name="fbck" value="Submit Feedback">
		</div>
		<?php
if(isset($_POST['fbck']))
{
	$con=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($con,"wt");
	$name=$_POST['f_name'];
	$city=$_POST['city'];
	$feed=$_POST['feedback'];
	$query="insert into feedback(name,city,feedback) values ('$name','$city','$feed')";
	$result=mysqli_query($con,$query);
}
?>
				<section id="main" class="wrapper">
				<div class="inner">
					<header class="align-center">
						
					<hr class="major" />

					<!-- Elements -->
						
								<!-- Lists -->
											<h4>Icons</h4>
											<ul class="icons">
												<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
												<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
												<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
												<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
												<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
												<li><a href="#" class="icon fa-tumblr"><span class="label">Tumblr</span></a></li>
											</ul>

										
									

		<!-- Footer -->
			<footer id="footer">
				<div class="inner">
					<h2>Get In Touch</h2>
				<ul class="actions">
						<li><span class="icon fa-phone"></span> <a href="#">(91)-9123456789</a></li>
						<li><span class="icon fa-envelope"></span> <a href="#">information@gcet.ac.in</a></li>
						<li><span class="icon fa-map-marker"></span> 123 Somewhere Road, near GCET, VVN Anand</li>
					</ul>
				</div>
				<div class="copyright">
					&copy; Untitled. Designed by GCET students.
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