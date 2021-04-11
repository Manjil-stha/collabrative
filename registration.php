<?php

	include "join.php";

?>




<!DOCTYPE html>
<html>
<head>

	<title>Student Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Using Bootstrap front-end framework-->

	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>		

</head>
<body>

<style type="text/css">
	section{
		margin-top: -20px;
	}


/*.........*/
	.navbar{
		width: 1536px;
		background-color: yellowgreen !important;
		border-radius: none !important;
		border: none !important;
	}

	.navbar-nav li a{
		color:black !important;
	}

	.navbar-header a{
		color: black !important;
	}

</style>

</head>
<body>

				<nav class="navbar navbar-inverse">
				<div class="container-fluid">
				<div class="navbar-header">
				<a class="navbar-brand active">LIBRARY MANAGEMENT SYSTEM</a>
				</div>
					<ul class="nav navbar-nav">
						<li><a href="index.php">HOME</a></li>
						<li><a href="books.php">BOOKS</a></li>
						<li><a href="feedback.php">FEEDBACK</a></li>
					</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="stu_login.php"><span class="glyphicon glyphicon-log-in"> STUDENT_LOGIN</span></a></li>
					<li><a href="stu_login.php"><span class="glyphicon glyphicon-log-out"> STUDENT_LOGOUT</span></a></li>
					<li><a href="registration.php"><span class="glyphicon glyphicon-user"> SIGN UP</span></a></li>
				</ul>
			</div>
			</nav>

	<section>
		<div class="stu_registration_img">
			
			<div class="regbox">
			<h1 style="text-align: center; font-size: 35px; font-family: cursive;">Library Management System!</h1>
			<h1 style="text-align: center; font-size: 25px;">User Registration Form</h1>

			<form name="reg_forms" action="" method="post"><br><!--We write post because we will be posting the information we get from the user-->
				<div class="man">
				<input class="form-control" type="text" name="firstname" placeholder="First Name" required=""><br>
				<input class="form-control" type="text" name="secondname" placeholder="Second Name" required=""><br>
				<input class="form-control" type="text" name="Username" placeholder="Username" required=""><br>
				<input class="form-control" type="Password" name="Password" placeholder="Password" required=""><br>
				<input class="form-control" type="text" name="email" placeholder="Email" required=""><br>
				<input class="form-control" type="text" name="phonenumber" placeholder="Phone Number" required=""><br>
				<input class="btn btn-primary" type="submit" name="submit" value="Sign Up" style="color: black; width: 75px; height: 35px; background-color: #ffffff; border-color: #2e6da400;">
				</div>
			</form>
		</div>
	</div>
	</section>

		<?php

	/* to check if the butten is pressed or not */

		if(isset($_POST['submit']))
		{
			$count=0;
			$sql="SELECT Username from `Students`";
			$res=mysqli_query($db,$sql);

			while($row=mysqli_fetch_assoc($res))
			{
				if($row['Username']==$_POST['Username'])
				{
					$count=$count+1;
				}
			} 

			if($count==0)
			{
			mysqli_query($db,"INSERT INTO `STUDENTS` VALUES('$_POST[firstname]', '$_POST[secondname]', '$_POST[Username]', '$_POST[Password]', '$_POST[email]', '$_POST[phonenumber]');");


		?>

		<script type="text/javascript">
			alert("Successfully Registered!");
		</script>

		<?php
	}
	else
	{
		?>

		<script type="text/javascript">
			alert("Username is already taken!");
		</script>

		<?php
	}

		}

		?>

	<footer>
				
				<p style="color: white; text-align: center;">
					<br>
					Email : info@heraldcollege.edu.np<br><br>
					Phone : 9801022637, 01-4010120, 01-4010121
				</p>

			</footer>
		</body>
</html>