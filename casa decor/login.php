<!DOCTYPE html>
<html>
<head>
	<title>Login Page </title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body id="lg">
	<div class="login-form">
			<div class="main">
				<div class="form-img">
					<img src="img/log.svg">
					<span class="txt1">Welcome to Casa Decor</span><br>
					<a href="register.php" class="button1" style="vertical-align:middle"><span class="span1">Sign Up  </span></a>
				</div>
				<div class="content"><br><br>
					<h2>LOG IN</h2><br>
					<form action="login.php" method="POST">
						<input type="text" name="name" placeholder="user Name" required >
						<input type="password" name="pass" placeholder="user Password" required ><br><br>
						<button class="btn" type="submit" name="submit"> Login  </button>
					</form>
						<p class="account"> <a href="forget.php">Forget Password?</a></p><br><br>
				</div>
			</div>
	</div>
</body>
</html>

<?php
if(isset($_POST["submit"]))
{
include "db.php";
$name=$_POST['name'];
$pass=$_POST['pass'];
$sql="SELECT `name`, `pass` FROM `register` where name='$name' and pass= '$pass'";
$result= mysqli_query($con,$sql);
$result1 =mysqli_num_rows($result);
if(($name=="admin")&&($pass=="admin"))
	{
		$detils="SELECT * FROM `flora` WHERE 1";
		header("Location: admin.php");
	   }
else if($result1==1)
	{
		$sql2="INSERT INTO `login`(`name`, `pass`) VALUES ('$name' , '$pass')";
		$result2= mysqli_query($con,$sql2);
		header("Location: index.php");
		
	}
	else
	{
		echo"<font color=red><h3>Username/password is incorrect.</font></h3>";
	}
}
?>