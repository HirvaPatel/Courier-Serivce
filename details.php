<?php

session_start(1);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
</head>
	<body class="subpage">

		<!-- Header -->
			<header id="header">
				
				<a href="index.php" class="logo">Courier Details</a>
				<nav class="right">
					<a href="index.php" class="button alt">Logout</a>
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
		<?php
$name = $_SESSION['user'];
	$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
	$db = mysql_select_db("wt", $connection); // Selecting Database from Server
		
						
		$q="select * from courier where name='".$name."'";
		$query = mysql_query($q);

		//if($query == false){
		//throw new Exception(mysql_error($connection));
		//}

		while($row = mysql_fetch_assoc($query))
		{
		echo "<fieldset>
		 <br><br><table>
			<tr>
			<th>First Name:</th><td>".$row['name']."</td>
			</tr>
			<tr>
			<th>Contact Number:</th>
			<td>".$row['contact_no']."</td>
			</tr>
			<tr>
			<th>Delivery Address:</th>
			<td>".$row['del_addr']."</td>
			</tr>
			<tr>
			<th>Weight:</th>
			<td>".$row['weight']."</td>
			</tr>	
		</table>
	
	</fieldset>";
		
		$_SESSION['weight'] = $row['weight'];
		echo "</br></br>Thank for choosing our Service";
		//echo("<script>location.href = 'home.php';</script>");
										
		}
		mysql_close($connection); // Closing Connection with Server
	
	$w = '';
	$w = $_SESSION['weight'];						
	if($w <= 5)
		$rate=100;
	else if($w >6 && $w <=10)
		$rate=150;
	else if($w >11 && $w <=20)
		$rate=200;
	else if($w >21 && $w <=30)
		$rate=250;
	else if($w >31 && $w <=40)
		$rate=300;
	else if($w >41 && $w <=50)
		$rate=350;
	
	echo "</br></br>Your Courier will cost you: Rs.".$rate;

	$arr = '0987654321';

	$str = substr(str_shuffle($arr), 0,7);
	echo "</br></br>Tracking ID: ".$str;
 								$connection = mysql_connect("localhost", "root", ""); // Establishing Connection with Server
								$db = mysql_select_db("wt", $connection); // Selecting Database from Server
								$p= "insert into courier (track) values('$str') where name=".$name;
								 $query = mysql_query($p);

							
								//header("Location: login.html");

								mysql_close($connection); // Closing Connection with Server

?>
<form method="POST" action="track.php">
	<input type="submit" class="track" name="track" value="Want to track your Courier?" style="margin-left: 30em;">
	</form>
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
</body>
</html>
