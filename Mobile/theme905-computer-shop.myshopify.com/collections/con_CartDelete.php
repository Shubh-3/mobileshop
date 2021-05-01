<?php 
	session_start();
	if (!isset($_SESSION['vu'])) {
		header("Location: account/login.php");
	}

	extract($_GET);


	$con = mysqli_connect("localhost","root","","mobileshop");


	$sql = "DELETE FROM cart WHERE CartID = '$id'";

	mysqli_query($con,$sql);

	if (mysqli_errno($con)) {
		// $_SESSION['err'] = "Something is wrong , not perfome task";
		header("Location: cart.php");
	}
	else{
		// $_SESSION['msg'] = "Delete Successfully...";
		header("Location: cart.php?msg=Delete_Successfully");
	}

?>