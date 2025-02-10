<?php
session_start();
if (!isset($_SESSION['login'])) {
	header("location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Berwa Shop</title>
	<style type="text/css">
		.content{
			font-size: 20px;
			padding-top: -20px;
		}
		.content label{
			margin-left: 60px;
			background-color: darkgreen;
			border: 2px solid darkgreen;
			border-radius: 5px;
		}
		.content label a{
			color: white;
		}
		Span{
			font-size: 50px;
		}
	</style>
</head>
<body>
	<div class="header"><br>
		<h1 style="text-align: center; text-shadow:  0px 2px black; ">Berwa Shop</h1>
	</div>
	<div class="nav_bar">
		<ul>
			<li><a href="index.php">Home</a> </li>
			<li><a href="">Product</a>
				<div class="sub_menu">
					<ul>
						<li><a href="product.php">Record</a></li>
						<li><a href="ViewP.php">View</a></li>
					</ul>
				</div></li>
			<li><a href="">Product_In</a>
				<div class="sub_menu">
					<ul>
						<li><a href="product_in.php">Record</a></li>
						<li><a href="ViewIn.php">View</a></li>
					</ul>
				</div></li>
			<li><a href="">Product_Out</a>
				<div class="sub_menu">
					<ul>
						<li><a href="product_out.php">Record</a></li>
						<li><a href="View_out.php">View</a></li>
					</ul>
				</div></li>
			<li><a href="Report.php">Report</a></li>
			<li><a href="logout.php">LogOut</a></li>
		</ul>
	</div>
	<div class="content">
	   <h2>
	   	<center>
	   		<br><br><br><br>
	   	 Hello!<br>
	   	 <span style="color: darkgreen;"><?php echo $_SESSION['log'];?></span><br> Welcome To BERWA SHOP
	   	</center>
	   </h2>
	</div>
	<div class="footer">
		<h4>&copy Copyright 2023 </h4>
	</div>
</body>
</html>      