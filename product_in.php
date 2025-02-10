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
		<form method="POST" action="product_in.php">
			<center><br><br>
				<center><h2>Product In Stock</h2></center>
			<table>
				<tr>
					<td>ProductCode</td>
					<td><select name="code">
						<option>Select Product Code</option>
						<?php
						$con=mysqli_connect("localhost","root","","berwashop");
						$sel="SELECT * FROM product";
						$res=mysqli_query($con,$sel);
						while ($row=mysqli_fetch_array($res)) {
						?>
						<option value="<?php echo $row['ProductCode'];?>"><?php echo $row['ProductCode']?>||<?php echo $row['ProductName']?></option>
						<?php
					}
						?>
					</select></td>
				</tr>
				<tr>
					<td>Date</td>
					<td><input type="date" name="date" placeholder="Date" required></td>
				</tr>
					<td>Quantity</td>
					<td><input type="number" name="Qua" placeholder="Quantity" required></td>
				</tr>
				<tr>
					<td>UniquePrice</td>
					<td><input type="number" name="price" placeholder="UniquePrice" required></td>
				</tr>
				<tr>
					<td><input type="submit" value="Stock In" name="ok"></td>
				</tr>
				<?php
				if(isset($_POST['ok'])){
					$con=mysqli_connect("localhost","root","","berwashop");
					$code=$_POST['code'];
					$date=$_POST['date'];
					$Qua=$_POST['Qua'];
					$price=$_POST['price'];
					$total=$Qua*$price;
					$sel="SELECT * FROM productin WHERE ProductCode='$code'";
					$dis=mysqli_query($con,$sel);
					$row=mysqli_fetch_array($dis);
					if ($row>=1) {
					$DbQua=$row['Quantity'];
					$NQua=$Qua+$DbQua;
					$Dbtotal=$row['TotalPrice'];
					$Ntotal=$total+$Dbtotal;
					$upd="UPDATE productin SET Date='$date',Quantity='$NQua',UniquePrice='$price',TotalPrice='$Ntotal' WHERE ProductCode='$code'";
					$sql=mysqli_query($con,$upd);
						echo '<script>alert("Successful");</script>';
					$insertr1="INSERT INTO productin_report values ('$code','$date','$Qua','$price','$total')";
					$dis=mysqli_query($con,$insertr1);	
				}
				else{
					$insert="INSERT INTO productin values ('$code','$date','$Qua','$price','$total')";
					$dis=mysqli_query($con,$insert);
					echo '<script>window.alert(" Product In Successful");</script>';
					$insertr="INSERT INTO productin_report values ('$code','$date','$Qua','$price','$total')";
					$dis=mysqli_query($con,$insertr);

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