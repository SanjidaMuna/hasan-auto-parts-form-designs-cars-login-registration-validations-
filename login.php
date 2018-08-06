<?php
session_start(); 
if (isset($_POST['submit'])) {
	$username=$_POST['name'];
    $password=$_POST['password'];
    $error = "Both fields are required.";

		$connection = mysqli_connect("localhost", "root", "","car_database");
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysqli_real_escape_string($connection,$username);
		$password = mysqli_real_escape_string($connection,$password);
		    mysqli_select_db("car_database", $connection);
		$query = mysqli_query("select * from users where password='$password' AND name='$username'", $connection);
		$count = mysqli_num_rows($query);
		
		
		if ($count == 1) {
			$_SESSION['name']=$username; // Initializing Session
			$row = mysql_fetch_assoc($query);
			if($row["admin"]==1)
				header("location:admin.php"); // Redirecting To Other Page
			else
				header("location:users.php"); // Redirecting To Other Page
		}
		else{
			echo $error;
       }
		mysqli_close($connection); // Closing Connection
	
}