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
		.content a{
			margin-left: 10px;
			background-color: darkgreen;
			border: 2px solid darkgreen;
			border-radius: 5px;
			color: white;
		}
		input[type="date"]{
			width: 20%;
		}
		input[type="submit"]{
			font-size: 18px;
			background-color: gray;
			width: 7%;
			margin-left: 15px;
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
		<center>
			<form method="POST" action="ReportOut.php">
		<center><br><br>
			<center><h2> Report Out</h2></center>
	                Start Date:
					<input type="date" name="date1"><br><br>
					End Date:
					<input type="date" name="date2"><br><br>
					<input type="submit" value="Report" name="ok">
        <a href="Report.php">ReportIn</a>
        </form>
    </center>
	</div>
	<div class="footer">
		<h4>&copy Copyright 2023 </h4>
	</div>
</body>
</html>      