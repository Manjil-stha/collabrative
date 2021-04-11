<?php
	
	/* Creating veriable */
	/* In php we need to use doller sign to create a veriable */
	$db=mysqli_connect("localhost","root","","coursework");	/* Surver name, User name, Password, Database name */


	/* To see how it works */
	if(!$db)
	{
		die("Failed to connect to server: " . mysqli_connect_error());
	}

	//  If the error not occer...it will show this 

	// echo "Connection Successful :)";
	echo "Database is connected successfully";

?>