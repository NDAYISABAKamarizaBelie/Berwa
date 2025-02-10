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
		<form method="POST" action="update.php">
			<center>
				<?php
				$con=mysqli_connect("localhost","root","","berwashop");
				$code=$_GET['Upd'];
				$sel="SELECT * FROM product WHERE ProductCode='$code'";
				$Dis=mysqli_query($con,$sel);
				$row=mysqli_fetch_array($Dis);
				?>
				<center><h3>Product Record</h3></center>
			<table>
				<tr>
					<td>ProductCode</td>
					<td><input type="text" name="code" placeholder="Product Code" value="<?php echo $row['ProductCode']; ?>" required></td>
				</tr>
				<tr>
					<td>ProductName</td>
					<td><input type="text" name="name" placeholder="Product Name" value="<?php echo $row['ProductName'];?>"required></td>
				</tr>
				<tr>
					<td><input type="submit" value="Update" name="ok"></td>
				</tr>
				<?php
				if(isset($_POST['ok'])){
					$con=mysqli_connect("localhost","root","","berwashop");
					$code=$_POST['code'];
					$name=$_POST['name'];
					$Upd="UPDATE Product set ProductName='$name' WHERE ProductCode='$code'";
					$dis=mysqli_query($con,$Upd);
					if ($dis) {
						echo '<script>window.alert("Successful");</script>';
						header("location:ViewP.php");
					}
					else{
						echo "<script>alert('Your Update Failed ');</script>";
					}

				}

				 ?>
			</table>
		</center>
		</form>
	</div>
	<div class="footer">
		<h4>&copy Copyright 2023 </h4>
	</div>
</body>
</html>      	