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
		table {
         font-family: arial, sans-serif;
         border-collapse: collapse;
         width: 60%;
         text-align: center;
         border: solid black 2px;
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
		<center><br><br>
			<center><h2> View Product In Stock</h2></center>
		<table border="1">
			<tr>
				<th>ProductCode</th><th>Date</th><th>Quantity</th><th>Unique Price</th><th>Total Price</th>
			</tr>
			<?php
			$link=mysqli_connect("localhost","root","","berwashop");
			$sel="SELECT * FROM productin";
			$sql=mysqli_query($link,$sel);
			while ($row=mysqli_fetch_array($sql)) {
		
			?>
			<tr>
				<td><?php echo $row['ProductCode'];?></td>
				<td><?php echo $row['Date'];?></td>
				<td><?php echo $row['Quantity'];?></td>
				<td><?php echo $row['UniquePrice']."FRW";?></td>
				<td><?php echo $row['TotalPrice']."FRW";?></td>
			</tr>
		<?php
            }
		?>
	</table>
	</center>
	</div>
	<div class="footer">
		<h4>&copy Copyright 2023 </h4>
	</div>
</body>
</html>      