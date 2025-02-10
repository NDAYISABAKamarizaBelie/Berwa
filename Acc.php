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
		.content fieldset{
			width: 40%;
			height: 450px;
			margin-top: 10%;
			border-radius: 30px;
			background-color: black;
			box-shadow: 0px 0px 6px 6px;
			color: darkgreen;
			border: solid black 2px;
		}
		h2{
			color: white;
		}
		input[type="text"]{
			border: solid darkgreen 2px;
			background-color: black;
			color: white;
			width: 70%;
		}
		input[type="password"]{
			border: solid darkgreen 2px;
			background-color: black;
			color: white;
			width: 70%;
		}
		input[type="Email"]{
			border: solid darkgreen 2px;
			background-color: black;
			color: white;
			width: 70%;
			width: 70%;
            height: 30px;
            border-radius: 10px;
 		}
		::placeholder{
			color: white;
			font-size: 15px;
		}
		input[type="submit"]{
			background-color: white;
			font-size: 18px;
			color: black;
			width: 20%;
			margin-left: 3px;
		}
		a{
			color: white;
			border: solid darkgreen 2px;
			background-color: darkgreen;
			border-radius: 10px;
			border-width: 4px;
		}
	</style>
</head>
<body>
	
	<div class="content">
		<form method="POST" action="">
			<center>
				<fieldset>
				<center><h2>Registration</h2></center>
				 <input type="text" name="full" placeholder="FullName" required><br><br>
				 <input type="email" name="email" placeholder="Email" required><br><br>
				 <input type="text" name="name" placeholder="UserName" required><br><br>
			     <input type="Password" name="pass" placeholder="Password" required><br><br>
				 <input type="Password" name="cpass" placeholder="Confirm Password" required><br><br>
				 <input type="submit" value="Register" name="ok">
				 <a href="login.php">LogIn</a>
			<?php
			if (isset($_POST['ok'])) {
				$link=mysqli_connect("localhost","root","","berwashop");
				$full=$_POST['full'];
				$email=$_POST['email'];
				$user=$_POST['name'];
				$pass=$_POST['pass'];
				$cpass=$_POST['cpass'];
				$sel="SELECT * FROM shopkeeper where UserName='$user'";
				$res=mysqli_query($link,$sel);
				if ($pass!=$cpass) {
					echo "<script> alert('Incorrect Password');</script>";
				}
				elseif ($num=mysqli_num_rows($res)==1) {
					echo"<script> alert('User Already Exist');</script>";
				}
				elseif ($email==1) {
					echo "<script> alert('Your Email Has Been Used For Other Account')</script>";
				}
				else{
					$insert="INSERT INTO shopkeeper SET FullName='$full',Email='$email', UserName='$user',Password='$pass'";
					$dis=mysqli_query($link,$insert);
				
				if ($dis) {
					header("location:login.php");
			       }
			       else{
			       	 echo "<script> alert('Create Account Fail');
			         window.location=Acc.php
			         </script>";
			       }
			      }
		      	}
			?>
			 </fieldset>
		    </center>
	    </form>
	</div>
</html>      
