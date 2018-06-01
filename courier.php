<?php
session_start(1);
//if(!isset($_SESSION['loggedin'])){
	//header('location: login.php');
//}
?>

<!DOCTYPE HTML>

<!--
	Intensify by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Courier Service</title>
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
				<a href="index.php" class="logo">Courier</a>
			</header>

		<!-- Menu -->
			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Home</a></li>
					<li><a href="courier.php">Prepare Courier</a></li>
					<li><a href="track.php">Track your Courier</a></li>
				</ul>
				<ul class="actions vertical">
					<li><a href="login.php" class="button fit">Login</a></li>
				</ul>
			</nav>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
				<div class="image fit">
						<img src="images/bg-01.jpg" alt="" />
					</div>
					<header class="align-center">
						<h1>Book your Courier here</h1>
					</header>
					
					
		<form action="#" id="booking-form" method="POST">
		
		<div class="tab-content">
			<div class="tab-pane" id="step1">
				<ul>
					<li>
            <label>Full Name</label>
            <div class="errorTxt"></div>
        
              <input type="text" class="name" name="name" required="true">
				 </li>
				 <li>
				 	<label>Contact Number</label>
            <div class="errorTxt"></div>
        
              <input type="text" class="contact" name="contact">
				 </li>
				 <li>
            <label>Email</label>
            <div class="errorTxt"></div>
        
              <input type="email" class="email" name="email" required="true">
				 </li>
				 <li>
            <label>Delivery Address</label>
            <div class="errorTxt"></div>
        
              <input type="text" class="del_address" name="del_address" required="true">
				 </li>
				 <li>
            <label>Weight in kg's</label>
            <div class="errorTxt"></div>
        
              <input type="text" class="weigth" name="weight" required="true">
				 </li>
				</ul>

			</div>
			<div class="tab-pane" id="step2">
				<ul>
					<li>
            <label>Which time of day?</label>
            <div class="errorTxt"></div>
            <select name="bf_time">
              <option value="">Select</option>
              <option value="Morning">Morning</option>
              <option value="Midday">Midday</option>
              <option value="Late afternoon, ending with a sunset">Late afternoon, ending with a sunset</option>
					  </select>
				  </li>
					<li>
            <label>How many hours would you like to charter for?</label>
            <div class="errorTxt"></div>
            <select name="bf_hours">
              <option value="">Select</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
              <option value="6">6</option>
              <option value="7">7</option>
              <option value="8">8</option>
              <option value="Overnight (24 hours)">Overnight (24 hours)</option>
					  </select>
					</li>
				</ul>
			</div>
			<div class="tab-pane" id="step3">
				<ul>
					<li>
            <label>Do you have any questions or a message? (Optional)</label>
					  <textarea name="bf_message"></textarea>
					</li>
				</ul>
			</div>
			<input type="submit" class="book" name="book" value="Book Courier">
		</div>
  		<?php
  		
 								$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
								$db = mysql_select_db("wt", $connection); // Selecting Database from Server
							if(isset($_POST['book'])){ // Fetching variables of the form which travels in URL
								
								$name = $_POST['name'];
								$contact = $_POST['contact'];
								$email = $_POST['email'];
								$del_addr = $_POST['del_address'];
								$weight = $_POST['weight'];
								$time = $_POST['bf_time'];
								$hours = $_POST['bf_hours'];
								$que_msg = $_POST['bf_message'];
								
								if($name!='')//Insert Query of SQL
								{
									$query = mysql_query("insert into courier(name, contact_no, email, del_addr, weight, time, hours, que_msg) values ('$name', $contact, '$email', '$del_addr', '$weight', '$time', '$hours', '$que_msg')");
								}
								//header("Location: login.html");

								$_SESSION['name']=$name;
								echo("<script>location.href = 'details.php';</script>");
								mysql_close($connection); // Closing Connection with Server
							}
							?>
		
	
		<div id="loader" style="display: none;">
			<img src="//d2erq0e4xljvr7.cloudfront.net/assets/img/ring.svg">
		</div>
	</form>
				</div>
			</section>

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
					&copy; Untitled. Design by GCET students.
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