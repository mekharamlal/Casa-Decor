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
                    <span class="txt1">Welcome to Casa Decor </span><br>
                    <a href="login.php" class="button1"  style="vertical-align:middle"><span class="span1">Sign In </span></a>
				</div>
				<div class="content"><br><br>
					<h2>Create Account</h2>
					<form action="register.php" method="POST">
                        <input type="text" name="name" placeholder="user Name" required >
                        <input type="password" name="pass" placeholder="Password " required >
						<input type="password" name="cpass" placeholder="Confirm Password" required ><br><br>
						<button class="btn" type="submit" name="submit"> SignUp </button><br><br><br><br>
					</form>
						
				</div>
			</div>
	</div>
</body>
</html>

<?php
include "db.php";
if(isset($_POST["submit"]))
{
	$name= $_POST["name"];
	$p = $_POST["pass"];
	$c = $_POST["cpass"];
	/*echo "$name";
	echo "$cp";
	echo "$p"; */
	$sql="INSERT INTO `register`(`name`, `pass`, `cpass`) 
	VALUES ('$name','$p','$c')";
	// echo $sql;
	 $res=mysqli_query($con,$sql);
	 echo $res;
	 if($res>0)
	 {
		 echo "Inserted";
	 header("Location: login.php");
	 }
	 else
		 echo "Insertion failed"; 
}

	?>