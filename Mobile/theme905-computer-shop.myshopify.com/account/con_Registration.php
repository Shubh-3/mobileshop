<?php 
	session_start();
	extract($_POST);
	$con = mysqli_connect("localhost","root","","mobileshop");


	$sql = "INSERT INTO user (UserID, FirstName, LastName, Email, Password) VALUES (NULL, '$FirstName', '$LastName', '$Email', '$Password')";

	mysqli_query($con,$sql);

	if (mysqli_errno($con)) {
		$_SESSION['err'] = "Something is wrong , not perfome task";
		header("Location: login.php");
	}
	else{
		header("Location: login.php");
	}

?>