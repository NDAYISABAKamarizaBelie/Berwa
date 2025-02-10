<?php
session_start();
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
		.content fieldset{
			width: 25%;
			height: 300px;
			margin-top: 10%;
			border-radius: 30px;
			background-color: black;
			box-shadow: 0px 0px 6px 6px;
			color: darkgreen;
			border: solid black 2px;
		}
		.content table{
			color: white;
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
		::placeholder{
			color: white;
			font-size: 15px;
		}
		input[type="submit"]{
			background-color: white;
			font-size: 18px;
			color: black;
			width: 30%;
			margin-left: 15px;
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
		<form method="POST" action="login.php">
			<center>
				<fieldset>
				<center><h2>LogIn Form</h2></center>
		        <input type="text" name="user" placeholder="UserName" required><br><br>
				<input type="Password" name="pass" placeholder="Password" required><br><br>
				<input type="submit" value="LogIn" name="ok">
		    	<a href="Acc.php">Create Account</a>
			<?php
			if (isset($_POST['ok'])) {
				$link=mysqli_connect("localhost","root","","berwashop");
				$user=$_POST['user'];
				$pass=$_POST['pass'];
				$sel="SELECT * FROM shopkeeper WHERE UserName='$user' AND Password='$pass'";
				$dis=mysqli_query($link,$sel);
				$row=mysqli_fetch_array($dis);
			     if ($num=mysqli_num_rows($dis)==1) {
					$_SESSION['login']=$row['UserName'];
					$_SESSION['log']=$row['FullName'];
			         header("location:index.php");
				}
				else{
					
					header("location:Acc.php");
				}
		        }
			?>
			 </fieldset>
		    </center>
	    </form>
	</div>
</body>
</html>      