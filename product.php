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
		<form method="POST" action="product.php">
			<center><br><br>
				<center><h2>Product Record</h2></center>
			<table>
				<tr>
					<td>ProductCode</td>
					<td><input type="text" name="code" placeholder="Product Code" required></td>
				</tr>
				<tr>
					<td>ProductName</td>
					<td><input type="text" name="name" placeholder="Product Name" required></td>
				</tr>
				<tr>
					<td><input type="submit" value="Record" name="ok"></td>
				</tr>
				<?php
				if(isset($_POST['ok'])){
					$con=mysqli_connect("localhost","root","","berwashop");
					$code=$_POST['code'];
					$name=$_POST['name'];
					$insert="INSERT INTO Product values ('$code','$name')";
					$dis=mysqli_query($con,$insert);
					echo '<script>window.alert("insertion Successful");';

				}

				 ?>
			</table>
		</center>
		</form>
	</div>
	<div class="footer">
		<h4><b>&copy Copyright 2023</b> </h4>
	</div>
</body>
</html>      