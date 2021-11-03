<!DOCTYPE html>
<html>
<head>
	<title>Login Page </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body id="lg">
	<div class="login-form">
			<div class="main">
				<div class="form-img">
                    <img src="img/log.svg">
                    <span class="txt1">Welcome to Casa Decor</span><br>
                    <a href="login.php" class="button1" style="vertical-align:middle"><span class="span1">Sign In  </span></a>
				</div>
				<div class="content"><br><br>
					<h2>Forget Password !</h2>
					<form action="" method="POST">
                        <input type="text" name="name" placeholder="user Name" required >
                        <input type="password" name="pass" placeholder="New Password " required >
						<input type="password" name="cpass" placeholder="Confirm Password" required ><br><br>
						<button class="btn" type="submit" name="submit"> Submit</button><br><br><br><br>
					</form>
						
				</div>
			</div>
	</div>
</body>
</html>
<?php
if(isset($_POST["submit"]))
{
session_start();
$servername="localhost";
$username="root";
$password="";
$db="flora";
$conn= mysqli_connect($servername,$username,$password,$db);
if(!$conn)
{
	echo("Error in connection");
	echo mysqli_error($conn);
}
$name=$_POST['name'];
$pass=$_POST['pass'];
$cpass=$_POST['cpass'];
$sql="UPDATE `register` SET `pass`='$pass',`cpass`='$pass' WHERE `name`='$name'";
$result= mysqli_query($conn,$sql);
	header("Location: index.html");
}
?>