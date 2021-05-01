<?php 

	session_start();
	extract($_POST);
	$con = mysqli_connect("localhost","root","","mobileshop");

	$sql = "select * from user where Email='$Email' and Password='$Password'";

	$result = mysqli_query($con,$sql);

	$row = mysqli_fetch_assoc($result);


	if ($row) {
		$_SESSION['vu'] = $row['Email'];
		$_SESSION['ui'] = $row['UserID'];
		$_SESSION['displayname'] = $row['FirstName'];
		header("Location: ../index.php");
	}
	else{
		header("Location: login.php?msg=invalid");
	}
?>